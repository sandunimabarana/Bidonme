<?php
	session_start();
?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Hiring &amp; Advertising Website</title>

	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link href="css/c1.css" rel="stylesheet" type="text/css">
	<link href="css/login.css" rel="stylesheet" type="text/css">
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--**************************************************************************************************-->
	<!--**************************************************************************************************-->
	<!--**************************************************************************************************-->
	<!--**************************************************************************************************-->
	<!--**************************************************************************************************-->
	<!--**************************************************************************************************-->

	<!--**************************************************************************************************-->
	<!--**************************************************************************************************-->
	<!--**************************************************************************************************-->
	<!--**************************************************************************************************-->
	<!--**************************************************************************************************-->
	<!--**************************************************************************************************-->
</head>

<body>
	<!--header logo and tagline **************************************************************************-->
	<!--header logo and tagline **************************************************************************-->
	<!--header logo and tagline **************************************************************************-->
	<!--header logo and tagline **************************************************************************-->
	<!--header logo and tagline **************************************************************************-->
	<!--header logo and tagline **************************************************************************-->
	<div class="row">
		<div class="col-sm-3">
			<a href="########################"><img src="i/final.png" alt="logoimage" id="logoimg"></a>
		</div>
		<!--**************************************************************************************************-->
		<!--**************************************************************************************************-->
		<div class="col-sm-3"></div>
		<!--**************************************************************************************************-->
		<!--**************************************************************************************************-->
		<div class="col-sm-2"></div>
		<!--**************************************************************************************************-->
		<!--**************************************************************************************************-->
		<div class="col-sm-4" id="headertagline">
			<h4><b><i>Let us “build” a job for you</i></b></h4>
		</div>
	</div>
	<!--header end****************************************************************************************-->
	<!--header end****************************************************************************************-->
	<!--header end****************************************************************************************-->
	<!--navigation bar ***********************************************************************************-->
	<!--navigation bar ***********************************************************************************-->
	<!--navigation bar ***********************************************************************************-->


	<div class="row" class="navbar navbar-expand-md navbar-dark sticky-top" id="lognav">
		<div class="col-sm-9">



		</div>
		<div class="col-sm-3">

			<form class="form-inline" action="" method="post">
  				<label for="email">Email address:</label>
				</br>
  				<input type="email" class="form-control" name="e" id="logemail" required pattern="^[A-Za-z0-9@./]+"><br>
  				<label for="pwd">Password:</label>
  				</br>
  				<input type="password" class="form-control" name="pwd" id="logpwd" required pattern="^[A-Za-z0-9]+"><br>
  				<!-- <button class="btn" type="submit" name="reg" id="logbtn2">Login</button> -->
  				<input type="submit" name="reg" class="btn" value="Login">
  	</form>

		</div>
	</div>


	<!--navigation bar end *******************************************************************************-->
	<!--navigation bar end *******************************************************************************-->
	<!--navigation bar end *******************************************************************************-->
	<!--content profile card******************************************************************************-->
	<!--content profile card******************************************************************************-->
	<!--content profile card******************************************************************************-->
	<div class="row" id="maincont">
		<div class="col-sm-9">
			<div id="demo" class="carousel slide" data-ride="carousel">

				<!-- Indicators -->
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
					<li data-target="#demo" data-slide-to="3"></li>
					<li data-target="#demo" data-slide-to="4"></li>
				</ul>

				<!-- The slideshow -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="i/slide/alone-business-businessman-closeup-computer-digital-device-1437647-pxhere.com.jpg" alt="" width="100%">
						<div class="carousel-caption">
							<h3>BIDONME</h3>
							<p>Let us “build” a job for you</p>

						</div>
					</div>
					<div class="carousel-item">
						<img src="i/slide/computer-technology-web-internet-coding-website-755062-pxhere.com.jpg" alt="" width="100%">
					</div>
					<div class="carousel-item">
						<img src="i/slide/laptop-computer-writing-working-table-person-764428-pxhere.com-(1).jpg" alt="" width="100%">
					</div>
					<div class="carousel-item">
						<img src="i/slide/wood-roof-beam-construction-concrete-construction-site-824644-pxhere.com.jpg" alt="" width="100%">
					</div>
					<div class="carousel-item">
						<img src="i/slide/writing-internet-tablet-communication-stylus-brand-1044780-pxhere.com.jpg" alt="" width="100%" height="75%">
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
			
				<a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
			
			</div>


		</div>
		<!--content end***************************************************************************************-->
		<!--profile card**************************************************************************************-->
		<div class="col-sm-3" style="background-color: white">
			<h2>Create a new account</h2>
			<h4>It's free and always will be.</h4>
			</br>
			<form id="regfrm" method="post" action="">
				<div class="input-group mb-3">
					<div class="input-group-prepend" style="text-align: center">
						<span class="input-group-text" style=""><i class="fa fa-envelope" style=""></i></span>
					</div>
					<input type="email" class="form-control" placeholder="Email" id="regemail" name="Email" required pattern="^[A-Za-z0-9@./]+">
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" style=""><i class="fa fa-lock" style="font-size:24px"></i></span>
					</div>
					<input type="password" class="form-control" placeholder="Password" id="regpwd" name="Password" required pattern="^[A-Za-z0-9]+">
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" style=""><i class="fa fa-lock" style="font-size:24px"></i></span>
					</div>
					<input type="password" class="form-control" placeholder="Confirm Password" id="regcompwd" name="Confirm Password">
				</div>
				<div class="form-group form-check">
					<label class="form-check-label">
      			<input class="form-check-input" type="checkbox" id="rme"> Remember me
    			</label>
				
				</div>
				<div class="form-group form-check">
					<label class="form-check-label">
      			<input class="form-check-input" type="checkbox" id="checkpnp">Agree to our Terms, Data Policy and Cookie Policy.</label>
				
				</div>
				<!-- <button type="submit regbtn" class="btn btn-primary" id="regbtn">Signup</button> -->
				<input type="submit" name="register" value="Signup">
			</form>

		</div>
	</div>
	<div id="d1">&nbsp;</div>
	<!--profile card end**********************************************************************************-->
	<!--profile card end**********************************************************************************-->
	<!--profile card end**********************************************************************************-->
	<!--**************************************************************************************************-->
	<!--**************************************************************************************************-->
	<!--**************************************************************************************************-->
	<div style="text-align: center">
		<h2>Get your project started now...</h2>
	</div>
	<div class="row" style="text-align: center">
		<div class="col-sm-2">
			<img src="i/job/construction.png" class="rounded-circle" alt="Cinque Terre" width="90%" id="img">
			</br>
			</br>
			<p style="font-size: 24px">Labor</p>
		</div>
		<div class="col-sm-2">
			<img src="i/job/marketing.png" class="rounded-circle" alt="Cinque Terre" width="90%" id="img">
			</br>
			</br>
			<p style="font-size: 24px">Marketing</p>
		</div>
		<div class="col-sm-2">
			<img src="i/job/health.png" class="rounded-circle" alt="Cinque Terre" width="90%" id="img">
			</br>
			</br>
			<p style="font-size: 24px">Health Care</p>
		</div>
		<div class="col-sm-2">
			<img src="i/job/it.png" class="rounded-circle" alt="Cinque Terre" width="90%" id="img">
			</br>
			</br>
			<p style="font-size: 24px">IT</p>
		</div>
		<div class="col-sm-2">
			<img src="i/job/account.png" class="rounded-circle" alt="Cinque Terre" width="90%" id="img">
			</br>
			</br>
			<p style="font-size: 24px">Accounting</p>
		</div>
		<div class="col-sm-2">
			<img src="i/job/manager.png" class="rounded-circle" alt="Cinque Terre" width="90%" id="img">
			</br>
			</br>
			<p style="font-size: 24px">Management</p>
		</div>
	</div>
	<hr style="background-color: #000033">
	<!--**************************************************************************************************-->
	<!--**************************************************************************************************-->
	<!--**************************************************************************************************-->
	<!--**************************************************************************************************-->
	<!--**************************************************************************************************-->
	<!--**************************************************************************************************-->
	<div style="text-align: center">
		<h2>Browse job categories</h2>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">Accounting</li>
				<li class="list-group-item">Automotive</li>
				<li class="list-group-item">Banking</li>
				<li class="list-group-item">Biotech</li>
				<li class="list-group-item">Broadcast </li>
				<li class="list-group-item">Business Development</li>
				<li class="list-group-item">Construction</li>
				<li class="list-group-item">Consultant</li>
				<li class="list-group-item">Customer Service</li>
				<li class="list-group-item">Design</li>
			</ul>
		</div>
		<div class="col-sm-2">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">Distribution </li>
				<li class="list-group-item">Education </li>
				<li class="list-group-item">Engineering</li>
				<li class="list-group-item">Entry Level </li>
				<li class="list-group-item">Executive</li>
				<li class="list-group-item">Facilities</li>
				<li class="list-group-item">Finance</li>
				<li class="list-group-item">Food Service</li>
				<li class="list-group-item">Franchise</li>
				<li class="list-group-item">General Business</li>
			</ul>
		</div>
		<div class="col-sm-2">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">Health Care</li>
				<li class="list-group-item">Hospitality</li>
				<li class="list-group-item">Hotel </li>
				<li class="list-group-item">Human Resources</li>
				<li class="list-group-item">Information Tech</li>
				<li class="list-group-item">Installation </li>
				<li class="list-group-item">Insurance</li>
				<li class="list-group-item">Inventory</li>
				<li class="list-group-item">Journalism </li>
				<li class="list-group-item">Labor</li>
			</ul>
		</div>
		<div class="col-sm-2">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">Legal</li>
				<li class="list-group-item">Maint </li>
				<li class="list-group-item">Management</li>
				<li class="list-group-item">Manufacturing</li>
				<li class="list-group-item">Marketing</li>
				<li class="list-group-item">Media</li>
				<li class="list-group-item">Newspaper</li>
				<li class="list-group-item">Nonprofit </li>
				<li class="list-group-item">Pharmaceutical</li>
				<li class="list-group-item">Planning</li>
			</ul>
		</div>
		<div class="col-sm-2">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">Procurement</li>
				<li class="list-group-item">Professional Services</li>
				<li class="list-group-item">QA</li>
				<li class="list-group-item">Quality Control</li>
				<li class="list-group-item">Real Estate</li>
				<li class="list-group-item">Repair</li>
				<li class="list-group-item">Research</li>
				<li class="list-group-item">Restaurant </li>
				<li class="list-group-item">Retail</li>
				<li class="list-group-item">Sales</li>
			</ul>
		</div>
		<div class="col-sm-2">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">Shipping</li>
				<li class="list-group-item">Social Services</li>
				<li class="list-group-item">Strategy </li>
				<li class="list-group-item">Supply Chain</li>
				<li class="list-group-item">Teaching</li>
				<li class="list-group-item">Telecommunications</li>
				<li class="list-group-item">Trades</li>
				<li class="list-group-item">Transportation</li>
				<li class="list-group-item">Warehouse</li>
				<li class="list-group-item">Other</li>
			</ul>
		</div>

	</div>
	<!--**************************************************************************************************-->
	<!--**************************************************************************************************-->
	<!--**************************************************************************************************-->
	
