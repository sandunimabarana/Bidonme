<?php
session_start();

if(!isset($_SESSION['userEmail'])){
  echo "<script>window.open('userdetailsview.php','_self')</script>";
}
else{
  echo "Welcome"." ".$_SESSION['userEmail'];
  
  
}
?>
<?php
$userId=$_GET['id'];

 echo $_GET['id'] ;
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

/*$userEmail = $_SESSION['userEmail'];
$query =mysqli_query($conn,"SELECT* from user where Email='$userEmail'");
$row=mysqli_fetch_array($query);
$userId=$row['UserId'];
*/
$userId=$_GET['id'];

//retrieve records
$results1= mysqli_query($conn,"SELECT * from userprofile where UserId='$userId'");
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
<div>
	
	
</div>

<div id="formuserdetails">
<form action="" method="post">
<br>
<label><b>User Details</b></label> 

<?php 
$row = mysqlI_fetch_array($results1) ?> 

<div class="row">
  <div class="col-sm-3">
  	<label>Over View:</label>
  </div>
  <div class="col-sm-7">
  	<p><?php echo $row['OverView'];?></p>
  </div> 
</div>
<br>



<div class="row">
 <div class="col-sm-3">
  	<label>First name:</label>
  </div>
  <div class="col-sm-7">
  	<p><?php echo $row['FirstName'];?></p>
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Last name:</label>
  </div>
  <div class="col-sm-7">
  	<p><?php echo $row['LastName'];?></p>
  </div>
</div>




<div class="row">
  <div class="col-sm-3">
  	<label>Current Job Title</label>
  </div>
  <div class="col-sm-7">
  	<p><?php echo $row['CurrentJob'];?></p>
  </div>
</div>



  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Gender:</label>
  </div>
  <div class="col-sm-7">
  	<p><?php echo $row['Gender'];?></p>
  </div>
</div>



  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Nationality:</label>
  </div>
  <div class="col-sm-7">
  	<p><?php echo $row['Nationality'];?></p>
  </div>
</div>

  
  
<div class="row">
  <div class="col-sm-3">
  	<label>CivilStatus:</label>
  </div>
  <div class="col-sm-7">
  	<p><?php echo $row['CivilStatus'];?></p>
  </div>
  
</div>

</form>
</div>
</div>

<div id="section2" class="">
<div>
	
	
</div>

<div id="formcontactinfo">
<form action="" method="post">
<br>  
<label><b>Contact Info</b></label>  
<div class="row">
  <div class="col-sm-3">
  	<label>Telephone No:</label>
  </div>
  <div class="col-sm-7">
  	<p><?php echo $row['TpNo'];?></p>
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Alt Telephone No:</label>
  </div>
  <div class="col-sm-7">
  	<p><?php echo $row['AltTpNo'];?></p>
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Location:</label>
  </div>
  <div class="col-sm-7">
  <p><?php echo $row['AddressL3'];?></p>
  </div>
</div>


<label><b>Social Media Links</b></label>
<div class="row">
  <div class="col-sm-3">
  	<label for="">FaceBook Link</label>
  </div>
  <div class="col-sm-7">
  	<p><?php echo $row['FbLink'];?></p>
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="githublink">Github Link</label>
  </div>
  <div class="col-sm-7">
  	<p><?php echo $row['GithubLink'];?></p>
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="twitterlink">Twitter Link</label>
  </div>
  <div class="col-sm-7">
  	<p><?php echo $row['TwitterLink'];?></p>
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="linkedinlink">Linkedin Link</label>
  </div>
  <div class="col-sm-7">
  	<p><?php echo $row['LinkedinLink'];?></p>
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="weblink">Web Site Link</label>
  </div>
  <div class="col-sm-7">
  	<p><?php echo $row['WebLink'];?></p>
  </div>
  
</div>

   	
</form>    	
</div>
</div> 
   	
<div id="section3" class="">
<div>
	
	
</div>

<div id="formeducation">   	  	  	


<br>
<label><b>GCE Ordinary Level</b></label>

<div class="row">
  <div class="col-sm-3">
  	<label>Total Results</label>
  </div>
  <div class="col-sm-7">
  	<p><?php echo $row['OlResult'];?></p>
  </div>
</div>
<div class="row">
 <table class="table table-borderless">
    <thead>
      <tr>
        <th class="col-sm-3">
        	<div>
  				<label>Subject</label>
  			</div>
        </th>
        <th class="col-sm-3">
        	<div>
  				<label>Science</label>
  			</div>
        </th>
        <th class="col-sm-3">
        	<div>
  				<label>Maths</label>
  			</div>
        </th>
        <th class="col-sm-1">
        	<div>
  				<label>English</label>
  			</div>
        </th>
        <th class="col-sm-2">
        	
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
        	<div>
  				<label>Result</label>
  			</div>
        </td>
        <td>
        	<div>
  				<p><?php echo $row['OlScience'];?></p>
  			</div>
        </td>
        <td>
        	<div>
  				<p><?php echo $row['OlMaths'];?></p>
  			</div>
        </td>
        <td>
        	<div>
  				<p><?php echo $row['OlEnglish'];?></p>
  			</div>
        </td>
        <th>
        	
        </th>
      </tr>
    </tbody>
  </table>
