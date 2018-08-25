#!/usr/bin/php
<?php
	if ($argc == 2)
	{
		date_default_timezone_set('Europe/Paris');
		$day = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
		$month = array(
			1 => "janvier", 
			2 => "fevrier", 
			3 => "mars", 
			4 => "avril", 
			5 => "mai", 
			6 => "juin", 
			7 => "juillet", 
			8 => "aout", 
			9 => "septembre", 
			10 => "octobre", 
			11 => "novembre", 
			12 => "decembre");
		$month1 = array(
			1 => "janvier", 
			2 => "février", 
			3 => "mars", 
			4 => "avril", 
			5 => "mai", 
			6 => "juin", 
			7 => "juillet", 
			8 => "août", 
			9 => "septembre", 
			10 => "octobre", 
			11 => "novembre", 
			12 => "décembre");
		$search = '/^([a-z]+) ([0-2]?[0-9]|3[01]) ([a-z]+) ([0-9]{4}) ([0[0-9]|1[0-9]|2[0-3]):([0-5]{1}[0-9]{1}):([0-5]{1}[0-9]{1})$/';
		$date = explode(" ", strtolower($argv[1]));
		$tmp = 0;
		if (count($date) == 5 && (preg_match($search, strtolower($argv[1])))) {	
			foreach ($day as $current) {
				if (!strcmp($current, $date[0])) {
					foreach ($month as $key => $season) {
						if (!strcmp($season, $date[2])) {
							$tmp = $key;
						}
					}
				}
			}
			foreach ($day as $current) {
				if (!strcmp($current, $date[0])) {
					foreach ($month1 as $key => $season) {
						if (!strcmp($season, $date[2])) {
							$tmp = $key;
						}
					}
				}
			}
			if ($tmp) {
				echo strtotime($date[1] . '-' . $key . '-' . $date[3] . ' ' . $date[4]) . "\n";
			}
			else {
				echo 'Wrong Format' . "\n";
			}
		}
		else {
			echo 'Wrong Format' . "\n";
		}
	}
?>