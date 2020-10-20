<?php
session_start();
$dbConnection=mysqli_connect('localhost','root','','bidonme');
if(!isset($_SESSION['userEmail'])){
	echo "<script>window.open('MyVBids.php','_self')</script>";
}
else{
	echo "Welcome"." ".$_SESSION['userEmail'];
	
	
}
?>


<?php include('includes/headUpper.php'); ?>
<title>My Vacancy Bids</title>
<?php include('includes/headLower.php'); ?>


<body>
<?php
$userEmial = $_SESSION['userEmail'];
$query=mysqli_query($dbConnection,"select * from user where Email='$userEmial'");
$row= mysqli_fetch_array($query);
$userId = $row['UserId'];


?>

<?php
//$userEmial = $_SESSION['userEmail'];
$query=mysqli_query($dbConnection,"select * from user");
$row= mysqli_fetch_array($query);
$user = $row['UserId'];


?>

  <?php
 
 //$VavancyId=$_GET['vacancyId']; 
 echo $_SESSION['vec'];
 $ad=$_SESSION['vec'];
           $usernm   = "root";
            $passwd   = "";
            $host     = "localhost";
            $database = "bidonme";


           $con =  mysqli_connect($host,$usernm,$passwd);

            mysqli_select_db($con ,$database);

            $sql    = "SELECT FirstName,LastName,Description,Price,TpNo FROM userprofile,bid where userprofile.UserId =bid.UserId AND vacancyId='$ad'";
			
            $result = mysqli_query($con,$sql);
			    ?>
           
           

<?php include('includes/header.php'); ?>

<div class="row" id="maincont">
    <div class="col-sm-9">
	
	<?php
	 while ($row = mysqli_fetch_array($result))
            {
			
                  ?>
           
    	<div class="container mt-3" id="post" style="font-size: 14px">
   		
  			<div class="media border p-3 border border-right-0 border-left-0">
    			<img src="i/img_avatar1.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    			<div class="media-body">
					<h4><a id="link2" href="userdetailsview.php?id=<?php echo $user?>">User  :<?php echo $row ['FirstName']; ?><?php echo $row ['LastName']; ?></a> &nbsp;</h4>
      				<p style="text-align: justify"><?php echo $row ['Description'];?>
      				</p>
      				<div class="row">
						<div class="col-sm-6">
							
						<b><i><strong>Price &nbsp;:&nbsp; <?php echo $row ['Price']; ?></strong></i></b></p>
						</div>
      					<div class="col-sm-6" style="text-align: right; padding-right: 4%">
      						<a href="sms.php?id=<?php echo $row['TpNo']?>" >Send message</a>
							
      						
      					</div>	
					</div>
    			</div>
  			</div>
   		</div>
    	

    	
    	
    <?php
    }
            ?>	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
   		
    </div>
<!--content end***************************************************************************************-->
<!--profile card**************************************************************************************-->
 <?php include('includes/sidebarUser.php'); ?>
</div>

<?php include('includes/footer.php'); ?>







