<?php

session_start();
if(!isset($_SESSION['userEmail'])){
  echo "<script>window.open('index3.php','_self')</script>";
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


<div id="formuserdetails">
<form action="view1.php" method="get">
<br>

<div id="">
    <div class="card">
      
        <p class="card-link" data-toggle="collapse" href="#userhiedu">
          Add new Certificates/Diplomas/Degrees
        </p>
      

        <div class="card-body">
  

<label><b>Certificates</b></label>
<div class="row">
  <div class="col-sm-3">
  	<label>Certificate Title</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="CT" placeholder="Certificate in ****************" id="certitle">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Results</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="CR" placeholder="A+ / A / B / C *" id="cerresult">
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
  	<input class="form-control mb-2 mr-sm-2" type="text" name="DIPT" placeholder="Diploma in ****************" id="diptitle">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Results</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="DIPR" placeholder="A+ / A / B / C *" id="dipresult">
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
  	<input class="form-control mb-2 mr-sm-2" type="text" name="DEGT" placeholder="****************" id="degtitle">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Degree Level</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="DEGL" placeholder="2nd upper honours" id="degresult">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>University</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="degins" placeholder="University of **************" id="degins">
 
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
  	<input class="form-control mb-2 mr-sm-2" type="text" name="CO" placeholder="abcd (pvt) ltd" id="cmpny">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Time Period</label>
  </div>
  <div class="col-sm-3">
  	<input class="form-control mb-2 mr-sm-2" type="date" name="SD" placeholder="" id="jobstdate">
  </div>
  <div class="col-sm-1">
  	<label>to</label>
  </div>
  <div class="col-sm-3">
  	<input class="form-control mb-2 mr-sm-2" type="date" name="ED" placeholder="" id="jobenddate">
  </div>
  <div class="col-sm-2">
  	
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Discription</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="DES" placeholder="Job Description" id="jobdiscrp">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Location</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="LO" placeholder="Colombo" id="joblocation">
  </div>
</div>
<label><b>Skills</b></label>
<div class="row">
  <div class="col-sm-3">
  	<label>Skill &amp; Percentage/Rate</label>
  </div>
  <div class="col-sm-4">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="ST" placeholder="Communication" id="skill1">
  </div>
  <div class="col-sm-3">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="SL" placeholder="Very Good" id="skillrate1">
  </div>
</div>
<label><b>Awards</b></label>
<div class="row">
  <div class="col-sm-3">
  	<label>Award Title</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="AT" placeholder="Award Title" id="awrdttl">
  </div>
  <div class="col-sm-3">
  	<label>Award Description</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="AD" placeholder="Award Description" id="awrddis">
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