<?php
session_start();
$dbConnection=mysqli_connect('localhost','root','','bidonme');
if(!isset($_SESSION['userEmail'])){
	echo "<script>window.open('RealLogin.php','_self')</script>";
}
else{
	echo "Welcome"." ".$_SESSION['userEmail'];
	
	
}
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
<div class="row">
  <div class="col-sm-3">
  	<label>Over View:</label>
  </div>
  <div class="col-sm-7">
  	<textarea type="text" name="" placeholder="" rows="4" style="width: 100%"></textarea>
  </div>
</div>
<br>



<div class="row">
 <div class="col-sm-3">
  	<label>First name:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="firstname" placeholder="First name">
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Last name:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="lastname" placeholder="Last name">
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Initials:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="initials" placeholder="a.b.c.">
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label>Current Job Title</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="curjobtitle" placeholder="Current Job Title" id="curjobtitle">
  </div>
</div>

  
  
<div class="row">
  <div class="col-sm-3">
  	<label>NIC:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="nic" placeholder="123456789v">
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Gender:</label>
  </div>
  <div class="col-sm-7">
  	<div class="form-check-inline">
      <label class="form-check-label" for="male">
        <input class="form-check-input" type="radio" name="gender" value="male" id="male" checked>Male
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="female">
        <input class="form-check-input" type="radio" name="gender" value="female" id="female">Female
      </label>
    </div>
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Date Of Birth:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="date" name="dob" placeholder="">
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Nationality:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="nationality" placeholder="Sri Lankan">
  </div>
</div>

  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Profile Picture:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="file" class="form-control-file border" name="file">
  </div>
</div>
  
  
<div class="row">
  <div class="col-sm-3">
  	<label>CivilStatus:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="civilStatus" placeholder="Single">
  </div>
  <div class="col-sm-2">
  	<input type="submit" name="" value="save">
  </div>
</div>
<br><br>
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
  	<input class="form-control mb-2 mr-sm-2" type="text" name="tpno" placeholder="07*-*******">
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Alt Telephone No:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="alttpno" placeholder="07*-*******">
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Address:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="" placeholder="Line 1">
  <input class="form-control mb-2 mr-sm-2" type="text" name="" placeholder="Line 2">
  <input class="form-control mb-2 mr-sm-2" type="text" name="" placeholder="City">
  <input class="form-control mb-2 mr-sm-2" type="text" name="" placeholder="Postal Code">
  </div>
</div>


<label><b>Social Media Links</b></label>
<div class="row">
  <div class="col-sm-3">
  	<label for="">FaceBook Link</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="fblink" placeholder="https://www.facebook.com/**********" id="fblink">
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="githublink">Github Link</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="githublink" placeholder="https://www.github.com/**********" id="githublink">
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="twitterlink">Twitter Link</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="twitterlink" placeholder="https://www.twitter.com/**********" id="twitterlink">
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="linkedinlink">Linkedin Link</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="linkedinlink" placeholder="https://www.linkedin.com/**********" id="linkedinlink">
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="weblink">Web Site Link</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="weblink" placeholder="https://www.**********.com" id="weblink">
  </div>
  <div class="col-sm-2">
  	<input type="submit" name="" value="save">
  </div>
</div>
<br><br>
   	
</form>    	
</div>
</div> 
   	
<div id="section3" class="">
<div>
	
	
</div>

<div id="formeducation">   	  	  	
<form action="" method="post">

<br>
<label><b>GCE Ordinary Level</b></label>
<div class="row">
  <div class="col-sm-3">
  	<label>Index No</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="olindexno" placeholder="*******" id="olindexno">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Total Results</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="olindexno" placeholder="A-1, B-2, C-3, S-3" id="olindexno">
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
  				<input class="form-control mb-2 mr-sm-2" type="text" name="olscience" placeholder="A" id="olscience">
  			</div>
        </td>
        <td>
        	<div>
  				<input class="form-control mb-2 mr-sm-2" type="text" name="olmaths" placeholder="A" id="olmaths">
  			</div>
        </td>
        <td>
        	<div>
  				<input class="form-control mb-2 mr-sm-2" type="text" name="olenglish" placeholder="A" id="olenglish">
  			</div>
        </td>
      </tr>
    </tbody>
  </table>
</div>


