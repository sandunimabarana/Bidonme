

<?php

include "classes/class.phpmailer.php";
$mail=new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug=1;
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Host="smtp.gmail.com";
$mail->Port=465;
$mail->IsHTML(true);
$mail->Username=("nemodorylab2018@gmail.com");
$mail->Password="computerlab";
$mail->SetFrom("nemodorylab2018@gmail.com");
$mail->Subject=$_POST["subject"];
$mail->Body=$_POST["body"];
$mail->AddAddress($_POST["to"]);
if(!$mail->Send()){
		echo "Error";
	}
else{
		echo "Messsage sent";
	}

?>