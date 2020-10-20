<?php
session_start();
$dbConnection=mysqli_connect('localhost','root','','bidonme');
if(!isset($_SESSION['userEmail'])){
	echo "<script>window.open('RealLogin1.php','_self')</script>";
}
else{
	echo "Welcome"." ".$_SESSION['userEmail'];
	
	
}
?>

<?php include('includes/headUpper.php'); ?>
<title></title>
<?php include('includes/headLower.php'); ?>

<body>

<?php include('includes/header.php'); ?>


<div class="row" id="maincont">
	
  <div class="col-sm-3">
  <h3>Dashboard</h3>
  	<div class="card" id="card">
   		<div class="row">
 			<div class="col-sm-6" id="cardimgdiv">
 				<img class="card-img-top" src="i/img_avatar1.png" alt="Card image" id="cardimg">
 			</div>
  			<div class="col-sm-6">
  				<p class="card-title"><span id="cardname"><b><i>
  					<a id="link2" href="userdetailsuser.php">Name</a></i></b></span></br>
					Location</br>
					<a id="link3" href="#" ><i class="fa fa-sign-out"></i></a>
					<a id="link3" href="logout.php" ><span id="cardsignout">&nbsp; Sign Out</span></a>
				</p>
 			
  				<a href="#" class="btn btn-primary" id="btn1 btnsignout"><i class="fa fa-user-circle" style="font-size:17px"></i>&nbsp; Dashboard</a>
  			</div>
  			<div class="col-sm-12">
  			<br>
 				<a href="userdetailsuser.php" class="btn btn-primary" id="btnsignout">&nbsp; View Profile</a>
 				<br><br>
 				<a href="index2.php" class="btn btn-primary" id="btnsignout">&nbsp; Edit Profile</a>
 				<br><br>
 				<a href="index3.php" class="btn btn-primary" id="btnsignout">&nbsp; Add Higher Edu/ Working Xp</a>
 			</div>
		</div>
    </div>
  	<br>
   	 <div class="card" id="card">
  	  	<h4>&nbsp;Current Status</h4>
   	  	<p>&nbsp;&nbsp;Total Bids &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
   	  	<p>&nbsp;&nbsp;Total Posts&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
   	  	<p>&nbsp;&nbsp;Current Bids &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
   	  	<p>&nbsp;&nbsp;Current Posts&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
   	 </div>
   	 <br>
   	 <div class="card" id="card">
   	 	<h4>&nbsp;Reviews</h4>
   	 </div>
  </div> 
<!--content end***************************************************************************************-->
<!--profile card**************************************************************************************-->
<div class="col-sm-9" id="">

<div id="section1" class="">
<form action="" method="post">
<br>
<h2><?php echo $_GET['insname'];?></h2>  
<br>



  
  
<div class="row">
  <div class="col-sm-3">
  	<label><b><i>Location:</i></b></label>
  </div>
  <div class="col-sm-7">
  	<p><?php echo $_GET['inslocation'];?></p>
  </div>
</div>

  
  
<div class="row">
  <div class="col-sm-3">
  	<label><b><i>Office NO:</i></b></label>
  </div>
  <div class="col-sm-7">
  	<p><?php echo $_GET['insofno'];?></p>
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label><b><i>Mobile No:</i></b></label>
  </div>
  <div class="col-sm-7">
  	<p><?php echo $_GET['insmono'];?></p>
  </div>
</div>



<div class="row">
  <div class="col-sm-3">
  	<label><b><i>Address:</i></b></label>
  </div>
  <div class="col-sm-7">
  	<p><?php echo $_GET['inadl1'];?></p>
  	<p><?php echo $_GET['inadl2'];?></p>
  	<p><?php echo $_GET['inadl3'];?></p>
  	
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for=""><b><i>FaceBook Link</i></b></label>
  </div>
  <div class="col-sm-7">
  	<a href=""><?php echo $_GET['insfblink'];?></a>
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="githublink"><b><i>Website Link</i></b></label>
  </div>
  <div class="col-sm-7">
  	<a href=""><?php echo $_GET['insweblink'];?></a>
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="twitterlink"><b><i>Twitter Link</i></b></label>
  </div>
  <div class="col-sm-7">
  	<a href=""><?php echo $_GET['instwitterlink'];?></a>
  </div>
  
</div>
  

<br><br>
</form>

</div>
    	
    	
    	
    	
    	
    	
    	
    	
    	
   		
</div>
</div>

<?php include('includes/footer.php'); ?>