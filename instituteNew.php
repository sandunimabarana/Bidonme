<?php
session_start();
$dbConnection=mysqli_connect('localhost','root','','bidonme');
if(!isset($_SESSION['userEmail'])){
	echo "<script>window.open(instituteNew.php','_self')</script>";
}
else{
	
	
	
}
?>


<?php include('includes/headUpper.php'); ?>
<title></title>
<?php include('includes/headLower.php'); ?>



<body>


<?php include('includes/header.php'); ?>


<div class="row" id="maincont">
	
 <?php include('includes/sidebarUser.php'); ?>

<!--content end***************************************************************************************-->
<!--profile card**************************************************************************************-->
<div class="col-sm-9" id="">

<div id="section1" class="">
<form action="instituteNew.php" method="post">

<br>
<label><b>Company/Institute Details</b></label>  

<div class="row">
 <div class="col-sm-3">
  	<label>Company/Institute Name:</label>
  </div>
  <div class="col-sm-7 form-group form-check">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="insname" placeholder="abc (pvt)ltd" id="insname" required>
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Location:</label>
  </div>
  <div class="col-sm-7 form-group form-check">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="inslocation" placeholder="Colombo" id="inslocation" required>
  </div>
</div>

  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Office NO:</label>
  </div>
  <div class="col-sm-7 form-group form-check">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="insofno" placeholder="011-*******" id="insofno" required pattern="^[0-9-+s()]*$">
  </div>
</div>



<div class="row">
  <div class="col-sm-3">
  	<label>Institute Email:</label>
  </div>
  <div class="col-sm-7 form-group form-check">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="Insemail" placeholder="*******@gmail.com" id="insEmail" required pattern="^[A-Za-z0-9@./]+">
  </div>
</div>

  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Mobile No:</label>
  </div>
  <div class="col-sm-7 form-group form-check">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="insmono" placeholder="077-*******" id="insmono" required pattern="^[0-9-+s()]*$">
  </div>
</div>



<div class="row">
  <div class="col-sm-3">
  	<label>Address:</label>
  </div>
  <div class="col-sm-7 form-group form-check">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="inadl1" placeholder="Line 1" id="inadl1" required>
  	<input class="form-control mb-2 mr-sm-2" type="text" name="inadl2" placeholder="Line 2" id="inadl2" required>
  	<input class="form-control mb-2 mr-sm-2" type="text" name="inadl3" placeholder="City" id="inadl3" required>
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="">FaceBook Link</label>
  </div>
  <div class="col-sm-7 form-group form-check">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="insfblink" placeholder="https://www.facebook.com/**********" id="insfblink" pattern="https?://.+" required />
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="githublink">Website Link</label>
  </div>
  <div class="col-sm-7 form-group form-check">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="insweblink" placeholder="https://www.**********" id="insweblink" pattern="https?://.+" required />
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="twitterlink">Twitter Link</label>
  </div>
  <div class="col-sm-7 form-group form-check">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="instwitterlink" placeholder="https://www.twitter.com/**********" id="instwitterlink" pattern="https?://.+" required />
  </div>
  <div class="col-sm-2 form-group form-check">
  	<input type="submit" name="submit" value="save">
  </div>
</div>
  

<br><br>
</form>

</div>
    	
    	
    	
    	
    	
    	
    	
    	
    	
   		
</div>
</div>


<?php include('includes/footer.php'); ?>

<?php
$userEmial = $_SESSION['userEmail'];
$query=mysqli_query($dbConnection,"select * from user where Email='$userEmial'");
$row= mysqli_fetch_array($query);
$userId = $row['UserId'];


?>

<?php

	if(isset($_POST['submit'])){

	mysqli_select_db($dbConnection,"bidonme");
	$count=0;
	$InsName=$_POST['insname'];
	$InsEmail=$_POST['Insemail'];
	$InsOfzNo=$_POST['insofno'];
	$InsMoblNo=$_POST['insmono'];
	$Location=$_POST['inslocation'];
	$InsAddL1=$_POST['inadl1'];
	$InsAddL2=$_POST['inadl2'];
	$InsAddL3=$_POST['inadl3'];
	$InsWebLink=$_POST['insweblink'];
	$InsFbLink=$_POST['insfblink'];
	$InsTwtLink=$_POST['instwitterlink'];
	
	
	
	if($count>0){
		echo "<script>alert('Error with your entered records')</script>";
	}else{
		
		$query="INSERT INTO institute(InsName,InsEmail,InsOfficeNo,InsMobileNo,Location,InsAddressL1,InsAddressL2,InsAddressL3,InsWebLink,InsFBLink,InsTwitterLink) VALUES ('".$InsName."','".$InsEmail."','".$InsOfzNo."','".$InsMoblNo."','".$Location."','".$InsAddL1."','".$InsAddL2."','".$InsAddL3."','".$InsWebLink."','".$InsFbLink."','".$InsTwtLink."')";
		$run = mysqli_query($dbConnection,$query);
		
		if($run){
			echo "<script>alert('Record inserted Successfull')</script>";
		}
	
	
}
}
?>