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
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
   		
    </div>
<!--content end***************************************************************************************-->
<!--profile card**************************************************************************************-->
  <?php include('includes/sidebarUser.php'); ?>
</div>

<?php include('includes/footer.php'); ?>