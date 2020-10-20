<?php
session_start();
if(!isset($_SESSION['userEmail'])){
  echo "<script>window.open('index3edit.php','_self')</script>";
}
else{
  echo "Welcome"." ".$_SESSION['userEmail'];
  
  
}
?>


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
$results2= mysqli_query($conn,"SELECT * from certificate where UserId='$userId'");
$results3= mysqli_query($conn,"SELECT * from diploma where UserId='$userId'");
$results4= mysqli_query($conn,"SELECT * from degree where UserId='$userId'");
$results5= mysqli_query($conn,"SELECT * from workingxp where UserId='$userId'");
$results6= mysqli_query($conn,"SELECT * from skills where UserId='$userId'");
$results7= mysqli_query($conn,"SELECT * from awards where UserId='$userId'");


?>

<?php include('includes/headUpper.php'); ?>
<title></title>
<?php include('includes/headLower.php'); ?>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="1">
<?php include('includes/header.php'); ?>
<div class="row" id="maincont"  class="container-fluid">
	
 <?php include('includes/SidebarDashboad.php'); ?>
<!--content end***************************************************************************************-->
<!--profile card**************************************************************************************-->
<div class="col-sm-9" id="">

<div id="section1" class="">


<div id="formuserdetails">
<form action="index3editcode.php" method="get">
<br>

<div id="">
    <div class="card">
      
        <p class="card-link" data-toggle="collapse" href="#userhiedu">
          Add new Certificates/Diplomas/Degrees
        </p>
      

        <div class="card-body">
  

<label><b>Certificates</b></label>


<?php 
$row = mysqlI_fetch_array($results2) ?> 


<div class="row">
  <div class="col-sm-3">
  	<label>Certificate Title</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="CT" value="<?php echo $row['CerTitle'];?>" placeholder="Certificate in ****************" id="certitle">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Results</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="CR" value="<?php echo $row['CerResult'];?>" placeholder="A+ / A / B / C *" id="cerresult">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Institute</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="cerins" value="<?php echo $row['InsName'];?>" placeholder="**************" id="cerins">
  </div>
</div>
<br>

	
<label><b>Diplomas</b></label>

<?php 
$row = mysqlI_fetch_array($results3) ?> 

<div class="row">
  <div class="col-sm-3">
  	<label>Diploma Title</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="DIPT" value="<?php echo $row['DipTitle'];?>" placeholder="Diploma in ****************" id="diptitle">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Results</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="DIPR" value="<?php echo $row['DipResult'];?>" placeholder="A+ / A / B / C *" id="dipresult">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Institute</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="dipins" value="<?php echo $row['InsName'];?>" placeholder="**************" id="dipins">
  </div>
</div>
<br>		
				
<label><b>Degrees</b></label>

<?php 
$row = mysqlI_fetch_array($results4) ?> 

<div class="row">
  <div class="col-sm-3">
  	<label>Degree Title</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="DEGT" value="<?php echo $row['DegreeTitle'];?>" placeholder="****************" id="degtitle">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Degree Level</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="DEGL" value="<?php echo $row['DegreeLevel'];?>" placeholder="2nd upper honours" id="degresult">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>University</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="degins" value="<?php echo $row['InsName'];?>" placeholder="University of **************" id="degins">
 
<br>
<br><br>			


        </div>
      </div>
    </div>


  	

<div id="">
    <div class="card">
      
        <p class="card-link" data-toggle="collapse" href="#userworkxp">
          Add new Working Experience/Skills
        </p>
      
      
        <div class="card-body">
             	



<label><b>Working Experience</b></label>

<?php 
$row = mysqlI_fetch_array($results5) ?> 

<div class="row">
  <div class="col-sm-3">
  	<label>Job Title</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="jobtitle" value="<?php echo $row['JobTitle'];?>" placeholder="Job Title" id="jobtitle">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Company</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="CO" value="<?php echo $row['Company'];?>" placeholder="abcd (pvt) ltd" id="cmpny">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Time Period</label>
  </div>
  <div class="col-sm-3">
  	<input class="form-control mb-2 mr-sm-2" type="date" name="SD" value="<?php echo $row['StartDate'];?>" placeholder="" id="jobstdate">
  </div>
  <div class="col-sm-1">
  	<label>to</label>
  </div>
  <div class="col-sm-3">
  	<input class="form-control mb-2 mr-sm-2" type="date" name="ED" value="<?php echo $row['EndDate'];?>" placeholder="" id="jobenddate">
  </div>
  <div class="col-sm-2">
  	
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Discription</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="DES" value="<?php echo $row['Description'];?>" placeholder="Job Description" id="jobdiscrp">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Location</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="LO" value="<?php echo $row['Location'];?>" placeholder="Colombo" id="joblocation">
  </div>
</div>


<label><b>Skills</b></label>

<?php 
$row = mysqlI_fetch_array($results6) ?> 

<div class="row">
  <div class="col-sm-3">
  	<label>Skill &amp; Percentage/Rate</label>
  </div>
  <div class="col-sm-4">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="ST" value="<?php echo $row['SkillTitle'];?>" placeholder="Communication" id="skill1">
  </div>
  <div class="col-sm-3">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="SL" value="<?php echo $row['skillLevel'];?>" placeholder="Very Good" id="skillrate1">
  </div>
</div>


<label><b>Awards</b></label>

<?php 
$row = mysqlI_fetch_array($results7) ?> 

<div class="row">
  <div class="col-sm-3">
  	<label>Award Title</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="AT" value="<?php echo $row['AwardTitle'];?>" placeholder="Award Title" id="awrdttl">
  </div>
  <div class="col-sm-3">
  	<label>Award Description</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="AD" value="<?php echo $row['Description'];?>" placeholder="Award Description" id="awrddis">
  </div>
</div>

</div>
<br>
	
 	

        
      </div>
    </div>
    
    
    </div>
<div>
          <input type="submit" name="" value="save">
        </div>
  </form>
  </div>    	
</div>    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
   		
</div>


<?php include('includes/footer.php'); ?>