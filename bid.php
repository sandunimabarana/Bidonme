<?php
session_start();
$dbConnection=mysqli_connect('localhost','root','','bidonme');
if(!isset($_SESSION['userEmail'])){
	echo "<script>window.open('bid.php','_self')</script>";
}
else{
	echo "Welcome"." ".$_SESSION['userEmail'];
	
	
}

?>



<?php include('includes/headUpper.php'); ?>
<title>Bid</title>
<?php include('includes/headLower.php'); ?>

<body>
<?php
$userEmial = $_SESSION['userEmail'];
$query=mysqli_query($dbConnection,"select * from user where Email='$userEmial'");
$row= mysqli_fetch_array($query);
$userId = $row['UserId'];


?>

<?php
$userEmial = $_SESSION['userEmail'];
$query=mysqli_query($dbConnection,"select * from vacancy");
$row= mysqli_fetch_array($query);
$vecid = $row['vacancyId'];


?>


<?php
$userEmial = $_SESSION['userEmail'];
$query=mysqli_query($dbConnection,"select Email,vacancyId from user,vacancy where user.UserId=vacancy.UserId AND vacancyId='$vecid'");
$row= mysqli_fetch_array($query);
$user = $row['Email'];


?>





<?php include('includes/header.php'); ?>



<div class="row" id="maincont">
    <div class="col-sm-9">
<form action="bid.php" method="post">
    <div class="form-group">
      <label for="">Price:</label>
      <input type="number" class="form-control" id="" placeholder="price" name="price">
    </div>
    <div class="form-group">
      <label for="">Description:</label>
      <textarea type="text" rows="5" class="form-control" id="" placeholder="Description" name="description"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary" name="submit1">BID</button>
</form>
    	</div>
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
   		

<!--content end***************************************************************************************-->
<!--profile card**************************************************************************************-->
  <?php include('includes/sidebarUser.php'); ?>
  
</div>



<?php include('includes/footer.php'); ?>


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


	if(isset($_POST['submit1'])){
	
include "classes/class.phpmailer.php";
$ad=$_SESSION['user'];
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
$mail->Subject="BIDONME";
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

	}
		

?>



<?php

	if(isset($_POST['submit1'])){

	mysqli_select_db($dbConnection,"bidonme");
	$count=0;
	$price=$_POST['price'];
	$description=$_POST['description'];
	
		//$id="select vacancyId from vacancy where UserId=". $userId;
	
	
	
	if($count>0){
		echo "<script>alert('Error with your entered records')</script>";
	}else{
		
		$query="INSERT INTO bid(UserId,Price,Description,vacancyId) VALUES ('".$userId."','".$price."','".$description."','".$vecid."')";
		$run = mysqli_query($dbConnection,$query);
		
		if($run){
			echo "<script>alert('Successfully Bid to the vacancy')</script>";
		}
	
	
}
}
$con->close();
?>