<br>
<label><b>GCE Advanced Level</b></label>
<div class="row">
  <div class="col-sm-3">
  	<label>Index No</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="olindexno" placeholder="*******" id="olindexno">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Total Results</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="olindexno" placeholder="A-1, B-2, C-1, S-0" id="olindexno">
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
  				<input class="form-control mb-2 mr-sm-2" type="text" name="alsub1" placeholder="Biology" id="alsub1">
  			</div>
        </th>
        <th class="col-sm-2">
        	<div>
  				<input class="form-control mb-2 mr-sm-2" type="text" name="alsub2" placeholder="Chemistry" id="alsub2">
  			</div>
        </th>
        <th class="col-sm-2">
        	<div>
  				<input class="form-control mb-2 mr-sm-2" type="text" name="alsub3" placeholder="Physics" id="alsub3">
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
  				<input class="form-control mb-2 mr-sm-2" type="text" name="alsub1result" placeholder="A" id="alsub1result">
  			</div>
        </td>
        <td>
        	<div>
  				<input class="form-control mb-2 mr-sm-2" type="text" name="alsub2result" placeholder="A" id="alsub2result">
  			</div>
        </td>
         <td>
        	<div>
  				<input class="form-control mb-2 mr-sm-2" type="text" name="alsub3result" placeholder="A" id="alsub3result">
  			</div>
        </td>
        <td>
        	<div>
  				<input class="form-control mb-2 mr-sm-2" type="text" name="alenglishresult" placeholder="A" id="alenglishresult">
  			</div>
        </td>
        <th>
        	<div>
  				<input type="submit" name="" value="save">
  			</div>
        </th>
      </tr>
    </tbody>
  </table>
</div>
<br><br>
</form>    	
</div>
</div>    
    
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
        <td>sample</td>
        <td>sample</td>
        <td>sample</td>
      </tr>
     
    </tbody>
  </table>
  <br>
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
        <td>sample</td>
        <td>sample</td>
        <td>sample</td>
      </tr>
     
    </tbody>
  </table>
  <br>
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
        <td>sample</td>
        <td>sample</td>
        <td>sample</td>
      </tr>
     
    </tbody>
  </table>
	
</div>
<div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#userhiedu">
          Add new Certificates/Diplomas/Degrees
        </a>
      </div>
      <div id="userhiedu" class="collapse" data-parent="#accordion">
        <div class="card-body">
              
<form action="" method="post">

<label><b>Certificates</b></label>
<div class="row">
  <div class="col-sm-3">
  	<label>Certificate Title</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="certitle" placeholder="Certificate in ****************" id="certitle">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Results</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="cerresult" placeholder="A+ / A / B / C *" id="cerresult">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Institute</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="cerins" placeholder="**************" id="cerins">
  </div>
</div>
<br>

	
<label><b>Diplomas</b></label>
<div class="row">
  <div class="col-sm-3">
  	<label>Diploma Title</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="diptitle" placeholder="Diploma in ****************" id="diptitle">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Results</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="dipresult" placeholder="A+ / A / B / C *" id="dipresult">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Institute</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="dipins" placeholder="**************" id="dipins">
  </div>
</div>
<br>		
				
<label><b>Degrees</b></label>
<div class="row">
  <div class="col-sm-3">
  	<label>Degree Title</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="degtitle" placeholder="****************" id="degtitle">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Degree Level</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="degresult" placeholder="2nd upper honours" id="degresult">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>University</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="degins" placeholder="University of **************" id="degins">
  </div>
  <div class="col-sm-2"><input type="submit" name="" value="save"></div>
</div>
<br>
<br><br>			
</form>    

        </div>
      </div>
    </div>
</div>
</div>
  	
<div id="section5" class="">
<div>
	
	
</div>
<div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#userworkxp">
          Add new Working Experience/Skills
        </a>
      </div>
      <div id="userworkxp" class="collapse" data-parent="#accordion">
        <div class="card-body">
             	
<form action="" method="post">


<label><b>Working Experience</b></label>
<div class="row">
  <div class="col-sm-3">
  	<label>Job Title</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="jobtitle" placeholder="Job Title" id="jobtitle">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Company</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="cmpny" placeholder="abcd (pvt) ltd" id="cmpny">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Time Period</label>
  </div>
  <div class="col-sm-3">
  	<input class="form-control mb-2 mr-sm-2" type="date" name="jobstdate" placeholder="" id="jobstdate">
  </div>
  <div class="col-sm-1">
  	<label>to</label>
  </div>
  <div class="col-sm-3">
  	<input class="form-control mb-2 mr-sm-2" type="date" name="jobenddate" placeholder="" id="jobenddate">
  </div>
  <div class="col-sm-2">
  	
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Discription</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="jobdiscrp" placeholder="Job Description" id="jobdiscrp">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Location</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="joblocation" placeholder="Colombo" id="joblocation">
  </div>
</div>
<label><b>Skills</b></label>
<div class="row">
  <div class="col-sm-3">
  	<label>Skill &amp; Percentage/Rate</label>
  </div>
  <div class="col-sm-4">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="skill1" placeholder="Communication" id="skill1">
  </div>
  <div class="col-sm-3">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="skillrate1" placeholder="Very Good" id="skillrate1">
  </div>
</div>
<label><b>Awards</b></label>
<div class="row">
  <div class="col-sm-3">
  	<label>Award Title</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="awrdttl" placeholder="Award Title" id="awrdttl">
  </div>
  <div class="col-sm-3">
  	<label>Award Description</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="awrddis" placeholder="Award Description" id="awrddis">
  </div>
</div>

</div>
<br>
	
</form>   	

        </div>
      </div>
    </div>
    
    
    </div>
  </div>    	
</div>    	
    	 		
</div>
</div>
<?php include('includes/footer.php'); ?>