<?php

	$to = "";  // Your email here
	$name = $_REQUEST['name'];
	$lastname = $_REQUEST['lastname'];
	$phone = $_REQUEST['phone'];
	$from = $_REQUEST['email'];
	$date1 = $_REQUEST['date1'];
	$date2 = $_REQUEST['date2'];
	$date3 = $_REQUEST['date3'];
	$time1 = $_REQUEST['time1'];
	$autoinfo = $_REQUEST['autoinfo'];
	$select1 = $_REQUEST['select1'];
	$message = $_REQUEST['message'];
	$headers = "From: $from";
	$subject = "Appointment Form Car Repair Site";

	$fields = array();
	$fields{"name"} = "First name";
	$fields{"lastname"} = "Last Name";
	$fields{"phone"} = "Phone";
	$fields{"email"} = "Email";
	$fields{"date1"} = "Date 1";
	$fields{"date2"} = "Date 2";
	$fields{"date3"} = "Date 3";
	$fields{"time1"} = "Time 1";
	$fields{"autoinfo"} = "Auto Info";
	$fields{"select1"} = "Select 1";
	$fields{"message"} = "Message";

	$body = "Here is what was sent:\n\n"; 
	foreach($fields as $a => $b){   
		$body .= sprintf("%20s:%s\n",$b,$_REQUEST[$a]);
	}
	$send = mail($to, $subject, $body, $headers);

?>