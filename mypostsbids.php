<?php
session_start();
$dbConnection=mysqli_connect('localhost','root','','bidonme');
if(!isset($_SESSION['userEmail'])){
	echo "<script>window.open('mypostsbids.php','_self')</script>";
}
else{
	echo "Welcome"." ".$_SESSION['userEmail'];
	
	
}
?>
<?php include('includes/headUpper.php'); ?>
<title>My Post Bids</title>
<?php include('includes/headLower.php'); ?>

<body>

<?php
$userEmial = $_SESSION['userEmail'];
$query=mysqli_query($dbConnection,"select * from user where Email='$userEmial'");
$row= mysqli_fetch_array($query);
$userId = $row['UserId'];


?>
 <?php
 
 //$UserId=$_SESSION['userID']; 
 
           $usernm   = "root";
            $passwd   = "";
            $host     = "localhost";
            $database = "bidonme";


           $con =  mysqli_connect($host,$usernm,$passwd);

            mysqli_select_db($con ,$database);

            $sql    = "SELECT * FROM vacancy where UserId='$userId'";
			
            $result = mysqli_query($con,$sql);
			    ?>
           


<?php include('includes/header.php'); ?>

<div class="row" id="maincont">
    <div class="col-sm-9">
	
	<?php
	 while ($row = mysqli_fetch_array($result))
            {
			$vacancyId = $row['vacancyId'];
			$_SESSION['vec']=$vacancyId;
                  ?>
           
    	<div class="container mt-3" id="post" style="font-size: 14px">
   		
  			<div class="media border p-3 border border-right-0 border-left-0">
    			<img src="i/img_avatar1.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    			<div class="media-body">
					<h4><a id="link2" href="a########################">Title :<?php echo $row ['vacancyTitle']; ?></a> &nbsp;</h4>
      				<p style="text-align: justify"><?php echo $row ['Description']; ?>
      				</p>
      				<div class="row">
						<div class="col-sm-6">
							<p><b>Location:<?php echo $row ['Location']; ?></b></br>
							<b>Category:<?php echo $row ['CategoryId']; ?></b></br>
						<b><i><strong>Budget &nbsp;:&nbsp; Max - Min:<?php echo $row ['MaxBudget']; ?>-<?php echo $row ['MaxBudget']; ?></strong></i></b></p>
						</div>
      					<div class="col-sm-6" style="text-align: right; padding-right: 4%">
      						
							<a href="MyVBids.php?hello=true">Bids</a>
							
      						
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





