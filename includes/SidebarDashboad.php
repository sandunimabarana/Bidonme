
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bidonme";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$userEmail = $_SESSION['userEmail'];
$query =mysqli_query($conn,"SELECT* from user where Email='$userEmail'");
$row=mysqli_fetch_array($query);
$userId=$row['UserId'];

//retrieve records
$results8= mysqli_query($conn,"SELECT * from userprofile where UserId='$userId'");

?>

<div class="col-sm-3">
  	<div class="card" id="card">
   		<div class="row">
 			<div class="col-sm-6" id="cardimgdiv">
 				<img class="card-img-top" src="i/img_avatar1.png" alt="Card image" id="cardimg">
 			</div>
  			<div class="col-sm-6">
          <?php 
$row = mysqlI_fetch_array($results8) ?> 
  				<p class="card-title"><span id="cardname"><b><i>
  					<a id="link2" href=""><?php echo $row['FirstName'];?> <?php echo $row['LastName'];?></a></i></b></span></br>
					<?php echo $row['AddressL3'];?></br>
					<a id="link3" href="logout.php" ><i class="fa fa-sign-out"></i></a>
					<a id="link3" href="logout.php" ><span id="cardsignout">&nbsp; Sign Out</span></a>
				</p>
  			</div>
  			<div class="col-sm-12">
  			<br>
 				<a href="userdetailsuser.php" class="btn btn-primary" id="btnsignout">&nbsp; View Profile</a>
 				<br><br>
 				<a href="index2.php" class="btn btn-primary" id="btnsignout">&nbsp; Create Profile</a>
 				<br><br>
 				<a href="index2edit.php" class="btn btn-primary" id="btnsignout">&nbsp; edit Profile</a>
 				<br><br>
 				<a href="index3.php" class="btn btn-primary" id="btnsignout">&nbsp; Add Edu Qualifications</a>
 				<br><br>
 				<a href="index3edit.php" class="btn btn-primary" id="btnsignout">&nbsp; Edit Edu Qualifications</a>
 				<br><br>
 				<a href="change_password.php" class="btn btn-primary" id="btnsignout">&nbsp; Change Password</a>
 				<br><br>
 				<a href="upload.php" class="btn btn-primary" id="btnsignout">&nbsp; Add Profile pic</a>
 				<br><br>
        <a href="reviewNew.php" class="btn btn-primary" id="btnsignout">&nbsp; Reviews</a>
        <br><br>
 			</div>
		</div>
    </div>
  	<br>
   	 <br>
   	 <div class="card" id="card">
   	 	<h4>&nbsp;Reviews</h4>
   	 </div>
</div>