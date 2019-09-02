<?php

declare(strict_types=1);
class MoehlenhoffAlpha2 extends IPSModule
{
    private static $values = [
        'ID'                      => ['Name' => 'Basis ID', 'Type' => 3, 'Profile' => '', 'Action' => false, 'Position' => 50],
        'VERS_SW_STM'             => ['Name' => 'Basis SW STM Version', 'Type' => 3, 'Profile' => '', 'Action' => false, 'Position' => 50],
        'VERS_SW_ETH'             => ['Name' => 'Basis SW ETH Version', 'Type' => 3, 'Profile' => '', 'Action' => false, 'Position' => 50],
        'VERS_HW'                 => ['Name' => 'Basis HW Version', 'Type' => 3, 'Profile' => '', 'Action' => false, 'Position' => 50],
        'TEMPERATUREUNIT'         => ['Name' => 'Basis Temperatureinheit', 'Type' => 1, 'Profile' => 'MH.TemperatureUnit', 'Action' => true, 'Position' => 50],
        'SUMMERWINTER'            => ['Name' => 'Basis Automatische Zeitumstellung', 'Type' => 0, 'Profile' => 'MH.SummerWinter', 'Action' => true, 'Position' => 50],
        'TPS'                     => ['Name' => 'Basis Taupunktsensor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 50],
        'LIMITER'                 => ['Name' => 'Basis Temperaturbegrenzer', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 50],
        'CHANGEOVER'              => ['Name' => 'Basis Betriebsart Heizen/Kühlen (CO-Eingang)', 'Type' => 0, 'Profile' => 'MH.ChangeOver', 'Action' => false, 'Position' => 50],
        'MODE'                    => ['Name' => 'Basis Rang im Systemverbund', 'Type' => 1, 'Profile' => 'MH.Mode', 'Action' => false, 'Position' => 50],
        'SMARTSTART'              => ['Name' => 'Basis Smartstart ein/aus', 'Type' => 0, 'Profile' => '~Switch', 'Action' => true, 'Position' => 50],
        'COOLING'                 => ['Name' => 'Basis Kühlen-Modus', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 50],
        'ANTIFREEZE'              => ['Name' => 'Basis Frostschutz', 'Type' => 0, 'Profile' => '~Switch', 'Action' => true, 'Position' => 50],
        'ANTIFREEZE_TEMP'         => ['Name' => 'Basis Frostschutz Temperatur', 'Type' => 1, 'Profile' => 'MH.AntifreezeTemp', 'Action' => true, 'Position' => 50],
        'ECO_DIFF'                => ['Name' => 'Basis Absenkdifferenztemperatur', 'Type' => 2, 'Profile' => 'MH.EcoDiff', 'Action' => true, 'Position' => 50],
        'T_HEAT_VACATION'         => ['Name' => 'Basis Urlaub Temperatur Heizen', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 50],
        'VACATION/VACATION_STATE' => ['Name' => 'Basis Urlaub Status', 'Type' => 1, 'Profile' => 'MH.VacationState', 'Action' => true, 'Position' => 50],
        'ECO_INPUT_STATE'         => ['Name' => 'Basis Absenkeingang', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 50],
        //"PUMP_OUTPUT/PUMP_LEADTIME" => Array("Name" => "Pumpen Vorlaufzeit (Minuten)", "Type" => 1, "Profile" => "MH.PumpTime", "Action" => true, "Position" => 50),
        //"PUMP_OUTPUT/PUMP_STOPPINGTIME" => Array("Name" => "Pumpen Nachlaufzeit (Minuten)", "Type" => 1, "Profile" => "MH.PumpTime", "Action" => true, "Position" => 50),
        //"RELAIS/RELAIS_LEADTIME" => Array("Name" => "Relais Vorlaufzeit (Minuten)", "Type" => 1, "Profile" => "MH.RelaisTime", "Action" => true, "Position" => 50),
        //"RELAIS/RELAIS_STOPPINGTIME" => Array("Name" => "Relais Nachlaufzeit (Minuten)", "Type" => 1, "Profile" => "MH.RelaisTime", "Action" => true, "Position" => 50),
        //"EMERGENCYMODE/EMERGENCYMODE_TIME" => Array("Name" => "Notbetrieb Aktivierungszeit (Minuten)", "Type" => 1, "Profile" => "MH.EmergencyTime", "Action" => true, "Position" => 50),
        //"EMERGENCYMODE/PWMCYCLE" => Array("Name" => "Notbetrieb PWM-Zyklusdauer (Minuten)", "Type" => 1, "Profile" => "MH.PWMCycle", "Action" => true, "Position" => 50),
        //"EMERGENCYMODE/PWMHEAT" => Array("Name" => "Notbetrieb PWM Heizendauer (Prozent)", "Type" => 1, "Profile" => "MH.PWMPercent", "Action" => true, "Position" => 50),
        //"EMERGENCYMODE/PWMCOOL" => Array("Name" => "Notbetrieb PWM Kühlendauer (Prozent)", "Type" => 1, "Profile" => "MH.PWMPercent", "Action" => true, "Position" => 50),
        "HEATAREA[@nr='1']/HEATAREA_NAME"  => ['Name' => 'Heizzone 01 Name', 'Type' => 3, 'Profile' => '', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea01'],
        "HEATAREA[@nr='1']/HEATAREA_MODE"  => ['Name' => 'Heizzone 01 Betriebsmodus', 'Type' => 1, 'Profile' => 'MH.HeatAreaMode', 'Action' => true, 'Position' => 62, 'Keep' => 'ShowHeatArea01'],
        "HEATAREA[@nr='1']/T_ACTUAL"       => ['Name' => 'Heizzone 01 Ist Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 60, 'Keep' => 'ShowHeatArea01'],
        "HEATAREA[@nr='1']/T_ACTUAL_EXT"   => ['Name' => 'Heizzone 01 Ist Temperatur Ext. Sensor', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 63, 'Keep' => 'ShowHeatArea01'],
        "HEATAREA[@nr='1']/T_TARGET"       => ['Name' => 'Heizzone 01 Soll Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTTarget', 'Action' => true, 'Position' => 61, 'Keep' => 'ShowHeatArea01'],
        "HEATAREA[@nr='1']/HEATAREA_STATE" => ['Name' => 'Heizzone 01 Status', 'Type' => 0, 'Profile' => 'MH.HeatAreaState', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea01'],
        "HEATAREA[@nr='1']/PRESENCE"       => ['Name' => 'Heizzone 01 Anwesenheit', 'Type' => 0, 'Profile' => '~Presence', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea01'],
        "HEATAREA[@nr='1']/T_TARGET_MIN"   => ['Name' => 'Heizzone 01 Soll Temperatur Min', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea01'],
        "HEATAREA[@nr='1']/T_TARGET_MAX"   => ['Name' => 'Heizzone 01 Soll Temperatur Max', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea01'],
        //"HEATAREA[@nr='1']/RPM_MOTOR" => Array("Name" => "Heizzone 01 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea01"),
        "HEATAREA[@nr='1']/OFFSET" => ['Name' => 'Heizzone 01 Korrektur Ist-Werterfassung', 'Type' => 2, 'Profile' => 'MH.HeatAreaOffset', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea01'],
        //"HEATAREA[@nr='1']/T_HEAT_DAY" => Array("Name" => "Heizzone 01 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea01"),
        //"HEATAREA[@nr='1']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 01 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea01"),
        //"HEATAREA[@nr='1']/T_COOL_DAY" => Array("Name" => "Heizzone 01 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea01"),
        //"HEATAREA[@nr='1']/T_COOL_NIGHT" => Array("Name" => "Heizzone 01 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea01"),
        //"HEATAREA[@nr='1']/T_FLOOR_DAY" => Array("Name" => "Heizzone 01 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea01"),
        "HEATAREA[@nr='1']/HEATINGSYSTEM" => ['Name' => 'Heizzone 01 Heizsystem', 'Type' => 1, 'Profile' => 'MH.HeatingSystem', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea01'],
        //"HEATAREA[@nr='1']/BLOCK_HC" => Array("Name" => "Heizzone 01 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea01"),
        "HEATAREA[@nr='1']/PROGRAM_WEEK"        => ['Name' => 'Heizzone 01 Programm wochentags', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea01'],
        "HEATAREA[@nr='1']/PROGRAM_WEEKEND"     => ['Name' => 'Heizzone 01 Programm Wochenende', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea01'],
        "HEATAREA[@nr='1']/PARTY"               => ['Name' => 'Heizzone 01 Partyschaltung (Stunden)', 'Type' => 1, 'Profile' => 'MH.HeatAreaParty', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea01'],
        "HEATAREA[@nr='1']/PARTY_REMAININGTIME" => ['Name' => 'Heizzone 01 Partyschaltung Restzeit (min)', 'Type' => 1, 'Profile' => 'MH.HeatAreaPartyRemainingTime', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea01'],
        "HEATAREA[@nr='2']/HEATAREA_NAME"       => ['Name' => 'Heizzone 02 Name', 'Type' => 3, 'Profile' => '', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea02'],
        "HEATAREA[@nr='2']/HEATAREA_MODE"       => ['Name' => 'Heizzone 02 Betriebsmodus', 'Type' => 1, 'Profile' => 'MH.HeatAreaMode', 'Action' => true, 'Position' => 72, 'Keep' => 'ShowHeatArea02'],
        "HEATAREA[@nr='2']/T_ACTUAL"            => ['Name' => 'Heizzone 02 Ist Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 70, 'Keep' => 'ShowHeatArea02'],
        "HEATAREA[@nr='2']/T_ACTUAL_EXT"        => ['Name' => 'Heizzone 02 Ist Temperatur Ext. Sensor', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 73, 'Keep' => 'ShowHeatArea02'],
        "HEATAREA[@nr='2']/T_TARGET"            => ['Name' => 'Heizzone 02 Soll Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTTarget', 'Action' => true, 'Position' => 71, 'Keep' => 'ShowHeatArea02'],
        "HEATAREA[@nr='2']/HEATAREA_STATE"      => ['Name' => 'Heizzone 02 Status', 'Type' => 0, 'Profile' => 'MH.HeatAreaState', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea02'],
        "HEATAREA[@nr='2']/PRESENCE"            => ['Name' => 'Heizzone 02 Anwesenheit', 'Type' => 0, 'Profile' => '~Presence', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea02'],
        "HEATAREA[@nr='2']/T_TARGET_MIN"        => ['Name' => 'Heizzone 02 Soll Temperatur Min', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea02'],
        "HEATAREA[@nr='2']/T_TARGET_MAX"        => ['Name' => 'Heizzone 02 Soll Temperatur Max', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea02'],
        //"HEATAREA[@nr='2']/RPM_MOTOR" => Array("Name" => "Heizzone 02 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
        "HEATAREA[@nr='2']/OFFSET" => ['Name' => 'Heizzone 02 Korrektur Ist-Werterfassung', 'Type' => 2, 'Profile' => 'MH.HeatAreaOffset', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea02'],
        //"HEATAREA[@nr='2']/T_HEAT_DAY" => Array("Name" => "Heizzone 02 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
        //"HEATAREA[@nr='2']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 02 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
        //"HEATAREA[@nr='2']/T_COOL_DAY" => Array("Name" => "Heizzone 02 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
        //"HEATAREA[@nr='2']/T_COOL_NIGHT" => Array("Name" => "Heizzone 02 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
        //"HEATAREA[@nr='2']/T_FLOOR_DAY" => Array("Name" => "Heizzone 02 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
        "HEATAREA[@nr='2']/HEATINGSYSTEM" => ['Name' => 'Heizzone 02 Heizsystem', 'Type' => 1, 'Profile' => 'MH.HeatingSystem', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea02'],
        //"HEATAREA[@nr='2']/BLOCK_HC" => Array("Name" => "Heizzone 02 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
        "HEATAREA[@nr='2']/PROGRAM_WEEK"        => ['Name' => 'Heizzone 02 Programm wochentags', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea02'],
        "HEATAREA[@nr='2']/PROGRAM_WEEKEND"     => ['Name' => 'Heizzone 02 Programm Wochenende', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea02'],
        "HEATAREA[@nr='2']/PARTY"               => ['Name' => 'Heizzone 02 Partyschaltung (Stunden)', 'Type' => 1, 'Profile' => 'MH.HeatAreaParty', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea02'],
        "HEATAREA[@nr='2']/PARTY_REMAININGTIME" => ['Name' => 'Heizzone 02 Partyschaltung Restzeit (min)', 'Type' => 1, 'Profile' => 'MH.HeatAreaPartyRemainingTime', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea02'],
        "HEATAREA[@nr='3']/HEATAREA_NAME"       => ['Name' => 'Heizzone 03 Name', 'Type' => 3, 'Profile' => '', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea03'],
        "HEATAREA[@nr='3']/HEATAREA_MODE"       => ['Name' => 'Heizzone 03 Betriebsmodus', 'Type' => 1, 'Profile' => 'MH.HeatAreaMode', 'Action' => true, 'Position' => 82, 'Keep' => 'ShowHeatArea03'],
        "HEATAREA[@nr='3']/T_ACTUAL"            => ['Name' => 'Heizzone 03 Ist Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 80, 'Keep' => 'ShowHeatArea03'],
        "HEATAREA[@nr='3']/T_ACTUAL_EXT"        => ['Name' => 'Heizzone 03 Ist Temperatur Ext. Sensor', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 83, 'Keep' => 'ShowHeatArea03'],
        "HEATAREA[@nr='3']/T_TARGET"            => ['Name' => 'Heizzone 03 Soll Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTTarget', 'Action' => true, 'Position' => 81, 'Keep' => 'ShowHeatArea03'],
        "HEATAREA[@nr='3']/HEATAREA_STATE"      => ['Name' => 'Heizzone 03 Status', 'Type' => 0, 'Profile' => 'MH.HeatAreaState', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea03'],
        "HEATAREA[@nr='3']/PRESENCE"            => ['Name' => 'Heizzone 03 Anwesenheit', 'Type' => 0, 'Profile' => '~Presence', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea03'],
        "HEATAREA[@nr='3']/T_TARGET_MIN"        => ['Name' => 'Heizzone 03 Soll Temperatur Min', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea03'],
        "HEATAREA[@nr='3']/T_TARGET_MAX"        => ['Name' => 'Heizzone 03 Soll Temperatur Max', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea03'],
        //"HEATAREA[@nr='3']/RPM_MOTOR" => Array("Name" => "Heizzone 03 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
        "HEATAREA[@nr='3']/OFFSET" => ['Name' => 'Heizzone 03 Korrektur Ist-Werterfassung', 'Type' => 2, 'Profile' => 'MH.HeatAreaOffset', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea03'],
        //"HEATAREA[@nr='3']/T_HEAT_DAY" => Array("Name" => "Heizzone 03 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
        //"HEATAREA[@nr='3']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 03 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
        //"HEATAREA[@nr='3']/T_COOL_DAY" => Array("Name" => "Heizzone 03 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
        //"HEATAREA[@nr='3']/T_COOL_NIGHT" => Array("Name" => "Heizzone 03 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
        //"HEATAREA[@nr='3']/T_FLOOR_DAY" => Array("Name" => "Heizzone 03 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
        "HEATAREA[@nr='3']/HEATINGSYSTEM" => ['Name' => 'Heizzone 03 Heizsystem', 'Type' => 1, 'Profile' => 'MH.HeatingSystem', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea03'],
        //"HEATAREA[@nr='3']/BLOCK_HC" => Array("Name" => "Heizzone 03 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
        "HEATAREA[@nr='3']/PROGRAM_WEEK"        => ['Name' => 'Heizzone 03 Programm wochentags', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea03'],
        "HEATAREA[@nr='3']/PROGRAM_WEEKEND"     => ['Name' => 'Heizzone 03 Programm Wochenende', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea03'],
        "HEATAREA[@nr='3']/PARTY"               => ['Name' => 'Heizzone 03 Partyschaltung (Stunden)', 'Type' => 1, 'Profile' => 'MH.HeatAreaParty', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea03'],
        "HEATAREA[@nr='3']/PARTY_REMAININGTIME" => ['Name' => 'Heizzone 03 Partyschaltung Restzeit (min)', 'Type' => 1, 'Profile' => 'MH.HeatAreaPartyRemainingTime', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea03'],
        "HEATAREA[@nr='4']/HEATAREA_NAME"       => ['Name' => 'Heizzone 04 Name', 'Type' => 3, 'Profile' => '', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea04'],
        "HEATAREA[@nr='4']/HEATAREA_MODE"       => ['Name' => 'Heizzone 04 Betriebsmodus', 'Type' => 1, 'Profile' => 'MH.HeatAreaMode', 'Action' => true, 'Position' => 92, 'Keep' => 'ShowHeatArea04'],
        "HEATAREA[@nr='4']/T_ACTUAL"            => ['Name' => 'Heizzone 04 Ist Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 90, 'Keep' => 'ShowHeatArea04'],
        "HEATAREA[@nr='4']/T_ACTUAL_EXT"        => ['Name' => 'Heizzone 04 Ist Temperatur Ext. Sensor', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 93, 'Keep' => 'ShowHeatArea04'],
        "HEATAREA[@nr='4']/T_TARGET"            => ['Name' => 'Heizzone 04 Soll Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTTarget', 'Action' => true, 'Position' => 91, 'Keep' => 'ShowHeatArea04'],
        "HEATAREA[@nr='4']/HEATAREA_STATE"      => ['Name' => 'Heizzone 04 Status', 'Type' => 0, 'Profile' => 'MH.HeatAreaState', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea04'],
        "HEATAREA[@nr='4']/PRESENCE"            => ['Name' => 'Heizzone 04 Anwesenheit', 'Type' => 0, 'Profile' => '~Presence', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea04'],
        "HEATAREA[@nr='4']/T_TARGET_MIN"        => ['Name' => 'Heizzone 04 Soll Temperatur Min', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea04'],
        "HEATAREA[@nr='4']/T_TARGET_MAX"        => ['Name' => 'Heizzone 04 Soll Temperatur Max', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea04'],
        //"HEATAREA[@nr='4']/RPM_MOTOR" => Array("Name" => "Heizzone 04 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
        "HEATAREA[@nr='4']/OFFSET" => ['Name' => 'Heizzone 04 Korrektur Ist-Werterfassung', 'Type' => 2, 'Profile' => 'MH.HeatAreaOffset', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea04'],
        //"HEATAREA[@nr='4']/T_HEAT_DAY" => Array("Name" => "Heizzone 04 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
        //"HEATAREA[@nr='4']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 04 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
        //"HEATAREA[@nr='4']/T_COOL_DAY" => Array("Name" => "Heizzone 04 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
        //"HEATAREA[@nr='4']/T_COOL_NIGHT" => Array("Name" => "Heizzone 04 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
        //"HEATAREA[@nr='4']/T_FLOOR_DAY" => Array("Name" => "Heizzone 04 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
        "HEATAREA[@nr='4']/HEATINGSYSTEM" => ['Name' => 'Heizzone 04 Heizsystem', 'Type' => 1, 'Profile' => 'MH.HeatingSystem', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea04'],
        //"HEATAREA[@nr='4']/BLOCK_HC" => Array("Name" => "Heizzone 04 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
        //"HEATAREA[@nr='4']/BLOCK_HC" => Array("Name" => "Heizzone 04 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
        "HEATAREA[@nr='4']/PROGRAM_WEEK"        => ['Name' => 'Heizzone 04 Programm wochentags', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea04'],
        "HEATAREA[@nr='4']/PROGRAM_WEEKEND"     => ['Name' => 'Heizzone 04 Programm Wochenende', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea04'],
        "HEATAREA[@nr='4']/PARTY"               => ['Name' => 'Heizzone 04 Partyschaltung (Stunden)', 'Type' => 1, 'Profile' => 'MH.HeatAreaParty', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea04'],
        "HEATAREA[@nr='4']/PARTY_REMAININGTIME" => ['Name' => 'Heizzone 04 Partyschaltung Restzeit (min)', 'Type' => 1, 'Profile' => 'MH.HeatAreaPartyRemainingTime', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea04'],
        "HEATAREA[@nr='5']/HEATAREA_NAME"       => ['Name' => 'Heizzone 05 Name', 'Type' => 3, 'Profile' => '', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea05'],
        "HEATAREA[@nr='5']/HEATAREA_MODE"       => ['Name' => 'Heizzone 05 Betriebsmodus', 'Type' => 1, 'Profile' => 'MH.HeatAreaMode', 'Action' => true, 'Position' => 102, 'Keep' => 'ShowHeatArea05'],
        "HEATAREA[@nr='5']/T_ACTUAL"            => ['Name' => 'Heizzone 05 Ist Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 100, 'Keep' => 'ShowHeatArea05'],
        "HEATAREA[@nr='5']/T_ACTUAL_EXT"        => ['Name' => 'Heizzone 05 Ist Temperatur Ext. Sensor', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 103, 'Keep' => 'ShowHeatArea05'],
        "HEATAREA[@nr='5']/T_TARGET"            => ['Name' => 'Heizzone 05 Soll Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTTarget', 'Action' => true, 'Position' => 101, 'Keep' => 'ShowHeatArea05'],
        "HEATAREA[@nr='5']/HEATAREA_STATE"      => ['Name' => 'Heizzone 05 Status', 'Type' => 0, 'Profile' => 'MH.HeatAreaState', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea05'],
        "HEATAREA[@nr='5']/PRESENCE"            => ['Name' => 'Heizzone 05 Anwesenheit', 'Type' => 0, 'Profile' => '~Presence', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea05'],
        "HEATAREA[@nr='5']/T_TARGET_MIN"        => ['Name' => 'Heizzone 05 Soll Temperatur Min', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea05'],
        "HEATAREA[@nr='5']/T_TARGET_MAX"        => ['Name' => 'Heizzone 05 Soll Temperatur Max', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea05'],
        //"HEATAREA[@nr='5']/RPM_MOTOR" => Array("Name" => "Heizzone 05 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
        "HEATAREA[@nr='5']/OFFSET" => ['Name' => 'Heizzone 05 Korrektur Ist-Werterfassung', 'Type' => 2, 'Profile' => 'MH.HeatAreaOffset', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea05'],
        //"HEATAREA[@nr='5']/T_HEAT_DAY" => Array("Name" => "Heizzone 05 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
        //"HEATAREA[@nr='5']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 05 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
        //"HEATAREA[@nr='5']/T_COOL_DAY" => Array("Name" => "Heizzone 05 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
        //"HEATAREA[@nr='5']/T_COOL_NIGHT" => Array("Name" => "Heizzone 05 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
        //"HEATAREA[@nr='5']/T_FLOOR_DAY" => Array("Name" => "Heizzone 05 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
        "HEATAREA[@nr='5']/HEATINGSYSTEM" => ['Name' => 'Heizzone 05 Heizsystem', 'Type' => 1, 'Profile' => 'MH.HeatingSystem', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea05'],
        //"HEATAREA[@nr='5']/BLOCK_HC" => Array("Name" => "Heizzone 05 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
        //"HEATAREA[@nr='5']/BLOCK_HC" => Array("Name" => "Heizzone 05 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
        "HEATAREA[@nr='5']/PROGRAM_WEEK"        => ['Name' => 'Heizzone 05 Programm wochentags', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea05'],
        "HEATAREA[@nr='5']/PROGRAM_WEEKEND"     => ['Name' => 'Heizzone 05 Programm Wochenende', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea05'],
        "HEATAREA[@nr='5']/PARTY"               => ['Name' => 'Heizzone 05 Partyschaltung (Stunden)', 'Type' => 1, 'Profile' => 'MH.HeatAreaParty', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea05'],
        "HEATAREA[@nr='5']/PARTY_REMAININGTIME" => ['Name' => 'Heizzone 05 Partyschaltung Restzeit (min)', 'Type' => 1, 'Profile' => 'MH.HeatAreaPartyRemainingTime', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea05'],
        "HEATAREA[@nr='6']/HEATAREA_NAME"       => ['Name' => 'Heizzone 06 Name', 'Type' => 3, 'Profile' => '', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea06'],
        "HEATAREA[@nr='6']/HEATAREA_MODE"       => ['Name' => 'Heizzone 06 Betriebsmodus', 'Type' => 1, 'Profile' => 'MH.HeatAreaMode', 'Action' => true, 'Position' => 112, 'Keep' => 'ShowHeatArea06'],
        "HEATAREA[@nr='6']/T_ACTUAL"            => ['Name' => 'Heizzone 06 Ist Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 110, 'Keep' => 'ShowHeatArea06'],
        "HEATAREA[@nr='6']/T_ACTUAL_EXT"        => ['Name' => 'Heizzone 06 Ist Temperatur Ext. Sensor', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 113, 'Keep' => 'ShowHeatArea06'],
        "HEATAREA[@nr='6']/T_TARGET"            => ['Name' => 'Heizzone 06 Soll Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTTarget', 'Action' => true, 'Position' => 111, 'Keep' => 'ShowHeatArea06'],
        "HEATAREA[@nr='6']/HEATAREA_STATE"      => ['Name' => 'Heizzone 06 Status', 'Type' => 0, 'Profile' => 'MH.HeatAreaState', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea06'],
        "HEATAREA[@nr='6']/PRESENCE"            => ['Name' => 'Heizzone 06 Anwesenheit', 'Type' => 0, 'Profile' => '~Presence', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea06'],
        "HEATAREA[@nr='6']/T_TARGET_MIN"        => ['Name' => 'Heizzone 06 Soll Temperatur Min', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea06'],
        "HEATAREA[@nr='6']/T_TARGET_MAX"        => ['Name' => 'Heizzone 06 Soll Temperatur Max', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea06'],
        //"HEATAREA[@nr='6']/RPM_MOTOR" => Array("Name" => "Heizzone 06 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
        "HEATAREA[@nr='6']/OFFSET" => ['Name' => 'Heizzone 06 Korrektur Ist-Werterfassung', 'Type' => 2, 'Profile' => 'MH.HeatAreaOffset', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea06'],
        //"HEATAREA[@nr='6']/T_HEAT_DAY" => Array("Name" => "Heizzone 06 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
        //"HEATAREA[@nr='6']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 06 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
        //"HEATAREA[@nr='6']/T_COOL_DAY" => Array("Name" => "Heizzone 06 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
        //"HEATAREA[@nr='6']/T_COOL_NIGHT" => Array("Name" => "Heizzone 06 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
        //"HEATAREA[@nr='6']/T_FLOOR_DAY" => Array("Name" => "Heizzone 06 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
        "HEATAREA[@nr='6']/HEATINGSYSTEM" => ['Name' => 'Heizzone 06 Heizsystem', 'Type' => 1, 'Profile' => 'MH.HeatingSystem', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea06'],
        //"HEATAREA[@nr='6']/BLOCK_HC" => Array("Name" => "Heizzone 06 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
        //"HEATAREA[@nr='6']/BLOCK_HC" => Array("Name" => "Heizzone 06 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
        "HEATAREA[@nr='6']/PROGRAM_WEEK"        => ['Name' => 'Heizzone 06 Programm wochentags', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea06'],
        "HEATAREA[@nr='6']/PROGRAM_WEEKEND"     => ['Name' => 'Heizzone 06 Programm Wochenende', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea06'],
        "HEATAREA[@nr='6']/PARTY"               => ['Name' => 'Heizzone 06 Partyschaltung (Stunden)', 'Type' => 1, 'Profile' => 'MH.HeatAreaParty', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea06'],
        "HEATAREA[@nr='6']/PARTY_REMAININGTIME" => ['Name' => 'Heizzone 06 Partyschaltung Restzeit (min)', 'Type' => 1, 'Profile' => 'MH.HeatAreaPartyRemainingTime', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea06'],
        "HEATAREA[@nr='7']/HEATAREA_NAME"       => ['Name' => 'Heizzone 07 Name', 'Type' => 3, 'Profile' => '', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea07'],
        "HEATAREA[@nr='7']/HEATAREA_MODE"       => ['Name' => 'Heizzone 07 Betriebsmodus', 'Type' => 1, 'Profile' => 'MH.HeatAreaMode', 'Action' => true, 'Position' => 122, 'Keep' => 'ShowHeatArea07'],
        "HEATAREA[@nr='7']/T_ACTUAL"            => ['Name' => 'Heizzone 07 Ist Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 120, 'Keep' => 'ShowHeatArea07'],
        "HEATAREA[@nr='7']/T_ACTUAL_EXT"        => ['Name' => 'Heizzone 07 Ist Temperatur Ext. Sensor', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 123, 'Keep' => 'ShowHeatArea07'],
        "HEATAREA[@nr='7']/T_TARGET"            => ['Name' => 'Heizzone 07 Soll Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTTarget', 'Action' => true, 'Position' => 121, 'Keep' => 'ShowHeatArea07'],
        "HEATAREA[@nr='7']/HEATAREA_STATE"      => ['Name' => 'Heizzone 07 Status', 'Type' => 0, 'Profile' => 'MH.HeatAreaState', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea07'],
        "HEATAREA[@nr='7']/PRESENCE"            => ['Name' => 'Heizzone 07 Anwesenheit', 'Type' => 0, 'Profile' => '~Presence', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea07'],
        "HEATAREA[@nr='7']/T_TARGET_MIN"        => ['Name' => 'Heizzone 07 Soll Temperatur Min', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea07'],
        "HEATAREA[@nr='7']/T_TARGET_MAX"        => ['Name' => 'Heizzone 07 Soll Temperatur Max', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea07'],
        //"HEATAREA[@nr='7']/RPM_MOTOR" => Array("Name" => "Heizzone 07 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
        "HEATAREA[@nr='7']/OFFSET" => ['Name' => 'Heizzone 07 Korrektur Ist-Werterfassung', 'Type' => 2, 'Profile' => 'MH.HeatAreaOffset', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea07'],
        //"HEATAREA[@nr='7']/T_HEAT_DAY" => Array("Name" => "Heizzone 07 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
        //"HEATAREA[@nr='7']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 07 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
        //"HEATAREA[@nr='7']/T_COOL_DAY" => Array("Name" => "Heizzone 07 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
        //"HEATAREA[@nr='7']/T_COOL_NIGHT" => Array("Name" => "Heizzone 07 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
        //"HEATAREA[@nr='7']/T_FLOOR_DAY" => Array("Name" => "Heizzone 07 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
        "HEATAREA[@nr='7']/HEATINGSYSTEM" => ['Name' => 'Heizzone 07 Heizsystem', 'Type' => 1, 'Profile' => 'MH.HeatingSystem', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea07'],
        //"HEATAREA[@nr='7']/BLOCK_HC" => Array("Name" => "Heizzone 07 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
        //"HEATAREA[@nr='7']/BLOCK_HC" => Array("Name" => "Heizzone 07 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
        "HEATAREA[@nr='7']/PROGRAM_WEEK"        => ['Name' => 'Heizzone 07 Programm wochentags', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea07'],
        "HEATAREA[@nr='7']/PROGRAM_WEEKEND"     => ['Name' => 'Heizzone 07 Programm Wochenende', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea07'],
        "HEATAREA[@nr='7']/PARTY"               => ['Name' => 'Heizzone 07 Partyschaltung (Stunden)', 'Type' => 1, 'Profile' => 'MH.HeatAreaParty', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea07'],
        "HEATAREA[@nr='7']/PARTY_REMAININGTIME" => ['Name' => 'Heizzone 07 Partyschaltung Restzeit (min)', 'Type' => 1, 'Profile' => 'MH.HeatAreaPartyRemainingTime', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea07'],
        "HEATAREA[@nr='8']/HEATAREA_NAME"       => ['Name' => 'Heizzone 08 Name', 'Type' => 3, 'Profile' => '', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea08'],
        "HEATAREA[@nr='8']/HEATAREA_MODE"       => ['Name' => 'Heizzone 08 Betriebsmodus', 'Type' => 1, 'Profile' => 'MH.HeatAreaMode', 'Action' => true, 'Position' => 132, 'Keep' => 'ShowHeatArea08'],
        "HEATAREA[@nr='8']/T_ACTUAL"            => ['Name' => 'Heizzone 08 Ist Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 130, 'Keep' => 'ShowHeatArea08'],
        "HEATAREA[@nr='8']/T_ACTUAL_EXT"        => ['Name' => 'Heizzone 08 Ist Temperatur Ext. Sensor', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 133, 'Keep' => 'ShowHeatArea08'],
        "HEATAREA[@nr='8']/T_TARGET"            => ['Name' => 'Heizzone 08 Soll Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTTarget', 'Action' => true, 'Position' => 131, 'Keep' => 'ShowHeatArea08'],
        "HEATAREA[@nr='8']/HEATAREA_STATE"      => ['Name' => 'Heizzone 08 Status', 'Type' => 0, 'Profile' => 'MH.HeatAreaState', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea08'],
        "HEATAREA[@nr='8']/PRESENCE"            => ['Name' => 'Heizzone 08 Anwesenheit', 'Type' => 0, 'Profile' => '~Presence', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea08'],
        "HEATAREA[@nr='8']/T_TARGET_MIN"        => ['Name' => 'Heizzone 08 Soll Temperatur Min', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea08'],
        "HEATAREA[@nr='8']/T_TARGET_MAX"        => ['Name' => 'Heizzone 08 Soll Temperatur Max', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea08'],
        //"HEATAREA[@nr='8']/RPM_MOTOR" => Array("Name" => "Heizzone 08 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
        "HEATAREA[@nr='8']/OFFSET" => ['Name' => 'Heizzone 08 Korrektur Ist-Werterfassung', 'Type' => 2, 'Profile' => 'MH.HeatAreaOffset', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea08'],
        //"HEATAREA[@nr='8']/T_HEAT_DAY" => Array("Name" => "Heizzone 08 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
        //"HEATAREA[@nr='8']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 08 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
        //"HEATAREA[@nr='8']/T_COOL_DAY" => Array("Name" => "Heizzone 08 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
        //"HEATAREA[@nr='8']/T_COOL_NIGHT" => Array("Name" => "Heizzone 08 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
        //"HEATAREA[@nr='8']/T_FLOOR_DAY" => Array("Name" => "Heizzone 08 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
        "HEATAREA[@nr='8']/HEATINGSYSTEM" => ['Name' => 'Heizzone 08 Heizsystem', 'Type' => 1, 'Profile' => 'MH.HeatingSystem', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea08'],
        //"HEATAREA[@nr='8']/BLOCK_HC" => Array("Name" => "Heizzone 08 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
        //"HEATAREA[@nr='8']/BLOCK_HC" => Array("Name" => "Heizzone 08 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
        "HEATAREA[@nr='8']/PROGRAM_WEEK"        => ['Name' => 'Heizzone 08 Programm wochentags', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea08'],
        "HEATAREA[@nr='8']/PROGRAM_WEEKEND"     => ['Name' => 'Heizzone 08 Programm Wochenende', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea08'],
        "HEATAREA[@nr='8']/PARTY"               => ['Name' => 'Heizzone 08 Partyschaltung (Stunden)', 'Type' => 1, 'Profile' => 'MH.HeatAreaParty', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea08'],
        "HEATAREA[@nr='8']/PARTY_REMAININGTIME" => ['Name' => 'Heizzone 08 Partyschaltung Restzeit (min)', 'Type' => 1, 'Profile' => 'MH.HeatAreaPartyRemainingTime', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea08'],
        "HEATAREA[@nr='9']/HEATAREA_NAME"       => ['Name' => 'Heizzone 09 Name', 'Type' => 3, 'Profile' => '', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea09'],
        "HEATAREA[@nr='9']/HEATAREA_MODE"       => ['Name' => 'Heizzone 09 Betriebsmodus', 'Type' => 1, 'Profile' => 'MH.HeatAreaMode', 'Action' => true, 'Position' => 142, 'Keep' => 'ShowHeatArea09'],
        "HEATAREA[@nr='9']/T_ACTUAL"            => ['Name' => 'Heizzone 09 Ist Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 140, 'Keep' => 'ShowHeatArea09'],
        "HEATAREA[@nr='9']/T_ACTUAL_EXT"        => ['Name' => 'Heizzone 09 Ist Temperatur Ext. Sensor', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 143, 'Keep' => 'ShowHeatArea09'],
        "HEATAREA[@nr='9']/T_TARGET"            => ['Name' => 'Heizzone 09 Soll Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTTarget', 'Action' => true, 'Position' => 141, 'Keep' => 'ShowHeatArea09'],
        "HEATAREA[@nr='9']/HEATAREA_STATE"      => ['Name' => 'Heizzone 09 Status', 'Type' => 0, 'Profile' => 'MH.HeatAreaState', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea09'],
        "HEATAREA[@nr='9']/PRESENCE"            => ['Name' => 'Heizzone 09 Anwesenheit', 'Type' => 0, 'Profile' => '~Presence', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea09'],
        "HEATAREA[@nr='9']/T_TARGET_MIN"        => ['Name' => 'Heizzone 09 Soll Temperatur Min', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea09'],
        "HEATAREA[@nr='9']/T_TARGET_MAX"        => ['Name' => 'Heizzone 09 Soll Temperatur Max', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea09'],
        //"HEATAREA[@nr='9']/RPM_MOTOR" => Array("Name" => "Heizzone 09 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
        "HEATAREA[@nr='9']/OFFSET" => ['Name' => 'Heizzone 09 Korrektur Ist-Werterfassung', 'Type' => 2, 'Profile' => 'MH.HeatAreaOffset', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea09'],
        //"HEATAREA[@nr='9']/T_HEAT_DAY" => Array("Name" => "Heizzone 09 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
        //"HEATAREA[@nr='9']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 09 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
        //"HEATAREA[@nr='9']/T_COOL_DAY" => Array("Name" => "Heizzone 09 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
        //"HEATAREA[@nr='9']/T_COOL_NIGHT" => Array("Name" => "Heizzone 09 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
        //"HEATAREA[@nr='9']/T_FLOOR_DAY" => Array("Name" => "Heizzone 09 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
        "HEATAREA[@nr='9']/HEATINGSYSTEM" => ['Name' => 'Heizzone 09 Heizsystem', 'Type' => 1, 'Profile' => 'MH.HeatingSystem', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea09'],
        //"HEATAREA[@nr='9']/BLOCK_HC" => Array("Name" => "Heizzone 09 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
        //"HEATAREA[@nr='9']/BLOCK_HC" => Array("Name" => "Heizzone 09 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
        "HEATAREA[@nr='9']/PROGRAM_WEEK"        => ['Name' => 'Heizzone 09 Programm wochentags', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea09'],
        "HEATAREA[@nr='9']/PROGRAM_WEEKEND"     => ['Name' => 'Heizzone 09 Programm Wochenende', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea09'],
        "HEATAREA[@nr='9']/PARTY"               => ['Name' => 'Heizzone 09 Partyschaltung (Stunden)', 'Type' => 1, 'Profile' => 'MH.HeatAreaParty', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea09'],
        "HEATAREA[@nr='9']/PARTY_REMAININGTIME" => ['Name' => 'Heizzone 09 Partyschaltung Restzeit (min)', 'Type' => 1, 'Profile' => 'MH.HeatAreaPartyRemainingTime', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea09'],
        "HEATAREA[@nr='10']/HEATAREA_NAME"      => ['Name' => 'Heizzone 10 Name', 'Type' => 3, 'Profile' => '', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea10'],
        "HEATAREA[@nr='10']/HEATAREA_MODE"      => ['Name' => 'Heizzone 10 Betriebsmodus', 'Type' => 1, 'Profile' => 'MH.HeatAreaMode', 'Action' => true, 'Position' => 152, 'Keep' => 'ShowHeatArea10'],
        "HEATAREA[@nr='10']/T_ACTUAL"           => ['Name' => 'Heizzone 10 Ist Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 150, 'Keep' => 'ShowHeatArea10'],
        "HEATAREA[@nr='10']/T_ACTUAL_EXT"       => ['Name' => 'Heizzone 10 Ist Temperatur Ext. Sensor', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 153, 'Keep' => 'ShowHeatArea10'],
        "HEATAREA[@nr='10']/T_TARGET"           => ['Name' => 'Heizzone 10 Soll Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTTarget', 'Action' => true, 'Position' => 151, 'Keep' => 'ShowHeatArea10'],
        "HEATAREA[@nr='10']/HEATAREA_STATE"     => ['Name' => 'Heizzone 10 Status', 'Type' => 0, 'Profile' => 'MH.HeatAreaState', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea10'],
        "HEATAREA[@nr='10']/PRESENCE"           => ['Name' => 'Heizzone 10 Anwesenheit', 'Type' => 0, 'Profile' => '~Presence', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea10'],
        "HEATAREA[@nr='10']/T_TARGET_MIN"       => ['Name' => 'Heizzone 10 Soll Temperatur Min', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea10'],
        "HEATAREA[@nr='10']/T_TARGET_MAX"       => ['Name' => 'Heizzone 10 Soll Temperatur Max', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea10'],
        //"HEATAREA[@nr='10']/RPM_MOTOR" => Array("Name" => "Heizzone 10 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
        "HEATAREA[@nr='10']/OFFSET" => ['Name' => 'Heizzone 10 Korrektur Ist-Werterfassung', 'Type' => 2, 'Profile' => 'MH.HeatAreaOffset', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea10'],
        //"HEATAREA[@nr='10']/T_HEAT_DAY" => Array("Name" => "Heizzone 10 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
        //"HEATAREA[@nr='10']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 10 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
        //"HEATAREA[@nr='10']/T_COOL_DAY" => Array("Name" => "Heizzone 10 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
        //"HEATAREA[@nr='10']/T_COOL_NIGHT" => Array("Name" => "Heizzone 10 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
        //"HEATAREA[@nr='10']/T_FLOOR_DAY" => Array("Name" => "Heizzone 10 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
        "HEATAREA[@nr='10']/HEATINGSYSTEM" => ['Name' => 'Heizzone 10 Heizsystem', 'Type' => 1, 'Profile' => 'MH.HeatingSystem', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea10'],
        //"HEATAREA[@nr='10']/BLOCK_HC" => Array("Name" => "Heizzone 10 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
        //"HEATAREA[@nr='10']/BLOCK_HC" => Array("Name" => "Heizzone 10 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
        "HEATAREA[@nr='10']/PROGRAM_WEEK"        => ['Name' => 'Heizzone 10 Programm wochentags', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea10'],
        "HEATAREA[@nr='10']/PROGRAM_WEEKEND"     => ['Name' => 'Heizzone 10 Programm Wochenende', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea10'],
        "HEATAREA[@nr='10']/PARTY"               => ['Name' => 'Heizzone 10 Partyschaltung (Stunden)', 'Type' => 1, 'Profile' => 'MH.HeatAreaParty', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea10'],
        "HEATAREA[@nr='10']/PARTY_REMAININGTIME" => ['Name' => 'Heizzone 10 Partyschaltung Restzeit (min)', 'Type' => 1, 'Profile' => 'MH.HeatAreaPartyRemainingTime', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea10'],
        "HEATAREA[@nr='11']/HEATAREA_NAME"       => ['Name' => 'Heizzone 11 Name', 'Type' => 3, 'Profile' => '', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea11'],
        "HEATAREA[@nr='11']/HEATAREA_MODE"       => ['Name' => 'Heizzone 11 Betriebsmodus', 'Type' => 1, 'Profile' => 'MH.HeatAreaMode', 'Action' => true, 'Position' => 162, 'Keep' => 'ShowHeatArea11'],
        "HEATAREA[@nr='11']/T_ACTUAL"            => ['Name' => 'Heizzone 11 Ist Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 160, 'Keep' => 'ShowHeatArea11'],
        "HEATAREA[@nr='11']/T_ACTUAL_EXT"        => ['Name' => 'Heizzone 11 Ist Temperatur Ext. Sensor', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 163, 'Keep' => 'ShowHeatArea11'],
        "HEATAREA[@nr='11']/T_TARGET"            => ['Name' => 'Heizzone 11 Soll Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTTarget', 'Action' => true, 'Position' => 161, 'Keep' => 'ShowHeatArea11'],
        "HEATAREA[@nr='11']/HEATAREA_STATE"      => ['Name' => 'Heizzone 11 Status', 'Type' => 0, 'Profile' => 'MH.HeatAreaState', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea11'],
        "HEATAREA[@nr='11']/PRESENCE"            => ['Name' => 'Heizzone 11 Anwesenheit', 'Type' => 0, 'Profile' => '~Presence', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea11'],
        "HEATAREA[@nr='11']/T_TARGET_MIN"        => ['Name' => 'Heizzone 11 Soll Temperatur Min', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea11'],
        "HEATAREA[@nr='11']/T_TARGET_MAX"        => ['Name' => 'Heizzone 11 Soll Temperatur Max', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea11'],
        //"HEATAREA[@nr='11']/RPM_MOTOR" => Array("Name" => "Heizzone 11 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
        "HEATAREA[@nr='11']/OFFSET" => ['Name' => 'Heizzone 11 Korrektur Ist-Werterfassung', 'Type' => 2, 'Profile' => 'MH.HeatAreaOffset', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea11'],
        //"HEATAREA[@nr='11']/T_HEAT_DAY" => Array("Name" => "Heizzone 11 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
        //"HEATAREA[@nr='11']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 11 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
        //"HEATAREA[@nr='11']/T_COOL_DAY" => Array("Name" => "Heizzone 11 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
        //"HEATAREA[@nr='11']/T_COOL_NIGHT" => Array("Name" => "Heizzone 11 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
        //"HEATAREA[@nr='11']/T_FLOOR_DAY" => Array("Name" => "Heizzone 11 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
        "HEATAREA[@nr='11']/HEATINGSYSTEM" => ['Name' => 'Heizzone 11 Heizsystem', 'Type' => 1, 'Profile' => 'MH.HeatingSystem', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea11'],
        //"HEATAREA[@nr='11']/BLOCK_HC" => Array("Name" => "Heizzone 11 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
        //"HEATAREA[@nr='11']/BLOCK_HC" => Array("Name" => "Heizzone 11 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
        "HEATAREA[@nr='11']/PROGRAM_WEEK"        => ['Name' => 'Heizzone 11 Programm wochentags', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea11'],
        "HEATAREA[@nr='11']/PROGRAM_WEEKEND"     => ['Name' => 'Heizzone 11 Programm Wochenende', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea11'],
        "HEATAREA[@nr='11']/PARTY"               => ['Name' => 'Heizzone 11 Partyschaltung (Stunden)', 'Type' => 1, 'Profile' => 'MH.HeatAreaParty', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea11'],
        "HEATAREA[@nr='11']/PARTY_REMAININGTIME" => ['Name' => 'Heizzone 11 Partyschaltung Restzeit (min)', 'Type' => 1, 'Profile' => 'MH.HeatAreaPartyRemainingTime', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea11'],
        "HEATAREA[@nr='12']/HEATAREA_NAME"       => ['Name' => 'Heizzone 12 Name', 'Type' => 3, 'Profile' => '', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea12'],
        "HEATAREA[@nr='12']/HEATAREA_MODE"       => ['Name' => 'Heizzone 12 Betriebsmodus', 'Type' => 1, 'Profile' => 'MH.HeatAreaMode', 'Action' => true, 'Position' => 172, 'Keep' => 'ShowHeatArea12'],
        "HEATAREA[@nr='12']/T_ACTUAL"            => ['Name' => 'Heizzone 12 Ist Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 170, 'Keep' => 'ShowHeatArea12'],
        "HEATAREA[@nr='12']/T_ACTUAL_EXT"        => ['Name' => 'Heizzone 12 Ist Temperatur Ext. Sensor', 'Type' => 2, 'Profile' => 'MH.HeatAreaTActualTemp', 'Action' => false, 'Position' => 173, 'Keep' => 'ShowHeatArea12'],
        "HEATAREA[@nr='12']/T_TARGET"            => ['Name' => 'Heizzone 12 Soll Temperatur', 'Type' => 2, 'Profile' => 'MH.HeatAreaTTarget', 'Action' => true, 'Position' => 171, 'Keep' => 'ShowHeatArea12'],
        "HEATAREA[@nr='12']/HEATAREA_STATE"      => ['Name' => 'Heizzone 12 Status', 'Type' => 0, 'Profile' => 'MH.HeatAreaState', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea12'],
        "HEATAREA[@nr='12']/PRESENCE"            => ['Name' => 'Heizzone 12 Anwesenheit', 'Type' => 0, 'Profile' => '~Presence', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea12'],
        "HEATAREA[@nr='12']/T_TARGET_MIN"        => ['Name' => 'Heizzone 12 Soll Temperatur Min', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea12'],
        "HEATAREA[@nr='12']/T_TARGET_MAX"        => ['Name' => 'Heizzone 12 Soll Temperatur Max', 'Type' => 2, 'Profile' => 'MH.HeatAreaTHeatCool', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea12'],
        //"HEATAREA[@nr='12']/RPM_MOTOR" => Array("Name" => "Heizzone 12 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
        "HEATAREA[@nr='12']/OFFSET" => ['Name' => 'Heizzone 12 Korrektur Ist-Werterfassung', 'Type' => 2, 'Profile' => 'MH.HeatAreaOffset', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea12'],
        //"HEATAREA[@nr='12']/T_HEAT_DAY" => Array("Name" => "Heizzone 12 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
        //"HEATAREA[@nr='12']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 12 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
        //"HEATAREA[@nr='12']/T_COOL_DAY" => Array("Name" => "Heizzone 12 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
        //"HEATAREA[@nr='12']/T_COOL_NIGHT" => Array("Name" => "Heizzone 12 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
        //"HEATAREA[@nr='12']/T_FLOOR_DAY" => Array("Name" => "Heizzone 12 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
        "HEATAREA[@nr='12']/HEATINGSYSTEM" => ['Name' => 'Heizzone 12 Heizsystem', 'Type' => 1, 'Profile' => 'MH.HeatingSystem', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea12'],
        //"HEATAREA[@nr='12']/BLOCK_HC" => Array("Name" => "Heizzone 12 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12")
        //"HEATAREA[@nr='12']/BLOCK_HC" => Array("Name" => "Heizzone 12 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
        "HEATAREA[@nr='12']/PROGRAM_WEEK"        => ['Name' => 'Heizzone 12 Programm wochentags', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea12'],
        "HEATAREA[@nr='12']/PROGRAM_WEEKEND"     => ['Name' => 'Heizzone 12 Programm Wochenende', 'Type' => 1, 'Profile' => 'MH.HeatAreaProgram', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea12'],
        "HEATAREA[@nr='12']/PARTY"               => ['Name' => 'Heizzone 12 Partyschaltung (Stunden)', 'Type' => 1, 'Profile' => 'MH.HeatAreaParty', 'Action' => true, 'Position' => 200, 'Keep' => 'ShowHeatArea12'],
        "HEATAREA[@nr='12']/PARTY_REMAININGTIME" => ['Name' => 'Heizzone 12 Partyschaltung Restzeit (min)', 'Type' => 1, 'Profile' => 'MH.HeatAreaPartyRemainingTime', 'Action' => false, 'Position' => 200, 'Keep' => 'ShowHeatArea12']
    ];

    private static $valuesHeatCtrl = [
        "HEATCTRL[@nr='1']/INUSE"           => ['Name' => 'Heizkreis 01 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='1']/ACTOR"           => ['Name' => 'Heizkreis 01 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='1']/HEATAREA_NR"     => ['Name' => 'Heizkreis 01 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='1']/HEATCTRL_STATE"  => ['Name' => 'Heizkreis 01 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='2']/INUSE"           => ['Name' => 'Heizkreis 02 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='2']/ACTOR"           => ['Name' => 'Heizkreis 02 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='2']/HEATAREA_NR"     => ['Name' => 'Heizkreis 02 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='2']/HEATCTRL_STATE"  => ['Name' => 'Heizkreis 02 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='3']/INUSE"           => ['Name' => 'Heizkreis 03 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='3']/ACTOR"           => ['Name' => 'Heizkreis 03 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='3']/HEATAREA_NR"     => ['Name' => 'Heizkreis 03 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='3']/HEATCTRL_STATE"  => ['Name' => 'Heizkreis 03 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='4']/INUSE"           => ['Name' => 'Heizkreis 04 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='4']/ACTOR"           => ['Name' => 'Heizkreis 04 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='4']/HEATAREA_NR"     => ['Name' => 'Heizkreis 04 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='4']/HEATCTRL_STATE"  => ['Name' => 'Heizkreis 04 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='5']/INUSE"           => ['Name' => 'Heizkreis 05 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='5']/ACTOR"           => ['Name' => 'Heizkreis 05 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='5']/HEATAREA_NR"     => ['Name' => 'Heizkreis 05 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='5']/HEATCTRL_STATE"  => ['Name' => 'Heizkreis 05 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='6']/INUSE"           => ['Name' => 'Heizkreis 06 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='6']/ACTOR"           => ['Name' => 'Heizkreis 06 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='6']/HEATAREA_NR"     => ['Name' => 'Heizkreis 06 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='6']/HEATCTRL_STATE"  => ['Name' => 'Heizkreis 06 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='7']/INUSE"           => ['Name' => 'Heizkreis 07 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='7']/ACTOR"           => ['Name' => 'Heizkreis 07 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='7']/HEATAREA_NR"     => ['Name' => 'Heizkreis 07 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='7']/HEATCTRL_STATE"  => ['Name' => 'Heizkreis 07 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='8']/INUSE"           => ['Name' => 'Heizkreis 08 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='8']/ACTOR"           => ['Name' => 'Heizkreis 08 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='8']/HEATAREA_NR"     => ['Name' => 'Heizkreis 08 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='8']/HEATCTRL_STATE"  => ['Name' => 'Heizkreis 08 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='9']/INUSE"           => ['Name' => 'Heizkreis 09 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='9']/ACTOR"           => ['Name' => 'Heizkreis 09 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='9']/HEATAREA_NR"     => ['Name' => 'Heizkreis 09 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='9']/HEATCTRL_STATE"  => ['Name' => 'Heizkreis 09 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='10']/INUSE"          => ['Name' => 'Heizkreis 10 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='10']/ACTOR"          => ['Name' => 'Heizkreis 10 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='10']/HEATAREA_NR"    => ['Name' => 'Heizkreis 10 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='10']/HEATCTRL_STATE" => ['Name' => 'Heizkreis 10 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='11']/INUSE"          => ['Name' => 'Heizkreis 11 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='11']/ACTOR"          => ['Name' => 'Heizkreis 11 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='11']/HEATAREA_NR"    => ['Name' => 'Heizkreis 11 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='11']/HEATCTRL_STATE" => ['Name' => 'Heizkreis 11 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='12']/INUSE"          => ['Name' => 'Heizkreis 12 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='12']/ACTOR"          => ['Name' => 'Heizkreis 12 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='12']/HEATAREA_NR"    => ['Name' => 'Heizkreis 12 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='12']/HEATCTRL_STATE" => ['Name' => 'Heizkreis 12 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250]
    ];

    private static $valuesHeatCtrlExt = [
        "HEATCTRL[@nr='1']/INUSE"           => ['Name' => 'Heizkreis 01 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='1']/ACTOR"           => ['Name' => 'Heizkreis 01 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='1']/ACTOR_PERCENT"   => ['Name' => 'Heizkreis 01 Aktor Prozent', 'Type' => 1, 'Profile' => 'MH.HeatCtrlActorPercent', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='1']/HEATAREA_NR"     => ['Name' => 'Heizkreis 01 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='1']/HEATCTRL_STATE"  => ['Name' => 'Heizkreis 01 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='2']/INUSE"           => ['Name' => 'Heizkreis 02 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='2']/ACTOR"           => ['Name' => 'Heizkreis 02 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='2']/ACTOR_PERCENT"   => ['Name' => 'Heizkreis 02 Aktor Prozent', 'Type' => 1, 'Profile' => 'MH.HeatCtrlActorPercent', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='2']/HEATAREA_NR"     => ['Name' => 'Heizkreis 02 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='2']/HEATCTRL_STATE"  => ['Name' => 'Heizkreis 02 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='3']/INUSE"           => ['Name' => 'Heizkreis 03 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='3']/ACTOR"           => ['Name' => 'Heizkreis 03 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='3']/ACTOR_PERCENT"   => ['Name' => 'Heizkreis 03 Aktor Prozent', 'Type' => 1, 'Profile' => 'MH.HeatCtrlActorPercent', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='3']/HEATAREA_NR"     => ['Name' => 'Heizkreis 03 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='3']/HEATCTRL_STATE"  => ['Name' => 'Heizkreis 03 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='4']/INUSE"           => ['Name' => 'Heizkreis 04 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='4']/ACTOR"           => ['Name' => 'Heizkreis 04 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='4']/ACTOR_PERCENT"   => ['Name' => 'Heizkreis 04 Aktor Prozent', 'Type' => 1, 'Profile' => 'MH.HeatCtrlActorPercent', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='4']/HEATAREA_NR"     => ['Name' => 'Heizkreis 04 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='4']/HEATCTRL_STATE"  => ['Name' => 'Heizkreis 04 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='5']/INUSE"           => ['Name' => 'Heizkreis 05 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='5']/ACTOR"           => ['Name' => 'Heizkreis 05 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='5']/ACTOR_PERCENT"   => ['Name' => 'Heizkreis 05 Aktor Prozent', 'Type' => 1, 'Profile' => 'MH.HeatCtrlActorPercent', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='5']/HEATAREA_NR"     => ['Name' => 'Heizkreis 05 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='5']/HEATCTRL_STATE"  => ['Name' => 'Heizkreis 05 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='6']/INUSE"           => ['Name' => 'Heizkreis 06 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='6']/ACTOR"           => ['Name' => 'Heizkreis 06 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='6']/ACTOR_PERCENT"   => ['Name' => 'Heizkreis 06 Aktor Prozent', 'Type' => 1, 'Profile' => 'MH.HeatCtrlActorPercent', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='6']/HEATAREA_NR"     => ['Name' => 'Heizkreis 06 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='6']/HEATCTRL_STATE"  => ['Name' => 'Heizkreis 06 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='7']/INUSE"           => ['Name' => 'Heizkreis 07 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='7']/ACTOR"           => ['Name' => 'Heizkreis 07 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='7']/ACTOR_PERCENT"   => ['Name' => 'Heizkreis 07 Aktor Prozent', 'Type' => 1, 'Profile' => 'MH.HeatCtrlActorPercent', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='7']/HEATAREA_NR"     => ['Name' => 'Heizkreis 07 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='7']/HEATCTRL_STATE"  => ['Name' => 'Heizkreis 07 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='8']/INUSE"           => ['Name' => 'Heizkreis 08 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='8']/ACTOR"           => ['Name' => 'Heizkreis 08 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='8']/ACTOR_PERCENT"   => ['Name' => 'Heizkreis 08 Aktor Prozent', 'Type' => 1, 'Profile' => 'MH.HeatCtrlActorPercent', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='8']/HEATAREA_NR"     => ['Name' => 'Heizkreis 08 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='8']/HEATCTRL_STATE"  => ['Name' => 'Heizkreis 08 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='9']/INUSE"           => ['Name' => 'Heizkreis 09 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='9']/ACTOR"           => ['Name' => 'Heizkreis 09 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='9']/ACTOR_PERCENT"   => ['Name' => 'Heizkreis 09 Aktor Prozent', 'Type' => 1, 'Profile' => 'MH.HeatCtrlActorPercent', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='9']/HEATAREA_NR"     => ['Name' => 'Heizkreis 09 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='9']/HEATCTRL_STATE"  => ['Name' => 'Heizkreis 09 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='10']/INUSE"          => ['Name' => 'Heizkreis 10 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='10']/ACTOR"          => ['Name' => 'Heizkreis 10 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='10']/ACTOR_PERCENT"  => ['Name' => 'Heizkreis 10 Aktor Prozent', 'Type' => 1, 'Profile' => 'MH.HeatCtrlActorPercent', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='10']/HEATAREA_NR"    => ['Name' => 'Heizkreis 10 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='10']/HEATCTRL_STATE" => ['Name' => 'Heizkreis 10 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='11']/INUSE"          => ['Name' => 'Heizkreis 11 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='11']/ACTOR"          => ['Name' => 'Heizkreis 11 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='11']/ACTOR_PERCENT"  => ['Name' => 'Heizkreis 11 Aktor Prozent', 'Type' => 1, 'Profile' => 'MH.HeatCtrlActorPercent', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='11']/HEATAREA_NR"    => ['Name' => 'Heizkreis 11 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='11']/HEATCTRL_STATE" => ['Name' => 'Heizkreis 11 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='12']/INUSE"          => ['Name' => 'Heizkreis 12 Aktiv', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='12']/ACTOR"          => ['Name' => 'Heizkreis 12 Aktor', 'Type' => 0, 'Profile' => '~Switch', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='12']/ACTOR_PERCENT"  => ['Name' => 'Heizkreis 12 Aktor Prozent', 'Type' => 1, 'Profile' => 'MH.HeatCtrlActorPercent', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='12']/HEATAREA_NR"    => ['Name' => 'Heizkreis 12 zugewiesene Heizzone', 'Type' => 1, 'Profile' => 'MH.HeatAreaNr', 'Action' => false, 'Position' => 250],
        "HEATCTRL[@nr='12']/HEATCTRL_STATE" => ['Name' => 'Heizkreis 12 Status', 'Type' => 1, 'Profile' => 'MH.HeatAreaHeatCTRLState', 'Action' => false, 'Position' => 250]
    ];

    public function Create()
    {
        //Never delete this line!
        parent::Create();

        //These lines are parsed on Symcon Startup or Instance creation
        //You cannot use variables here. Just static values.
        $this->RegisterPropertyString('IPAddress', '172.17.31.161');
        $this->RegisterPropertyInteger('Interval', 0);

        $this->RegisterPropertyBoolean('ShowHeatArea01', true);
        $this->RegisterPropertyBoolean('ShowHeatArea02', false);
        $this->RegisterPropertyBoolean('ShowHeatArea03', false);
        $this->RegisterPropertyBoolean('ShowHeatArea04', false);
        $this->RegisterPropertyBoolean('ShowHeatArea05', false);
        $this->RegisterPropertyBoolean('ShowHeatArea06', false);
        $this->RegisterPropertyBoolean('ShowHeatArea07', false);
        $this->RegisterPropertyBoolean('ShowHeatArea08', false);
        $this->RegisterPropertyBoolean('ShowHeatArea09', false);
        $this->RegisterPropertyBoolean('ShowHeatArea10', false);
        $this->RegisterPropertyBoolean('ShowHeatArea11', false);
        $this->RegisterPropertyBoolean('ShowHeatArea12', false);

        //Timer
        $this->RegisterTimer('UpdateTimer', 0, 'MA2_RequestStatus($_IPS[\'TARGET\']);');

        //Variablenprofile
        //ANTIFREEZE_TEMP
        if (!IPS_VariableProfileExists('MH.AntifreezeTemp')) {
            IPS_CreateVariableProfile('MH.AntifreezeTemp', 1);
            IPS_SetVariableProfileIcon('MH.AntifreezeTemp', 'Temperature');
            IPS_SetVariableProfileValues('MH.AntifreezeTemp', 5, 10, 1);
            IPS_SetVariableProfileText('MH.AntifreezeTemp', '', '°C');
        }
        // TEMPERATUREUNIT
        if (!IPS_VariableProfileExists('MH.TemperatureUnit')) {
            IPS_CreateVariableProfile('MH.TemperatureUnit', 1);
            IPS_SetVariableProfileIcon('MH.TemperatureUnit', 'Temperature');
            IPS_SetVariableProfileValues('MH.TemperatureUnit', 0, 1, 1);
            IPS_SetVariableProfileAssociation('MH.TemperatureUnit', 0, 'Celsius', '', -1);
            IPS_SetVariableProfileAssociation('MH.TemperatureUnit', 1, 'Fahrenheit', '', -1);
        }
        //SUMMERWINTER
        if (!IPS_VariableProfileExists('MH.SummerWinter')) {
            IPS_CreateVariableProfile('MH.SummerWinter', 0);
            IPS_SetVariableProfileIcon('MH.SummerWinter', 'Temperature');
            IPS_SetVariableProfileAssociation('MH.SummerWinter', 0, 'Aus', '', -1);
            IPS_SetVariableProfileAssociation('MH.SummerWinter', 1, 'Automatisch', '', -1);
        }
        //CHANGEOVER
        if (!IPS_VariableProfileExists('MH.ChangeOver')) {
            IPS_CreateVariableProfile('MH.ChangeOver', 0);
            IPS_SetVariableProfileIcon('MH.ChangeOver', 'Temperature');
            IPS_SetVariableProfileAssociation('MH.ChangeOver', 0, 'Heizen', '', -1);
            IPS_SetVariableProfileAssociation('MH.ChangeOver', 1, 'Kühlen', '', -1);
        }
        //MODE
        if (!IPS_VariableProfileExists('MH.Mode')) {
            IPS_CreateVariableProfile('MH.Mode', 1);
            IPS_SetVariableProfileValues('MH.Mode', 0, 2, 1);
            IPS_SetVariableProfileIcon('MH.Mode', 'IPS');
            IPS_SetVariableProfileAssociation('MH.Mode', 0, 'Standalone', '', -1);
            IPS_SetVariableProfileAssociation('MH.Mode', 1, 'Master', '', -1);
            IPS_SetVariableProfileAssociation('MH.Mode', 2, 'Slave', '', -1);
        }
        //ECO_DIFF
        if (!IPS_VariableProfileExists('MH.EcoDiff')) {
            IPS_CreateVariableProfile('MH.EcoDiff', 2);
            IPS_SetVariableProfileIcon('MH.EcoDiff', 'Temperature');
            IPS_SetVariableProfileDigits('MH.EcoDiff', 1);
            IPS_SetVariableProfileValues('MH.EcoDiff', 2.0, 6.0, 0.1);
            IPS_SetVariableProfileText('MH.EcoDiff', '', '°C');
        }
        //VACATION_STATE
        if (!IPS_VariableProfileExists('MH.VacationState')) {
            IPS_CreateVariableProfile('MH.VacationState', 1);
            IPS_SetVariableProfileValues('MH.VacationState', 0, 2, 1);
            IPS_SetVariableProfileIcon('MH.VacationState', 'Calendar');
            IPS_SetVariableProfileAssociation('MH.VacationState', 0, 'Aus', '', -1);
            IPS_SetVariableProfileAssociation('MH.VacationState', 1, 'Geplant', '', 0x0000FF);
            IPS_SetVariableProfileAssociation('MH.VacationState', 2, 'Aktiv', '', 0x00FF00);
        }
        //PUMP_TIME
        if (!IPS_VariableProfileExists('MH.PumpTime')) {
            IPS_CreateVariableProfile('MH.PumpTime', 1);
            IPS_SetVariableProfileIcon('MH.PumpTime', 'Clock');
            IPS_SetVariableProfileValues('MH.PumpTime', 0, 5, 1);
            IPS_SetVariableProfileText('MH.PumpTime', '', 'min');
        }
        //RELAIS_TIME
        if (!IPS_VariableProfileExists('MH.RelaisTime')) {
            IPS_CreateVariableProfile('MH.RelaisTime', 1);
            IPS_SetVariableProfileIcon('MH.RelaisTime', 'Clock');
            IPS_SetVariableProfileValues('MH.RelaisTime', 0, 60, 1);
            IPS_SetVariableProfileText('MH.RelaisTime', '', 'min');
        }
        //EMERGENCYMODE_TIME
        if (!IPS_VariableProfileExists('MH.EmergencyTime')) {
            IPS_CreateVariableProfile('MH.EmergencyTime', 1);
            IPS_SetVariableProfileIcon('MH.EmergencyTime', 'Clock');
            IPS_SetVariableProfileValues('MH.EmergencyTime', 30, 600, 30);
            IPS_SetVariableProfileText('MH.EmergencyTime', '', 'min');
        }
        //PWMCYCLE
        if (!IPS_VariableProfileExists('MH.PWMCycle')) {
            IPS_CreateVariableProfile('MH.PWMCycle', 1);
            IPS_SetVariableProfileIcon('MH.PWMCycle', 'Clock');
            IPS_SetVariableProfileValues('MH.PWMCycle', 10, 30, 1);
            IPS_SetVariableProfileText('MH.PWMCycle', '', 'min');
        }
        //PWMPERCENT
        if (!IPS_VariableProfileExists('MH.PWMPercent')) {
            IPS_CreateVariableProfile('MH.PWMPercent', 1);
            IPS_SetVariableProfileIcon('MH.PWMPercent', 'Intensity');
            IPS_SetVariableProfileValues('MH.PWMPercent', 0, 100, 5);
            IPS_SetVariableProfileText('MH.PWMPercent', '', '%');
        }
        //HEATAREA_MODE
        if (!IPS_VariableProfileExists('MH.HeatAreaMode')) {
            IPS_CreateVariableProfile('MH.HeatAreaMode', 1);
            IPS_SetVariableProfileIcon('MH.HeatAreaMode', 'Shutter');
            IPS_SetVariableProfileValues('MH.HeatAreaMode', 0, 2, 1);
            IPS_SetVariableProfileAssociation('MH.HeatAreaMode', 0, 'Auto', 'Ok', 0x0000FF);
            IPS_SetVariableProfileAssociation('MH.HeatAreaMode', 1, 'Tag', 'Sun', -1);
            IPS_SetVariableProfileAssociation('MH.HeatAreaMode', 2, 'Nacht', 'Moon', -1);
        }
        //HEATAREA_PROGRAM
        if (!IPS_VariableProfileExists('MH.HeatAreaProgram')) {
            IPS_CreateVariableProfile('MH.HeatAreaProgram', 1);
            IPS_SetVariableProfileIcon('MH.HeatAreaProgram', 'IPS');
            IPS_SetVariableProfileValues('MH.HeatAreaProgram', 0, 3, 1);
        }
        //HEATAREA_PARTY
        if (!IPS_VariableProfileExists('MH.HeatAreaParty')) {
            IPS_CreateVariableProfile('MH.HeatAreaParty', 1);
            IPS_SetVariableProfileIcon('MH.HeatAreaParty', 'Melody');
            IPS_SetVariableProfileValues('MH.HeatAreaParty', 0, 24, 1);
        }
        //HEATAREA_PARTY_REMAININGTIME
        if (!IPS_VariableProfileExists('MH.HeatAreaPartyRemainingTime')) {
            IPS_CreateVariableProfile('MH.HeatAreaPartyRemainingTime', 1);
            IPS_SetVariableProfileIcon('MH.HeatAreaPartyRemainingTime', 'Melody');
            IPS_SetVariableProfileValues('MH.HeatAreaPartyRemainingTime', 0, 1440, 1);
        }
        //HEATAREA_STATE
        if (!IPS_VariableProfileExists('MH.HeatAreaState')) {
            IPS_CreateVariableProfile('MH.HeatAreaState', 0);
            IPS_SetVariableProfileIcon('MH.HeatAreaState', 'Power');
            IPS_SetVariableProfileAssociation('MH.HeatAreaState', 0, 'OK', '', -1);
            IPS_SetVariableProfileAssociation('MH.HeatAreaState', 1, 'Error', '', 0xFF0000);
        }
        //HEATAREA_RPM_MOTOR
        if (!IPS_VariableProfileExists('MH.HeatAreaRPMMotor')) {
            IPS_CreateVariableProfile('MH.HeatAreaRPMMotor', 1);
            IPS_SetVariableProfileIcon('MH.HeatAreaRPMMotor', 'TurnRight');
            IPS_SetVariableProfileValues('MH.HeatAreaRPMMotor', 0, 100, 25);
            IPS_SetVariableProfileText('MH.HeatAreaRPMMotor', '', '%');
            IPS_SetVariableProfileAssociation('MH.HeatAreaRPMMotor', 0, 'Aus', '', -1);
            IPS_SetVariableProfileAssociation('MH.HeatAreaRPMMotor', 25, '25%', '', -1);
            IPS_SetVariableProfileAssociation('MH.HeatAreaRPMMotor', 50, '50%', '', -1);
            IPS_SetVariableProfileAssociation('MH.HeatAreaRPMMotor', 75, '75%', '', -1);
            IPS_SetVariableProfileAssociation('MH.HeatAreaRPMMotor', 100, '100%', '', -1);
        }
        //HEATAREA_HEATINGSYSTEM
        if (!IPS_VariableProfileExists('MH.HeatingSystem')) {
            IPS_CreateVariableProfile('MH.HeatingSystem', 1);
            IPS_SetVariableProfileIcon('MH.HeatingSystem', 'Lock');
            IPS_SetVariableProfileValues('MH.HeatingSystem', 0, 4, 1);
            IPS_SetVariableProfileAssociation('MH.HeatingSystem', 0, 'FBH-Standard', '', -1);
            IPS_SetVariableProfileAssociation('MH.HeatingSystem', 1, 'FHB-Niedrigenergie', '', -1);
            IPS_SetVariableProfileAssociation('MH.HeatingSystem', 2, 'Radiator', '', -1);
            IPS_SetVariableProfileAssociation('MH.HeatingSystem', 3, 'Konvektor passiv', '', -1);
            IPS_SetVariableProfileAssociation('MH.HeatingSystem', 4, 'Konvektor aktiv', '', -1);
        }
        //HEATAREA_T_ACTUAL_TEMP
        if (!IPS_VariableProfileExists('MH.HeatAreaTActualTemp')) {
            IPS_CreateVariableProfile('MH.HeatAreaTActualTemp', 2);
            IPS_SetVariableProfileIcon('MH.HeatAreaTActualTemp', 'Temperature');
            IPS_SetVariableProfileText('MH.HeatAreaTActualTemp', '', '°');
            IPS_SetVariableProfileDigits('MH.HeatAreaTActualTemp', 1);
            IPS_SetVariableProfileValues('MH.HeatAreaTActualTemp', -50, 100, 0.1);
        }
        //HEATAREA_T_TARGET
        if (!IPS_VariableProfileExists('MH.HeatAreaTTarget')) {
            IPS_CreateVariableProfile('MH.HeatAreaTTarget', 2);
            IPS_SetVariableProfileIcon('MH.HeatAreaTTarget', 'Temperature');
            IPS_SetVariableProfileText('MH.HeatAreaTTarget', '', '°');
            IPS_SetVariableProfileDigits('MH.HeatAreaTTarget', 1);
            IPS_SetVariableProfileValues('MH.HeatAreaTTarget', 5, 30, 0.2);
        }
        //HEATAREA_T_HEATCOOL
        if (!IPS_VariableProfileExists('MH.HeatAreaTHeatCool')) {
            IPS_CreateVariableProfile('MH.HeatAreaTHeatCool', 2);
            IPS_SetVariableProfileIcon('MH.HeatAreaTHeatCool', 'Temperature');
            IPS_SetVariableProfileText('MH.HeatAreaTHeatCool', '', '°');
            IPS_SetVariableProfileDigits('MH.HeatAreaTHeatCool', 1);
            IPS_SetVariableProfileValues('MH.HeatAreaTHeatCool', 5, 30, 1);
        }
        //HEATAREA_OFFSET
        if (!IPS_VariableProfileExists('MH.HeatAreaOffset')) {
            IPS_CreateVariableProfile('MH.HeatAreaOffset', 2);
            IPS_SetVariableProfileIcon('MH.HeatAreaOffset', 'Temperature');
            IPS_SetVariableProfileText('MH.HeatAreaOffset', '', '°');
            IPS_SetVariableProfileDigits('MH.HeatAreaOffset', 1);
            IPS_SetVariableProfileValues('MH.HeatAreaOffset', -2, 2, 0.1);
        }
        //HEATAREA_BLOCK_HC
        if (!IPS_VariableProfileExists('MH.HeatAreaBlockHC')) {
            IPS_CreateVariableProfile('MH.HeatAreaBlockHC', 1);
            IPS_SetVariableProfileIcon('MH.HeatAreaBlockHC', 'Lock');
            IPS_SetVariableProfileValues('MH.HeatAreaBlockHC', 0, 2, 1);
            IPS_SetVariableProfileAssociation('MH.HeatAreaBlockHC', 0, 'Normal', '', -1);
            IPS_SetVariableProfileAssociation('MH.HeatAreaBlockHC', 1, 'Heizen sperren', '', -1);
            IPS_SetVariableProfileAssociation('MH.HeatAreaBlockHC', 2, 'Kühlen sperren', '', -1);
        }
        //HEATAREA_HEATCTRL_STATE
        if (!IPS_VariableProfileExists('MH.HeatAreaHeatCTRLState')) {
            IPS_CreateVariableProfile('MH.HeatAreaHeatCTRLState', 1);
            IPS_SetVariableProfileIcon('MH.HeatAreaHeatCTRLState', 'Shutter');
            IPS_SetVariableProfileValues('MH.HeatAreaHeatCTRLState', 0, 2, 1);
            IPS_SetVariableProfileAssociation('MH.HeatAreaHeatCTRLState', 0, 'Aus', '', -1);
            IPS_SetVariableProfileAssociation('MH.HeatAreaHeatCTRLState', 1, 'An', '', 0x00FF00);
            IPS_SetVariableProfileAssociation('MH.HeatAreaHeatCTRLState', 2, 'Fehler', '', 0xFF0000);
        }
        //HEATAREA_HEATCTRL_NR
        if (!IPS_VariableProfileExists('MH.HeatAreaNr')) {
            IPS_CreateVariableProfile('MH.HeatAreaNr', 1);
            IPS_SetVariableProfileIcon('MH.HeatAreaNr', 'Shutter');
            IPS_SetVariableProfileValues('MH.HeatAreaNr', 1, 12, 1);
        }

        //HEATAREA_RPM_MOTOR
        if (!IPS_VariableProfileExists('MH.HeatCtrlActorPercent')) {
            IPS_CreateVariableProfile('MH.HeatCtrlActorPercent', 1);
            IPS_SetVariableProfileIcon('MH.HeatCtrlActorPercent', 'Intensity');
            IPS_SetVariableProfileValues('MH.HeatCtrlActorPercent', 0, 100, 1);
            IPS_SetVariableProfileText('MH.HeatCtrlActorPercent', '', '%');
        }
    }

    public function Destroy()
    {
        //Never delete this line!
        parent::Destroy();
    }

    public function ApplyChanges()
    {
        //Never delete this line!
        parent::ApplyChanges();

        $this->SetTimerInterval('UpdateTimer', $this->ReadPropertyInteger('Interval') * 1000);

        $this->MaintainArray(self::$values);
    }

    public function WriteValue($Ident, $Value)
    {
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><Devices></Devices>');

        if (GetValueString($this->GetIDForIdent('ID')) == '') {
            echo 'BaseID not requested yet. Please request values at least once!';
            return;
        }

        $Device = $xml->addChild('Device');
        $Device->addChild('ID', GetValueString($this->GetIDForIdent('ID')));

        if (self::GetTypeForIdent($Ident) == 0 /* Boolean */) {
            $Value = $Value ? '1' : '0';
        }
        if (self::GetTypeForIdent($Ident) == 2 /* Float */) {
            $Value = str_replace(',', '.', $Value);
        }

        $Key = self::GetKeyForIdent($Ident);
        if (strpos($Key, '/') === false) {
            $Device->addChild($Key, $Value);
        } else {
            $KeySplit = explode('/', $Key);
            $Attr = '';

            $AttrPos = strpos($KeySplit[0], '[');
            if ($AttrPos !== false) {
                $Attr = substr($KeySplit[0], $AttrPos + 6, 1);
                $KeySplit[0] = substr($KeySplit[0], 0, $AttrPos);
            }

            $Command = $Device->addChild($KeySplit[0]);
            if ($Attr != '') {
                $Command->addAttribute('nr', $Attr);
            }
            $Command->addChild($KeySplit[1], $Value);
        }

        //IPS_LogMessage("Alpha2", $xml->asXML());

        if ($this->sendChanges($xml)) {
            SetValue($this->GetIDForIdent($Ident), $Value);
        }
    }

    public function RequestAction($Ident, $Value)
    {
        $this->WriteValue($Ident, $Value);
    }

    private function SendChanges($Xml)
    {
        $url = 'http://' . $this->ReadPropertyString('IPAddress') . '/data/changes.xml';
        $header = "POST HTTP/1.0 \r\n";
        $header .= "Content-type: text/xml \r\n";
        $header .= 'Content-length: ' . strlen($Xml->asXML()) . " \r\n";
        $header .= "Content-transfer-encoding: text \r\n";
        $header .= "Connection: close \r\n\r\n";
        $header .= $Xml->asXML();

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $header);

        $data = curl_exec($ch);

        if (curl_errno($ch)) {
            echo curl_error($ch);
            curl_close($ch);
            return false;
        } else {
            curl_close($ch);
            return true;
        }
    }

    public function RequestStatus()
    {
        $xml = @simplexml_load_file('http://' . $this->ReadPropertyString('IPAddress') . '/data/static.xml');
        if ($xml === false) {
            return;
        }

        $this->SetValuesArray(self::$values, $xml);

        if (GetValue($this->GetIDForIdent($this->ReduceToIdent('VERS_SW_STM'))) >= '02.02') {
            $this->MaintainArray(self::$valuesHeatCtrlExt);
            $this->SetValuesArray(self::$valuesHeatCtrlExt, $xml);
        } else {
            $this->MaintainArray(self::$valuesHeatCtrl);
            $this->SetValuesArray(self::$valuesHeatCtrl, $xml);
        }
    }

    private function MaintainArray($Array)
    {
        foreach ($Array as $key => $value) {
            if (!isset($value['Keep'])) {
                $keep = true;
            } else {
                $keep = $this->ReadPropertyBoolean($value['Keep']);
            }
            $this->MaintainVariable($this->ReduceToIdent($key), $value['Name'], $value['Type'], $value['Profile'], $value['Position'], $keep);

            if ($keep && $value['Action']) {
                $this->EnableAction($this->ReduceToIdent($key));
            }
        }
    }

    private function SetValuesArray($Array, $Xml)
    {
        foreach ($Array as $key => $value) {
            if (!isset($value['Keep'])) {
                $keep = true;
            } else {
                $keep = $this->ReadPropertyBoolean($value['Keep']);
            }

            if ($keep && (count($Xml->Device->xpath($key)) != 0)) {
                SetValue($this->GetIDForIdent($this->ReduceToIdent($key)), (string) $Xml->Device->xpath($key)[0]);
            }
        }
    }

    private function ReduceToIdent($ID)
    {
        return str_replace(["[@nr='", "']", '/'], ['', '', '_'], $ID);
    }

    private function GetKeyForIdent($Ident)
    {
        foreach (self::$values as $key => $value) {
            if (self::ReduceToIdent($key) == $Ident) {
                return $key;
            }
        }

        foreach (self::$valuesHeatCtrlExt as $key => $value) {
            if (self::ReduceToIdent($key) == $Ident) {
                return $key;
            }
        }

        throw new Exception('Cannot find key for ident');
    }

    private function GetTypeForIdent($Ident)
    {
        foreach (self::$values as $key => $value) {
            if (self::ReduceToIdent($key) == $Ident) {
                return $value['Type'];
            }
        }

        foreach (self::$valuesHeatCtrlExt as $key => $value) {
            if (self::ReduceToIdent($key) == $Ident) {
                return $value['Type'];
            }
        }

        throw new Exception('Cannot find type for ident');
    }
}