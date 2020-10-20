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

<body>
<?php include('includes/header.php'); ?>

<div class="row" id="maincont">
    <div class="col-sm-9">
    	<div class="container mt-3" id="post" style="font-size: 14px">
   		
  			<div class="media border p-3 border border-right-0 border-left-0">
    			<img src="i/img_avatar1.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    			<div class="media-body">
					<h4><a id="link2" href="a########################">Title :</a> &nbsp;<small><i>Posted on date</i></small></h4>
      				<p style="text-align: justify">
      				Description Description Description Description Description Description Description Description 
      				Description Description Description Description Description Description Description Description</p>
      				<div class="row">
						<div class="col-sm-6">
							<p><b>Location</b></br>
							<b>Category</b></br>
						<b><i><strong>Budget &nbsp;:&nbsp; Max - Min</strong></i></b></p>
						</div>
      					<div class="col-sm-6" style="text-align: right; padding-right: 4%">
      						
      						<a data-toggle="modal" data-target="#myModal"><b><i>Report</i></b></a>
      					</div>
					</div>
    			</div>
  			</div>
   		</div>
   	
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-body">
          <form action="">
    			<div class="form-group">
      				<label for="">Description:</label>
      					<textarea type="text" rows="5" class="form-control" id="" placeholder="Description" name=""></textarea>
    			</div>
    
    			<button type="submit" class="btn btn-primary">Report</button>
		   </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
   		
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

<?php include('includes/footer.php'); ?>