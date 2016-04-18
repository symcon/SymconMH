<?
class MoehlenhoffAlpha2 extends IPSModule
{

	private static $values = Array(
		"ID" => Array("Name" => "Basis ID", "Type" => 3, "Profile" => "", "Action" => false),
		"COOLING" => Array("Name" => "Basis Kühlen-Modus", "Type" => 0, "Profile" => "~Switch", "Action" => true),
		"ANTIFREEZE" => Array("Name" => "Basis Frostschutz", "Type" => 0, "Profile" => "~Switch", "Action" => true),
		"ANTIFREEZE_TEMP" => Array("Name" => "Basis Frostschutz Temperatur", "Type" => 2, "Profile" => "~Temperature.Room", "Action" => true),
		"ECO_DIFF" => Array("Name" => "Basis Absenkdifferenztemperatur", "Type" => 2, "Profile" => "~Temperature.Room", "Action" => true),
		"T_HEAT_VACATION" => Array("Name" => "Basis Urlaub Temperatur Heizen", "Type" => 2, "Profile" => "~Temperature.Room", "Action" => true),
		"VACATION/VACATION_STATE" => Array("Name" => "Basis Urlaub Status", "Type" => 1, "Profile" => "MH.VacationState", "Action" => true),
		"PUMP_OUTPUT/PUMP_LEADTIME" => Array("Name" => "Pumpen Vorlaufzeit (Minuten)", "Type" => 1, "Profile" => "MH.PumpTime", "Action" => true),
		"PUMP_OUTPUT/PUMP_STOPPINGTIME" => Array("Name" => "Pumpen Nachlaufzeit (Minuten)", "Type" => 1, "Profile" => "MH.PumpTime", "Action" => true),
		"RELAIS/RELAIS_LEADTIME" => Array("Name" => "Relais Vorlaufzeit (Minuten)", "Type" => 1, "Profile" => "MH.RelaisTime", "Action" => true),
		"RELAIS/RELAIS_STOPPINGTIME" => Array("Name" => "Relais Nachlaufzeit (Minuten)", "Type" => 1, "Profile" => "MH.RelaisTime", "Action" => true),
		"EMERGENCYMODE/EMERGENCYMODE_TIME" => Array("Name" => "Notbetrieb Aktivierungszeit (Minuten)", "Type" => 1, "Profile" => "MH.EmergencyTime", "Action" => true),
		"EMERGENCYMODE/PWMCYCLE" => Array("Name" => "Notbetrieb PWM-Zyklusdauer (Minuten)", "Type" => 1, "Profile" => "MH.PWMCycle", "Action" => true),
		"EMERGENCYMODE/PWMHEAT" => Array("Name" => "Notbetrieb PWM Heizendauer (Prozent)", "Type" => 1, "Profile" => "MH.PWMPercent", "Action" => true),
		"EMERGENCYMODE/PWMCOOL" => Array("Name" => "Notbetrieb PWM Kühlendauer (Prozent)", "Type" => 1, "Profile" => "MH.PWMPercent", "Action" => true),
		"HEATAREA[@nr='1']/HEATAREA_NAME" => Array("Name" => "Heizzone Name", "Type" => 3, "Profile" => "", "Action" => true),
		"HEATAREA[@nr='1']/HEATAREA_MODE" => Array("Name" => "Heizzone Betriebsmodus", "Type" => 1, "Profile" => "MH.HeatAreaMode", "Action" => true),
		"HEATAREA[@nr='1']/T_ACTUAL" => Array("Name" => "Heizzone Akt. Temperatur", "Type" => 2, "Profile" => "~Temperature.Room", "Action" => false),
		"HEATAREA[@nr='1']/T_ACTUAL_EXT" => Array("Name" => "Heizzone Akt. Temperatur Ext. Sensor", "Type" => 2, "Profile" => "~Temperature.Room", "Action" => false),
		"HEATAREA[@nr='1']/T_TARGET" => Array("Name" => "Heizzone Soll Temperatur", "Type" => 2, "Profile" => "~Temperature.Room", "Action" => true),
		"HEATAREA[@nr='1']/HEATAREA_STATE" => Array("Name" => "Heizzone Status", "Type" => 0, "Profile" => "MH.HeatAreaState", "Action" => false),
		"HEATAREA[@nr='1']/PRESENCE" => Array("Name" => "Heizzone Anwesenheit", "Type" => 0, "Profile" => "~Presence", "Action" => true),
		"HEATAREA[@nr='1']/T_TARGET_MIN" => Array("Name" => "Heizzone Soll Temperatur Min", "Type" => 2, "Profile" => "~Temperature.Room", "Action" => true),
		"HEATAREA[@nr='1']/T_TARGET_MAX" => Array("Name" => "Heizzone Soll Temperatur Max", "Type" => 2, "Profile" => "~Temperature.Room", "Action" => true),
		"HEATAREA[@nr='1']/RPM_MOTOR" => Array("Name" => "Heizzone Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true),
		"HEATAREA[@nr='1']/OFFSET" => Array("Name" => "Heizzone Korrektur Ist-Werterfassung", "Type" => 2, "Profile" => "~Temperature.Room", "Action" => true),
		"HEATAREA[@nr='1']/T_HEAT_DAY" => Array("Name" => "Heizzone Temperatur Heizen Tag", "Type" => 2, "Profile" => "~Temperature.Room", "Action" => true),
		"HEATAREA[@nr='1']/T_HEAT_NIGHT" => Array("Name" => "Heizzone Temperatur Heizen Nacht", "Type" => 2, "Profile" => "~Temperature.Room", "Action" => true),
		"HEATAREA[@nr='1']/T_COOL_DAY" => Array("Name" => "Heizzone Temperatur Kühlen Tag", "Type" => 2, "Profile" => "~Temperature.Room", "Action" => true),
		"HEATAREA[@nr='1']/T_COOL_NIGHT" => Array("Name" => "Heizzone Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "~Temperature.Room", "Action" => true),
		"HEATAREA[@nr='1']/T_FLOOR_DAY" => Array("Name" => "Heizzone Bodentemperatur Tag", "Type" => 2, "Profile" => "~Temperature.Room", "Action" => true),
		"HEATAREA[@nr='1']/HEATINGSYSTEM" => Array("Name" => "Heizzone Heizsystem", "Type" => 1, "Profile" => "MH.HeatingSystem", "Action" => true),
		"HEATAREA[@nr='1']/BLOCK_HC" => Array("Name" => "Heizzone Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true),
		"HEATCTRL[@nr='1']/INUSE" => Array("Name" => "Heizkreis 01 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl1"),
		"HEATCTRL[@nr='1']/ACTOR" => Array("Name" => "Heizkreis 01 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl1"),
		"HEATCTRL[@nr='1']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 01 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Keep" => "ShowHeatCtrl1"),
		"HEATCTRL[@nr='2']/INUSE" => Array("Name" => "Heizkreis 02 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl2"),
		"HEATCTRL[@nr='2']/ACTOR" => Array("Name" => "Heizkreis 02 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl2"),
		"HEATCTRL[@nr='2']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 02 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Keep" => "ShowHeatCtrl2"),
		"HEATCTRL[@nr='3']/INUSE" => Array("Name" => "Heizkreis 03 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl3"),
		"HEATCTRL[@nr='3']/ACTOR" => Array("Name" => "Heizkreis 03 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl3"),
		"HEATCTRL[@nr='3']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 03 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Keep" => "ShowHeatCtrl3"),
		"HEATCTRL[@nr='4']/INUSE" => Array("Name" => "Heizkreis 04 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl4"),
		"HEATCTRL[@nr='4']/ACTOR" => Array("Name" => "Heizkreis 04 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl4"),
		"HEATCTRL[@nr='4']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 04 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Keep" => "ShowHeatCtrl4"),
		"HEATCTRL[@nr='5']/INUSE" => Array("Name" => "Heizkreis 05 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl5"),
		"HEATCTRL[@nr='5']/ACTOR" => Array("Name" => "Heizkreis 05 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl5"),
		"HEATCTRL[@nr='5']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 05 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Keep" => "ShowHeatCtrl5"),
		"HEATCTRL[@nr='6']/INUSE" => Array("Name" => "Heizkreis 06 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl6"),
		"HEATCTRL[@nr='6']/ACTOR" => Array("Name" => "Heizkreis 06 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl6"),
		"HEATCTRL[@nr='6']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 06 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Keep" => "ShowHeatCtrl6"),
		"HEATCTRL[@nr='7']/INUSE" => Array("Name" => "Heizkreis 07 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl7"),
		"HEATCTRL[@nr='7']/ACTOR" => Array("Name" => "Heizkreis 07 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl7"),
		"HEATCTRL[@nr='7']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 07 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Keep" => "ShowHeatCtrl7"),
		"HEATCTRL[@nr='8']/INUSE" => Array("Name" => "Heizkreis 08 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl8"),
		"HEATCTRL[@nr='8']/ACTOR" => Array("Name" => "Heizkreis 08 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl8"),
		"HEATCTRL[@nr='8']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 08 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Keep" => "ShowHeatCtrl8"),
		"HEATCTRL[@nr='9']/INUSE" => Array("Name" => "Heizkreis 09 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl9"),
		"HEATCTRL[@nr='9']/ACTOR" => Array("Name" => "Heizkreis 09 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl9"),
		"HEATCTRL[@nr='9']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 09 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Keep" => "ShowHeatCtrl9"),
		"HEATCTRL[@nr='10']/INUSE" => Array("Name" => "Heizkreis 10 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl10"),
		"HEATCTRL[@nr='10']/ACTOR" => Array("Name" => "Heizkreis 10 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl10"),
		"HEATCTRL[@nr='10']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 10 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Keep" => "ShowHeatCtrl10"),
		"HEATCTRL[@nr='11']/INUSE" => Array("Name" => "Heizkreis 11 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl11"),
		"HEATCTRL[@nr='11']/ACTOR" => Array("Name" => "Heizkreis 11 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl11"),
		"HEATCTRL[@nr='11']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 11 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Keep" => "ShowHeatCtrl11"),
		"HEATCTRL[@nr='12']/INUSE" => Array("Name" => "Heizkreis 12 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl12"),
		"HEATCTRL[@nr='12']/ACTOR" => Array("Name" => "Heizkreis 12 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Keep" => "ShowHeatCtrl12"),
		"HEATCTRL[@nr='12']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 12 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Keep" => "ShowHeatCtrl12")
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

		$this->RegisterPropertyBoolean("ShowHeatCtrl1", true);
		$this->RegisterPropertyBoolean("ShowHeatCtrl2", false);
		$this->RegisterPropertyBoolean("ShowHeatCtrl3", false);
		$this->RegisterPropertyBoolean("ShowHeatCtrl4", false);
		$this->RegisterPropertyBoolean("ShowHeatCtrl5", false);
		$this->RegisterPropertyBoolean("ShowHeatCtrl6", false);
		$this->RegisterPropertyBoolean("ShowHeatCtrl7", false);
		$this->RegisterPropertyBoolean("ShowHeatCtrl8", false);
		$this->RegisterPropertyBoolean("ShowHeatCtrl9", false);
		$this->RegisterPropertyBoolean("ShowHeatCtrl10", false);
		$this->RegisterPropertyBoolean("ShowHeatCtrl11", false);
		$this->RegisterPropertyBoolean("ShowHeatCtrl12", false);

		//Variablenprofile
		//VACATION_STATE
		if(!IPS_VariableProfileExists("MH.VacationState")){
			IPS_CreateVariableProfile("MH.VacationState", 1);
			IPS_SetVariableProfileValues("MH.VacationState", 0, 2, 1);
			IPS_SetVariableProfileIcon("MH.VacationState", "Calendar");
			IPS_SetVariableProfileAssociation("MH.VacationState", 0, "Aus", "", -1);
			IPS_SetVariableProfileAssociation("MH.VacationState", 1, "Geplant", "", 0x0000FF);
			IPS_SetVariableProfileAssociation("MH.VacationState", 2, "Aktiv", "", 0x00FF00);
		}
		//PUMP_TIME
		if(!IPS_VariableProfileExists("MH.PumpTime")){
			IPS_CreateVariableProfile("MH.PumpTime", 1);
			IPS_SetVariableProfileIcon("MH.PumpTime", "Clock");
			IPS_SetVariableProfileValues("MH.PumpTime", 0, 5, 1);
			IPS_SetVariableProfileText("MH.PumpTime", "", "min");
		}
		//RELAIS_TIME
		if(!IPS_VariableProfileExists("MH.RelaisTime")){
			IPS_CreateVariableProfile("MH.RelaisTime", 1);
			IPS_SetVariableProfileIcon("MH.RelaisTime", "Clock");
			IPS_SetVariableProfileValues("MH.RelaisTime", 0, 60, 1);
			IPS_SetVariableProfileText("MH.RelaisTime", "", "min");
		}
		//EMERGENCYMODE_TIME
		if(!IPS_VariableProfileExists("MH.EmergencyTime")){
			IPS_CreateVariableProfile("MH.EmergencyTime", 1);
			IPS_SetVariableProfileIcon("MH.EmergencyTime", "Clock");
			IPS_SetVariableProfileValues("MH.EmergencyTime", 30, 600, 30);
			IPS_SetVariableProfileText("MH.EmergencyTime", "", "min");
		}
		//PWMCYCLE
		if(!IPS_VariableProfileExists("MH.PWMCycle")){
			IPS_CreateVariableProfile("MH.PWMCycle", 1);
			IPS_SetVariableProfileIcon("MH.PWMCycle", "Clock");
			IPS_SetVariableProfileValues("MH.PWMCycle", 10, 30, 1);
			IPS_SetVariableProfileText("MH.PWMCycle", "", "min");
		}
		//PWMPERCENT
		if(!IPS_VariableProfileExists("MH.PWMPercent")){
			IPS_CreateVariableProfile("MH.PWMPercent", 1);
			IPS_SetVariableProfileIcon("MH.PWMPercent", "Intensity");
			IPS_SetVariableProfileValues("MH.PWMPercent", 0, 100, 5);
			IPS_SetVariableProfileText("MH.PWMPercent", "", "%");
		}
		//HEATAREA_MODE
		if(!IPS_VariableProfileExists("MH.HeatAreaMode")){
			IPS_CreateVariableProfile("MH.HeatAreaMode", 1);
			IPS_SetVariableProfileIcon("MH.HeatAreaMode", "Shutter");
			IPS_SetVariableProfileValues("MH.HeatAreaMode", 0, 2, 1);
			IPS_SetVariableProfileAssociation("MH.HeatAreaMode", 0, "Auto", "Ok", 0x0000FF);
			IPS_SetVariableProfileAssociation("MH.HeatAreaMode", 1, "Tag", "Sun", -1);
			IPS_SetVariableProfileAssociation("MH.HeatAreaMode", 2, "Nacht", "Moon", -1);
		}
		//HEATAREA_STATE
		if(!IPS_VariableProfileExists("MH.HeatAreaState")){
			IPS_CreateVariableProfile("MH.HeatAreaState", 0);
			IPS_SetVariableProfileIcon("MH.HeatAreaState", "Power");
			IPS_SetVariableProfileAssociation("MH.HeatAreaState", 0, "OK", "", -1);
			IPS_SetVariableProfileAssociation("MH.HeatAreaState", 1, "Error", "", 0xFF0000);
		}
		//HEATAREA_RPM_MOTOR
		if(!IPS_VariableProfileExists("MH.HeatAreaRPMMotor")){
			IPS_CreateVariableProfile("MH.HeatAreaRPMMotor", 1);
			IPS_SetVariableProfileIcon("MH.HeatAreaRPMMotor", "TurnRight");
			IPS_SetVariableProfileValues("MH.HeatAreaRPMMotor", 0, 100, 25);
			IPS_SetVariableProfileText("MH.HeatAreaRPMMotor", "", "%");
			IPS_SetVariableProfileAssociation("MH.HeatAreaRPMMotor", 0, "Aus", "", -1);
			IPS_SetVariableProfileAssociation("MH.HeatAreaRPMMotor", 25, "25%", "", -1);
			IPS_SetVariableProfileAssociation("MH.HeatAreaRPMMotor", 50, "50%", "", -1);
			IPS_SetVariableProfileAssociation("MH.HeatAreaRPMMotor", 75, "75%", "", -1);
			IPS_SetVariableProfileAssociation("MH.HeatAreaRPMMotor", 100, "100%", "", -1);
		}
		//HEATAREA_HEATINGSYSTEM
		if(!IPS_VariableProfileExists("MH.HeatingSystem")){
			IPS_CreateVariableProfile("MH.HeatingSystem", 1);
			IPS_SetVariableProfileIcon("MH.HeatingSystem", "Lock");
			IPS_SetVariableProfileValues("MH.HeatingSystem", 0, 4, 1);
			IPS_SetVariableProfileAssociation("MH.HeatingSystem", 0, "Radiator", "", -1);
			IPS_SetVariableProfileAssociation("MH.HeatingSystem", 1, "FHB-Niedrigenergie", "", -1);
			IPS_SetVariableProfileAssociation("MH.HeatingSystem", 2, "FBH-Standard", "", -1);
			IPS_SetVariableProfileAssociation("MH.HeatingSystem", 3, "Konvektor passiv", "", -1);
			IPS_SetVariableProfileAssociation("MH.HeatingSystem", 4, "Konvektor aktiv", "", -1);
		}
		//HEATAREA_BLOCK_HC
		if(!IPS_VariableProfileExists("MH.HeatAreaBlockHC")){
			IPS_CreateVariableProfile("MH.HeatAreaBlockHC", 1);
			IPS_SetVariableProfileIcon("MH.HeatAreaBlockHC", "Lock");
			IPS_SetVariableProfileValues("MH.HeatAreaBlockHC", 0, 2, 1);
			IPS_SetVariableProfileAssociation("MH.HeatAreaBlockHC", 0, "Normal", "", -1);
			IPS_SetVariableProfileAssociation("MH.HeatAreaBlockHC", 1, "Heizen sperren", "", -1);
			IPS_SetVariableProfileAssociation("MH.HeatAreaBlockHC", 2, "Kühlen sperren", "", -1);
		}
		//HEATAREA_HEATCTRL_STATE
		if(!IPS_VariableProfileExists("MH.HeatAreaHeatCTRLState")){
			IPS_CreateVariableProfile("MH.HeatAreaHeatCTRLState", 1);
			IPS_SetVariableProfileIcon("MH.HeatAreaHeatCTRLState", "Shutter");
			IPS_SetVariableProfileValues("MH.HeatAreaHeatCTRLState", 0, 2, 1);
			IPS_SetVariableProfileAssociation("MH.HeatAreaHeatCTRLState", 0, "Aus", "", -1);
			IPS_SetVariableProfileAssociation("MH.HeatAreaHeatCTRLState", 1, "An", "", 0x00FF00);
			IPS_SetVariableProfileAssociation("MH.HeatAreaHeatCTRLState", 2, "Fehler", "", 0xFF0000);
		}
	}

	public function Destroy(){
		//Never delete this line!
		parent::Destroy();

	}

	public function ApplyChanges(){
		//Never delete this line!
		parent::ApplyChanges();

		foreach(self::$values as $key => $value){

			if(!isset($value["Keep"])){
				$keep = true;
			} else {
				$keep = $this->ReadPropertyBoolean($value["Keep"]);
			}
			$this->MaintainVariable($this->ReduceToIdent($key), $value["Name"], $value["Type"], $value["Profile"], 0, $keep);

			if ($keep && $value["Action"]){
				$this->EnableAction($this->ReduceToIdent($key));
			}

		}
		
	}

	public function RequestAction($Ident, $Value) {

		$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><Devices></Devices>');

		if(GetValueString($this->GetIDForIdent("ID")) == "") {
			echo "BaseID not requested yet. Please request values at least once!";
			return;
		}
		
		$Device = $xml->addChild('Device');
		$Device->addChild('ID', GetValueString($this->GetIDForIdent("ID")));

		if(self::GetTypeForIdent($Ident) == 0 /* Boolean */)
			$Value = $Value ? "1" : "0";
		if(self::GetTypeForIdent($Ident) == 2 /* Float */)
			$Value = str_replace(",", ".", $Value);
		
		$Key = self::GetKeyForIdent($Ident);
		if(strpos($Key, "/") === false) {
			$Device->addChild($Key, $Value);
		} else {
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
		}

		//IPS_LogMessage("Alpha2", $xml->asXML());
		
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
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
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

			if(!isset($value["Keep"])){
				$keep = true;
			} else {
				$keep = $this->ReadPropertyBoolean($value["Keep"]);
			}
			
			if ($keep){
				SetValue($this->GetIDForIdent($this->ReduceToIdent($key)), (string)$xml->Device->xpath($key)[0]);
			}
		}

	}

}
?>