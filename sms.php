<?php

echo $_GET['id'];
$number=$_GET['id'];

?>


<?php
	// Authorisation details.
	$username = "ncprasadmadusanka@gmail.com";
	$hash = "6504f3456bf56122dbaadf7111d9d461427d2a3871be61e297be37e87caaaf61";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "BIDONME.lk"; // This is who the message appears to be from.
	$numbers = "$number"; // A single number or a comma-seperated list of numbers
	$message = "This is a test message from the PHP API script.";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	
	echo "<pre>";
	print_r($result);
	exit;
	
?>