<?php include('includes/footer.php'); ?>



<?php

$dbConnection=mysqli_connect('localhost','root','','bidonme');


?>

<?php


	if(isset($_POST['reg'])){

	$Email=$_POST['e'];
	$Password=$_POST['pwd'];
	$encriptpassword=md5($Password);
	mysqli_select_db($dbConnection,"bidonme");
	$count=0;
	$res=mysqli_query($dbConnection,"select * from user where Email='".$Email."' && Password='".$encriptpassword."'");
	$count=mysqli_num_rows($res);

	if($count>0){
	// <!-- <script type="text/javascript">
	// window.location="bidding.php";
	// </script>	 -->
	//echo "<script>alert('TEST')</script>";
	$_SESSION['userEmail'] = $Email;
	echo "<script>window.open('vtemporyjobs.php','_self')</script>";

	}
		
	else{ 
	//echo "deAD";
	// <script type="text/javascript">
	// alert("incorrect Email or Password");
	// </script>
		echo "<script>alert('This Email already exists please choose another')</script>";
		
	}
}
	?>
	<?php

	if(isset($_POST['register'])){

	mysqli_select_db($dbConnection,"bidonme");
	$count=0;
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	$encriptpassword=md5($Password);
	$sql = "select * from user where Email='$Email'";
	$res=mysqli_query($dbConnection,$sql);
	$count=mysqli_num_rows($res);
	
	echo $count;
	
	if($count>0){
		echo "<script>alert('This Email already exists please choose another')</script>";
	}else{
		
		$query="INSERT INTO user(Email,Password) VALUES ('$Email','$encriptpassword')";
		$run = mysqli_query($dbConnection,$query);
		
		if($run){
			echo "<script>alert('Record inserted Successfull')</script>";
		}
	
	
}
}
?>