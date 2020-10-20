<?php
session_start();
$dbConnection=mysqli_connect('localhost','root','','bidonme');
if(!isset($_SESSION['userEmail'])){
	echo "<script>window.open('institute.php','_self')</script>";
}
else{
	echo "Welcome"." ".$_SESSION['userEmail'];
	
	
}
?>
<?php include('includes/headUpper.php'); ?>
<title>Institute</title>
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
					<a id="link3" href="#" ><span id="cardsignout">&nbsp; Sign Out</span></a>
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
<label><b>Company/Institute Details</b></label>  

<div class="row">
 <div class="col-sm-3">
  	<label>Company/Institute Name:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="insname" placeholder="abc (pvt)ltd" id="insname">
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Location:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="inslocation" placeholder="Colombo" id="inslocation">
  </div>
</div>

  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Office NO:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="insofno" placeholder="011-*******" id="insofno">
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Mobile No:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="insmono" placeholder="077-*******" id="insmono">
  </div>
</div>



<div class="row">
  <div class="col-sm-3">
  	<label>Address:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="inadl1" placeholder="Line 1" id="inadl1">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="inadl2" placeholder="Line 2" id="inadl2">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="inadl3" placeholder="City" id="inadl3">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="inadl4" placeholder="Postal Code" id="inadl4">
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="">FaceBook Link</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="insfblink" placeholder="https://www.facebook.com/**********" id="insfblink">
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="githublink">Website Link</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="insweblink" placeholder="https://www.**********" id="insweblink">
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="twitterlink">Twitter Link</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="instwitterlink" placeholder="https://www.twitter.com/**********" id="instwitterlink">
  </div>
  <div class="col-sm-2">
  	<input type="submit" name="" value="save">
  </div>
</div>
  

<br><br>
</form>

</div>
    	
    	
    	
    	
    	
    	
    	
    	
    	
   		
</div>
</div>


<?php include('includes/footer.php'); ?>