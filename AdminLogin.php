<?php
	session_start();
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin login</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<link href="css/c1.css" rel="stylesheet" type="text/css">
<link href="css/login.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="row">
		<div class="col-sm-4" style="background-color: white"></div>
		<div class="col-sm-4" style="background-color: white">
			<h2>Admin Login</h2>
			</br>
			<form id="" method="post" action="">
				<div class="input-group mb-3">
					<div class="input-group-prepend" style="text-align: center">
						<span class="input-group-text" style=""><i class="fa fa-envelope" style=""></i></span>
					</div>
					<input type="email" class="form-control" placeholder="Email" id="" name="Email" required pattern="^[A-Za-z0-9@./]+">
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" style=""><i class="fa fa-lock" style="font-size:24px"></i></span>
					</div>
					<input type="password" class="form-control" placeholder="Password" id="regpwd" name="Password" required pattern="^[A-Za-z0-9]+">
				</div>
				
				
				
				
				<input type="submit" name="submit" value="Login">
			</form>
		
		</div>
		<div class="col-sm-4" style="background-color: white"></div>
	</div>
</body>
</html>



<?php

$dbConnection=mysqli_connect('localhost','root','','bidonme');


?>

<?php


	if(isset($_POST['submit'])){

	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	
	//$encriptpassword=md5($Password);
	mysqli_select_db($dbConnection,"bidonme");
	$count=0;
	$res=mysqli_query($dbConnection,"select * from admin where UserName='".$Email."' && Password='".$Password."'");
	$count=mysqli_num_rows($res);
	
	if($count>0){
	// <!-- <script type="text/javascript">
	// window.location="bidding.php";
	// </script>	 -->
	//echo "<script>alert('TEST')</script>";
	$result=mysqli_fetch_assoc($res);
	$id=$result['UserName'];
	//$_SESSION['userID'] = $id;
	$_SESSION['UserName'] = $Email;
	echo "<script>window.open('AdminPanal.php','_self')</script>";

	}
		
	else{ 
	//echo "deAD";
	// <script type="text/javascript">
	// alert("incorrect Email or Password");
	// </script>
		echo "<script>alert('Error login')</script>";
		
	}
}
	?