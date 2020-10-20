 <?php
session_start();
$dbConnection=mysqli_connect('localhost','root','','bidonme');
if(!isset($_SESSION['userEmail'])){
  echo "<script>window.open('index2edit.php','_self')</script>";
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
$results1= mysqli_query($conn,"SELECT * from userprofile where UserId='$userId'");

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
<form action="index2editcode.php" method="get">
<br>
<label><b>User Details</b></label>  

<?php 
$row = mysqlI_fetch_array($results1) ?> 

<div class="row">
  <div class="col-sm-3">
  	<label>Over View:</label>
  </div>
  <div class="col-sm-7">
  	<textarea class="form-control mb-2 mr-sm-2" type="text" name="over" placeholder=" " rows="4" style="width: 100%" value="<?php echo $row['OverView'];?>"></textarea>
  </div>
</div>
<br>



<div class="row">
 <div class="col-sm-3">
  	<label>First name:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="fn" value="<?php echo $row['FirstName'];?>" placeholder="First name" required="required">
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Last name:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="ln" placeholder="Last name" value="<?php echo $row['LastName'];?>">
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Initials:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="in" placeholder="a.b.c." required="required" value="<?php echo $row['Initials'];?>">
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label>Current Job Title</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="cj" placeholder="Current Job Title" id="curjobtitle" required="required" value="<?php echo $row['CurrentJob'];?>">
  </div>
</div>

  
  
<div class="row">
  <div class="col-sm-3">
  	<label>NIC:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="nic" placeholder="123456789v" required="required" value="<?php echo $row['NIC'];?>">
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Gender:</label>
  </div>
  <div class="col-sm-7">
  	<div class="form-check-inline">
      <label class="form-check-label" for="male">
        <input class="form-check-input" type="radio" name="gender" value="<?php echo $row['Gender'];?>" id="male" checked>Male
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="female">
        <input class="form-check-input" type="radio" name="gender" value="<?php echo $row['Gender'];?>" id="female">Female
      </label>
    </div>
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Date Of Birth:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="date" name="dob" placeholder="" required="required" value="<?php echo $row['DOB'];?>">
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Nationality:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="nation" placeholder="Sri Lankan" value="<?php echo $row['Nationality'];?>">
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>CivilStatus:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="civil" placeholder="Single" value="<?php echo $row['CivilStatus'];?>">
  </div>
  
</div>
<br>
<label><b>Contact Info</b></label> <br> 
<div class="row">
  <div class="col-sm-3">
  	<label>Telephone No:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="tp" placeholder="07*-*******" required="required" value="<?php echo $row['TpNo'];?>">
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Alt Telephone No:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="tpAlt" placeholder="07*-*******" value="<?php echo $row['AltTpNo'];?>">
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Address:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="ad1" placeholder="Line 1" value="<?php echo $row['AddressL1'];?>">
  <input class="form-control mb-2 mr-sm-2" type="text" name="ad2" placeholder="Line 2" value="<?php echo $row['AddressL2'];?>">
  <input class="form-control mb-2 mr-sm-2" type="text" name="ad3" placeholder="City" value="<?php echo $row['AddressL3'];?>">
  <input class="form-control mb-2 mr-sm-2" type="text" name="postal" placeholder="Postal Code" value="<?php echo $row['PostalCode'];?>">
  </div>
</div>
<br>

<label><b>Social Media Links</b></label><br>
<div class="row">
  <div class="col-sm-3">
  	<label for="">FaceBook Link</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="fb" placeholder="https://www.facebook.com/**********" id="fblink" value="<?php echo $row['FbLink'];?>">
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="githublink">Github Link</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="git" placeholder="https://www.github.com/**********" id="githublink" value="<?php echo $row['GithubLink'];?>">
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="twitterlink">Twitter Link</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="tw" placeholder="https://www.twitter.com/**********" id="twitterlink" value="<?php echo $row['TwitterLink'];?>">
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="linkedinlink">Linkedin Link</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="link" placeholder="https://www.linkedin.com/**********" id="linkedinlink" value="<?php echo $row['LinkedinLink'];?>">
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="weblink">Web Site Link</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="web" placeholder="https://www.**********.com" id="weblink" value="<?php echo $row['WebLink'];?>">
  </div>
</div>
<br>
   	


<label><b>GCE Ordinary Level</b></label>
<br>
<div class="row">
  <div class="col-sm-3">
  	<label>Index No</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="OLindex" placeholder="*******" id="olindexno" value="<?php echo $row['OlIndexNo'];?>">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Total Results</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="TR" placeholder="A-1, B-2, C-3, S-3" id="olindexno" value="<?php echo $row['OlResult'];?>">
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
  				<input class="form-control mb-2 mr-sm-2" type="text" name="sci" placeholder="A" id="olscience" value="<?php echo $row['OlScience'];?>">
  			</div>
        </td>
        <td>
        	<div>
  				<input class="form-control mb-2 mr-sm-2" type="text" name="maths" placeholder="A" id="olmaths" value="<?php echo $row['OlMaths'];?>">
  			</div>
        </td>
        <td>
        	<div>
  				<input class="form-control mb-2 mr-sm-2" type="text" name="eng" placeholder="A" id="olenglish" value="<?php echo $row['OlEnglish'];?>">
  			</div>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<br>
<label><b>GCE Advanced Level</b></label><br>
<div class="row">
  <div class="col-sm-3">
  	<label>Index No</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="ALindex" placeholder="*******" id="olindexno" value="<?php echo $row['AlIndexNo'];?>">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Total Results</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="TRal" placeholder="A-1, B-2, C-1, S-0" id="olindexno">
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
        <th class="col-sm-2">
        	<div>
  				<input class="form-control mb-2 mr-sm-2" type="text" name="sub1Name" placeholder="Biology" id="alsub1" value="<?php echo $row['AlSub1'];?> ">
  			</div>
        </th>
        <th class="col-sm-2">
        	<div>
  				<input class="form-control mb-2 mr-sm-2" type="text" name="sub2Name" placeholder="Chemistry" id="alsub2" value="<?php echo $row['AlSub2'];?>">
  			</div>
        </th>
        <th class="col-sm-2">
        	<div>
  				<input class="form-control mb-2 mr-sm-2" type="text" name="sub3Name" placeholder="Physics" id="alsub3" value="<?php echo $row['AlSub3'];?>">
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
  				<input class="form-control mb-2 mr-sm-2" type="text" name="sub1" placeholder="A" id="alsub1result" value="<?php echo $row['Alsub1Result'];?>">
  			</div>
        </td>
        <td>
        	<div>
  				<input class="form-control mb-2 mr-sm-2" type="text" name="sub2" placeholder="A" id="alsub2result" value="<?php echo $row['Alsub2Result'];?>">
  			</div>
        </td>
         <td>
        	<div>
  				<input class="form-control mb-2 mr-sm-2" type="text" name="sub3" placeholder="A" id="alsub3result" value="<?php echo $row['Alsub3Result'];?>">
  			</div>
        </td>
        <td>
        	<div>
  				<input class="form-control mb-2 mr-sm-2" type="text" name="sub4" placeholder="A" id="alenglishresult" value="<?php echo $row['AlEnglishResult'];?>">
  			</div>
        </td>
       
      </tr>
    </tbody>
  </table>
</div>
<div>
  				<input type="submit" name="" value="save">
  			</div>
<br><br>

</form>    	
</div>
</div>    
    


</div>
     
    	

<?php include('includes/footer.php'); ?>