</div>


<br>
<label><b>GCE Advanced Level</b></label>


<div class="row">
 <table class="table table-borderless">
    <thead>
      <tr>
        <th class="col-sm-3">
        	<div>
  				<label>Subject</label>
  			</div>
        </th>
        <th class="col-sm-2">
        	<div>
  				<p><?php echo $row['AlSub1'];?></p>
  			</div>
        </th>
        <th class="col-sm-2">
        	<div>
  				<p><?php echo $row['AlSub2'];?></p>
  			</div>
        </th>
        <th class="col-sm-2">
        	<div>
  				<p><?php echo $row['AlSub3'];?></p>
  			</div>
        </th>
        <th class="col-sm-1">
        	<div>
  				<label>English</label>
  			</div>

        </th>
        <th class="col-sm-2">
        	<div>
  				
  			</div>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
        	<div>
  				<label>Result</label>
  			</div>
        </td>
        <td>
        	<div>
  				<p><?php echo $row['Alsub1Result'];?></p>
  			</div>
        </td>
        <td>
        	<div>
  				<p><?php echo $row['Alsub2Result'];?></p>
  			</div>
        </td>
         <td>
        	<div>
  				<p><?php echo $row['Alsub3Result'];?></p>
  			</div>
        </td>
        <td>
        	<div>
  				<p><?php echo $row['AlEnglishResult'];?></p>
  			</div>
        </td>
        <th>
        	
        </th>
      </tr>
    </tbody>
  </table>
</div>
<br><br>
   	
</div>
</div>   


 
<?php 
$row = mysqlI_fetch_array($results2) ?> 
    
<div id="section4" class="">
<div>
	<label><b>Certificates</b></label>
	<table class="table table-striped col-sm-10">
    <thead>
      <tr>
        <th>Certificate Title</th>
        <th>Results</th>
        <th>Institute</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><p><?php echo $row['CerTitle'];?></p></td>
        <td><p><?php echo $row['CerResult'];?></p></td>
        <td><p><?php echo $row['InsName'];?></p></td>
      </tr>
     
    </tbody>
  </table>
  <br>
<?php 
$row = mysqlI_fetch_array($results3) ?> 


  <label><b>Diplomas</b></label>
	<table class="table table-striped col-sm-10">
    <thead>
      <tr>
        <th>Diploma Title</th>
        <th>Results</th>
        <th>Institute</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><p><?php echo $row['DipTitle'];?></p></td>
        <td><p><?php echo $row['DipResult'];?></p></td>
        <td><p><?php echo $row['InsName'];?></p></td>
      </tr>
     
    </tbody>
  </table>
  <br>
  


  <?php 
  $row = mysqlI_fetch_array($results4) ?>
  <label><b>Degrees</b></label>
	<table class="table table-striped col-sm-10">
    <thead>
      <tr>
        <th>Degree Title</th>
        <th>Degree Level</th>
        <th>University</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><p><?php echo $row['DegreeTitle'];?></p></td>
        <td><p><?php echo $row['DegreeLevel'];?></p></td>
        <td><p><?php echo $row['InsName'];?></p></td>
      </tr>
     
    </tbody>
  </table>



<?php 
$row = mysqlI_fetch_array($results5) ?>  
</div>
</div>  	
<div id="section5" class="">
<div>
<label><b>Working Experience</b></label>	

 

	<table class="table table-striped col-sm-10">
    <thead>
      <tr>
        <th>Job Title</th>
        <th>Company</th>
        <th>Time Period</th>
        <th>Location</th>
         <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><p><?php echo $row['JobTitle'];?></p></td>
        <td><p><?php echo $row['Company'];?></p></td>
        <td><p><?php echo $row['StartDate'];?>  to     <?php echo $row['EndDate'];?></p></td>
        <td><p><?php echo $row['Location'];?></p></td>
        <td><p><?php echo $row['Description'];?>
      </tr>
     
    </tbody>
  </table>



<?php 
$row = mysqlI_fetch_array($results6) ?>  

<label><b>Skills</b></label>

 <div class="row">
  <div class="col-sm-3">
  	<label for="githublink">Skill &amp; Percentage/Rate</label>
  </div>
  <div class="col-sm-7">
  	<table class="table table-striped col-sm-12">
    <tbody>
      <tr>
        <td><p><?php echo $row['SkillTitle'];?></p></td>
        <td><p><?php echo $row['skillLevel'];?></p></td>
      </tr>
    </tbody>
  </table>
  </div>
</div>



<?php 
$row = mysqlI_fetch_array($results7) ?>  


<label><b>Awards</b></label>
<div class="row">
  <div class="col-sm-3">
  	<label>Award Title</label>
  </div>
  <div class="col-sm-7">
  	<p><?php echo $row['AwardTitle'];?></p>
  </div>
  <div class="col-sm-3">
  	<label>Award Description</label>
  </div>
  <div class="col-sm-7">
  	<p><?php echo $row['Description'];?></p>
  </div>
</div>
 
	
 
</div>
</div>    	
</div>    	
</div>      	
    	
<?php include('includes/footer.php'); ?>