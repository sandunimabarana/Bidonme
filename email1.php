
<?php


			$usernm   = "root";
            $passwd   = "";
            $host     = "localhost";
            $database = "bidonme";


           $con =  mysqli_connect($host,$usernm,$passwd);

            mysqli_select_db($con ,$database);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


	
	
include "classes/class.phpmailer.php";
$user=$_SESSION['user'];
$mail=new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug=1;
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Host="smtp.gmail.com";
$mail->Port=465;
$mail->IsHTML(true);
$mail->Username=("bluestarhotelnew@gmail.com");
$mail->Password="Bluestar058";
$mail->SetFrom("bluestarhotelnew@gmail.com");
$mail->Subject="Bidonme";
$mail->Body="You have a new bid.";
$mail->AddAddress($user);
if(!$mail->Send()){
		echo "Error";
		?><script>alert("Error Email is not send");</script>
		<?php
	}
else{
		echo "Messsage sent";?>
		<script>alert("send Email to Client");</script>
		<?php
	}

	
		

?>
