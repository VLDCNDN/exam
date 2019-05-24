<?php

    //*************************************
    // TEST 2: JSON DECODE
    //*************************************

    // CODE HERE
	$json='{"fname": "Juan",
			"mname": "L.",
			"lname": "Santos",
			"Birthday": "1995-04-01",
			"Current": "Manila, Metro Manila",
			"Permanent": "Pasay, Metro Manila" }';
	
		$arr = json_decode($json, true);
		$var_dump=json_decode($json, true);
		$var_dump=json_decode($json);
		
		echo "<b>Name: </b>". $arr['fname'].' '.$arr['mname'].' '.$arr['lname'].'<br>'."<b>Birthday: </b>".' '.$arr['Birthday'].
				'<br>'."<b>Current: </b>".' '.$arr['Current'].'<br>'."<b>Permanent: </b>".' '.$arr['Permanent'];
			
		
		
		
		
		/**	echo "<b>Name: </b>";
			echo "<br>";
			echo "<b>Birthday: </b>";
			echo "<br>";
			echo "<b>Address: </b>";
		**/
		
	
?>
