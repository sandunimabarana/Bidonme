<?php
session_start();

if(!isset($_SESSION['userEmail'])){
  echo "<script>window.open('index2.php','_self')</script>";
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
<form action="view.php" method="get">
<br>
<label><b>User Details</b></label>  
<div class="row">
  <div class="col-sm-3">
  	<label>Over View:</label>
  </div>
  <div class="col-sm-7">
  	<textarea type="text" name="over" placeholder="" rows="4" style="width: 100%"></textarea>
  </div>
</div>
<br>



<div class="row">
 <div class="col-sm-3">
  	<label>First name:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="fn" value="" placeholder="First name" required="required">
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Last name:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="ln" placeholder="Last name">
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Initials:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="in" placeholder="a.b.c." required="required">
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label>Current Job Title</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="cj" placeholder="Current Job Title" id="curjobtitle" required="required">
  </div>
</div>

  
  
<div class="row">
  <div class="col-sm-3">
  	<label>NIC:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="nic" placeholder="123456789v" required="required">
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
  	<input class="form-control mb-2 mr-sm-2" type="date" name="dob" placeholder="" required="required">
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Nationality:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="nation" placeholder="Sri Lankan">
  </div>
</div>

  
  

  
<div class="row">
  <div class="col-sm-3">
  	<label>CivilStatus:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="civil" placeholder="Single">
  </div>
  
</div>
<br>
<label><b>Contact Info</b></label> <br> 
<div class="row">
  <div class="col-sm-3">
  	<label>Telephone No:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="tp" placeholder="07*-*******" required="required">
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Alt Telephone No:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="tpAlt" placeholder="07*-*******">
  </div>
</div>


  
  
<div class="row">
  <div class="col-sm-3">
  	<label>Address:</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="ad1" placeholder="Line 1">
  <input class="form-control mb-2 mr-sm-2" type="text" name="ad2" placeholder="Line 2">
  <input class="form-control mb-2 mr-sm-2" type="text" name="ad3" placeholder="City">
  <input class="form-control mb-2 mr-sm-2" type="text" name="postal" placeholder="Postal Code">
  </div>
</div>
<br>

<label><b>Social Media Links</b></label><br>
<div class="row">
  <div class="col-sm-3">
  	<label for="">FaceBook Link</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="fb" placeholder="https://www.facebook.com/**********" id="fblink">
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="githublink">Github Link</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="git" placeholder="https://www.github.com/**********" id="githublink">
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="twitterlink">Twitter Link</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="tw" placeholder="https://www.twitter.com/**********" id="twitterlink">
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="linkedinlink">Linkedin Link</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="link" placeholder="https://www.linkedin.com/**********" id="linkedinlink">
  </div>
</div>


<div class="row">
  <div class="col-sm-3">
  	<label for="weblink">Web Site Link</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="web" placeholder="https://www.**********.com" id="weblink">
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
  	<input class="form-control mb-2 mr-sm-2" type="text" name="OLindex" placeholder="*******" id="olindexno">
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  	<label>Total Results</label>
  </div>
  <div class="col-sm-7">
  	<input class="form-control mb-2 mr-sm-2" type="text" name="TR" placeholder="A-1, B-2, C-3, S-3" id="olindexno">
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
  				<input class="form-control mb-2 mr-sm-2" type="text" name="sci" placeholder="A" id="olscience">
  			</div>
        </td>
        <td>
        	<div>
  				<input class="form-control mb-2 mr-sm-2" type="text" name="maths" placeholder="A" id="olmaths">
  			</div>
        </td>
        <td>
        	<div>
  				<input class="form-control mb-2 mr-sm-2" type="text" name="eng" placeholder="A" id="olenglish">
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
  	<input class="form-control mb-2 mr-sm-2" type="text" name="ALindex" placeholder="*******" id="olindexno">
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
  				<input class="form-control mb-2 mr-sm-2" type="text" name="sub1Name" placeholder="Biology" id="alsub1">
  			</div>
        </th>
        <th class="col-sm-2">
        	<div>
  				<input class="form-control mb-2 mr-sm-2" type="text" name="sub2Name" placeholder="Chemistry" id="alsub2">
  			</div>
        </th>
        <th class="col-sm-2">
        	<div>
  				<input class="form-control mb-2 mr-sm-2" type="text" name="sub3Name" placeholder="Physics" id="alsub3">
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
  				<input class="form-control mb-2 mr-sm-2" type="text" name="sub1" placeholder="A" id="alsub1result">
  			</div>
        </td>
        <td>
        	<div>
  				<input class="form-control mb-2 mr-sm-2" type="text" name="sub2" placeholder="A" id="alsub2result">
  			</div>
        </td>
         <td>
        	<div>
  				<input class="form-control mb-2 mr-sm-2" type="text" name="sub3" placeholder="A" id="alsub3result">
  			</div>
        </td>
        <td>
        	<div>
  				<input class="form-control mb-2 mr-sm-2" type="text" name="sub4" placeholder="A" id="alenglishresult">
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
     
</div>    	

<?php include('includes/footer.php'); ?>
