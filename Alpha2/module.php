<?
class MoehlenhoffAlpha2 extends IPSModule
{

	private static $values = Array(
		"ID" => Array("Name" => "BasisID", "Type" => 3, "Profile" => "", "Action" => false),
		"HEATAREA[@nr='1']/T_ACTUAL" => Array("Name" => "Aktuelle Temperatur", "Type" => 2, "Profile" => "~Temperature.Room", "Action" => false),
		"HEATAREA[@nr='1']/T_TARGET" => Array("Name" => "Soll Temperatur", "Type" => 2, "Profile" => "~Temperature.Room", "Action" => true),
		"HEATCTRL[@nr='1']/INUSE" => Array("Name" => "Inuse", "Type" => 1, "Profile" => "", "Action" => false)
	);

	private function ReduceToIdent($ID) {
		return str_replace(Array("[@nr='", "']", "/"), Array("", "", "_"), $ID);
	}

	private function GetKeyForIdent($Ident) {
		
		foreach(self::$values as $key => $value) {
			if(self::ReduceToIdent($key) == $Ident) {
				return $key;
			}
		}
		
		throw new Exception("Cannot find key for ident");
		
	}

	private function GetTypeForIdent($Ident) {
		
		foreach(self::$values as $key => $value) {
			if(self::ReduceToIdent($key) == $Ident) {
				return $value["Type"];
			}
		}
		
		throw new Exception("Cannot find type for ident");
		
	}

	public function Create(){
		//Never delete this line!
		parent::Create();

		//These lines are parsed on Symcon Startup or Instance creation
		//You cannot use variables here. Just static values.
		$this->RegisterPropertyString("IPAddress", "172.17.31.161");

		foreach(self::$values as $key => $value){

			switch($value["Type"]){
				case 0:
					$this->RegisterVariableBoolean($this->ReduceToIdent($key), $value["Name"], $value["Profile"]);
					break;

				case 1:
					$this->RegisterVariableInteger($this->ReduceToIdent($key), $value["Name"], $value["Profile"]);
					break;

				case 2:
					$this->RegisterVariableFloat($this->ReduceToIdent($key), $value["Name"], $value["Profile"]);
					break;

				case 3:
					$this->RegisterVariableString($this->ReduceToIdent($key), $value["Name"], $value["Profile"]);
					break;
			}
			if ($value["Action"]){
				$this->EnableAction($this->ReduceToIdent($key));
			}

		}

	}

	public function Destroy(){
		//Never delete this line!
		parent::Destroy();

	}

	public function ApplyChanges(){
		//Never delete this line!
		parent::ApplyChanges();

	}

	public function RequestAction($Ident, $Value) {

		$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><Devices></Devices>');

		$Device = $xml->addChild('Device');
		$Device->addChild('ID', GetValueString($this->GetIDForIdent("ID")));

		if(self::GetTypeForIdent($Ident) == 2 /* Float */)
			$Value = str_replace(",", ".", $Value);
		
		$Key = self::GetKeyForIdent($Ident);
		$KeySplit = explode("/", $Key);
		$Attr = "";
		
		$AttrPos = strpos($KeySplit[0], "[");
		if($AttrPos !== false) {
			$Attr = substr($KeySplit[0], $AttrPos+6, 1);
			$KeySplit[0] = substr($KeySplit[0], 0, $AttrPos);
		}

		$Command = $Device->addChild($KeySplit[0]);
		if($Attr != "")
			$Command->addAttribute('nr', $Attr);
		$Command->addChild($KeySplit[1], $Value);

		$url = "http://".$this->ReadPropertyString('IPAddress')."/data/changes.xml";
		$header  = "POST HTTP/1.0 \r\n";
		$header .= "Content-type: text/xml \r\n";
		$header .= "Content-length: ".strlen($xml->asXML())." \r\n";
		$header .= "Content-transfer-encoding: text \r\n";
		$header .= "Connection: close \r\n\r\n";
		$header .= $xml->asXML();

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 4);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $header);

		$data = curl_exec($ch);

		if(curl_errno($ch)) {
			print curl_error($ch);
		} else {
			SetValue($this->GetIDForIdent($Ident), $Value);
		}

		curl_close($ch);

	}

	public function RequestStatus(){

		$xml = @simplexml_load_file("http://".$this->ReadPropertyString('IPAddress')."/data/static.xml");
		if($xml === false)
			return;
		
		foreach(self::$values as $key => $value) {
			SetValue($this->GetIDForIdent($this->ReduceToIdent($key)), (string)$xml->Device->xpath($key)[0]);
		}

	}

}
?>