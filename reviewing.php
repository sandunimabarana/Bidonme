<?php include('includes/headUpper.php'); ?>
<title></title>
<?php include('includes/headLower.php'); ?>

<body>

<?php include('includes/header.php'); ?>
    
    
    
        <?php
        $ser = "localhost";
        $user = "root";
        $pass = "";
        $db = "bidonme";
        $con = mysqli_connect($ser, $user, $pass) or die("connection failed");
        $selected = mysqli_select_db($con, $db) or die("Colud not selected database");
        ?>
    
        <?php
if(isset($_POST["sub"])){
    
	$conn =mysqli_connect('localhost','root','','bidonme');
	if(mysqli_query($conn,"INSERT INTO review(UserId,Description,ReviewRate) VALUES('".$_POST['SN']."','".$_POST['FB']."','".$_POST['rate']."')")){
            header("location:reviewing.php");		
	}
}
?>

<div class="row" id="maincont">
    <div class="col-sm-9">
    
        <form action="reviewing.php" method="post">
    	
    	<div class="form-group">
			  <label for="sel1">Select Rating Star:</label>
			  <select class="form-control" name="rate">
		    <option value="1">One</option>
                    <option value="2">Two<i class='fa fa-star'></i><i class='fa fa-star'></i></option>
                    <option value="3">Three<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></option>
                     <option value="4">Four<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></option>
                     <option value="5">Five<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></option>
 
			  </select>
			</div>
			
		  <div class="form-group">
			<label for="">Description</label>
			<textarea type="text" name="FB" placeholder="" rows="4" style="width: 100%"></textarea>
		  </div>
		  <button type="submit" class="btn btn-primary" name="sub">Submit</button>
		  
		</form>
    	<!--
   			user id1 -  sesson
   			user id2 - prev page	
   		-->	
    			
    				
    					
    						
    								
    </div>
<!--content end***************************************************************************************-->
<!--profile card**************************************************************************************-->
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
</div>


<?php include('includes/footer.php'); 