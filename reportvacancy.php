<?php
session_start();
$dbConnection=mysqli_connect('localhost','root','','bidonme');
if(!isset($_SESSION['userEmail'])){
	echo "<script>window.open('reportvacancy.php','_self')</script>";
}
else{
	echo "Welcome"." ".$_SESSION['userEmail'];
	
	
}

?>


<?php include('includes/headUpper.php'); ?>
<title></title>
<?php include('includes/headLower.php'); ?>


<body>
<?php
$userEmial = $_SESSION['userEmail'];
$query=mysqli_query($dbConnection,"select * from user where Email='$userEmial'");
$row= mysqli_fetch_array($query);
$userId = $row['UserId'];


?>

<?php
$userEmial = $_SESSION['userEmail'];
$query=mysqli_query($dbConnection,"select * from vacancy");
$row= mysqli_fetch_array($query);
$vecid = $row['vacancyId'];


?>





<?php include('includes/header.php'); ?>

<div class="row" id="maincont">
    <div class="col-sm-9">
	

    	<div class="container mt-3" id="post" style="font-size: 14px">
		
			
    	
			
   		</div>
		
 <form action="reportvacancy.php" method="post">
   
    <div class="form-group">
      <label for="">Description:</label>
      <textarea type="text" rows="5" class="form-control" id="" placeholder="Description" name="description"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary" name="submit1">Report</button>
</form>
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
   		
    </div>
<!--content end***************************************************************************************-->
<!--profile card**************************************************************************************-->
  <?php include('includes/sidebarUser.php'); ?>
</div>

<?php include('includes/footer.php'); ?>






<?php

	if(isset($_POST['submit1'])){

	mysqli_select_db($dbConnection,"bidonme");
	$count=0;
	$description=$_POST['description'];
	
	
	echo $Report;
	
	
	if($count>0){
		echo "<script>alert('Error with your entered records')</script>";
	}else{
		
		$query="INSERT INTO reportedvacancy(vacancyId,UserId,Description) VALUES ('".$vecid ."','".$userId."','".$description."')";
		$run = mysqli_query($dbConnection,$query);
		
		if($run){
			echo "<script>alert('Record inserted Successfull')</script>";
		}
	
	
}
}
?>