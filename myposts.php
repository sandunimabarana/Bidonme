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
      						<a href="mypostsbids.php" type="button" class="btn btn-primary btn-lg" id="btn2" style="width: 130px">Bids</a></br>
      						<a data-toggle="modal" data-target="#myModal"><b><i>Report</i></b></a>
      					</div>	
					</div>
    			</div>
  			</div>
   		</div>
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
   		
    </div>
<!--content end***************************************************************************************-->
<!--profile card**************************************************************************************-->
 <?php include('includes/sidebarUser.php'); ?>

</div>


<?php include('includes/footer.php'); ?>