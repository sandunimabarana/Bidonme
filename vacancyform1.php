<?php
session_start();
$dbConnection=mysqli_connect('localhost','root','','bidonme');
if(!isset($_SESSION['userEmail'])){
	echo "<script>window.open('vacancyform1.php','_self')</script>";
}
else{
	echo "Welcome"." ".$_SESSION['userEmail'];
	
	
}
?>


<?php include('includes/headUpper.php'); ?>
<title>Hire and Rent</title>
<?php include('includes/headLower.php'); ?>

<body>

<?php include('includes/header.php'); ?>

<div class="row" id="maincont">
    <div class="col-sm-9">
    
    	<form action="vacancyform1.php" method="post">
  			<div class="form-group">
    			<label for="">Title:</label>
    			<input type="text" name="title" class="form-control" id="">
		  	</div>
		  	<div class="form-group">
				<label for="">Description :</label>
				<textarea class="form-control" name="description" rows="5" id=""></textarea>
		  	</div>
		  	<div class="form-group">
				<label for="">MinBudget  :</label>
				<input type="number" name="minbudget" class="form-control" id="">
		  	</div>
		  	<div class="form-group">
				<label for="">MaxBudget :</label>
				<input type="nember" name="maxbudget" class="form-control" id="">
		  	</div>
		  	<div class="form-group">
				<label for="">Location :</label>
				<input type="text" name="location" class="form-control" id="">
		  	</div>
			<div>
			<label for="">Vacancy Type :</label>
			    <select name="jobs" class="custom-select mb-3">
					<option selected>Tempory Job</option>
					<option value="Permanent Job">Permanent Job</option>
					<option value="PartTime Job">PartTime Job</option>
					<option value="Hire or Rent">Hire or Rent</option>
    </select>
			
			</div>
		  
		  	<div>
			<label for="">Category :</label>
			    <select name="category" class="custom-select mb-3">
					<option selected>Agriculture</option>
					<option value="Plantation and Livestock">Plantation and Livestock</option>
					<option value="Art Design and Media(Visual and Performing)">Art Design and Media(Visual and Performing)</option>
					<option value="Automobile Repair and Maintenance">Automobile Repair and Maintenance</option>
					<option value="Building and Construction">Building and Construction</option>
					<option value="Electrical, Electronics and Telecommunication">Electrical, Electronics and Telecommunication</option>
					<option value="Finance Banking and Management">Finance Banking and Management</option>
					<option value="Food Technology">Food Technology</option>
					<option value="Gem and Jewellery">Gem and Jewellery</option>
					<option value="Heavy Vehicles Operations">Heavy Vehicles Operations</option>
					<option value="Hotel and Tourism">Hotel and Tourism</option>
					<option value="Human Resource Management">Human Resource Management</option>
					<option value="Information Communication and Multimedia Technology">Information Communication and Multimedia Technology</option>
					<option value="Languages">Languages</option>
					<option value="Leather and Footwear">Leather and Footwear</option>
					<option value="Marine and Nautical Science">Marine and Nautical Science</option>
					<option value="Mechatronics Technology">Mechatronics Technology</option>
					<option value="Medical and Health Science">Medical and Health Science</option>
					<option value="Metal and Light Engineering">Metal and Light Engineering</option>
					<option value="Office Management">Office Management</option>
					<option value="Personal and Community Development">Personal and Community Development</option>
					<option value="Printing and Packaging">Printing and Packaging</option>
					<option value="Refrigeration and Air Conditioning">Refrigeration and Air Conditioning</option>
					<option value="Textile and Garment">Textile and Garment</option>
					<option value="Wood Related">Wood Related</option>
    </select>
			
			</div>
		  
		  	<button type="submit" name="submit" class="btn btn-primary" style="width: 100%">Post Vacancy</button>
		</form>

    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
   		
    </div>
<!--content end***************************************************************************************-->
<!--profile card**************************************************************************************-->
  <?php include('includes/sidebarUser.php'); ?>
</div>

<?php include('includes/footer.php'); ?>




<?php
$userEmial = $_SESSION['userEmail'];
$query=mysqli_query($dbConnection,"select * from user where Email='$userEmial'");
$row= mysqli_fetch_array($query);
$userId = $row['UserId'];


?>

<?php

	if(isset($_POST['submit'])){

	mysqli_select_db($dbConnection,"bidonme");
	$count=0;
	$Title=$_POST['title'];
	$description=$_POST['description'];
	$minbudget=$_POST['minbudget'];
	$maxbudget=$_POST['maxbudget'];
	$Location=$_POST['location'];
	$jobs=$_POST['jobs'];
	$category=$_POST['category'];
	
	$PDATE=date('y-m-d');
	$EDATE=date('y-m-d', strtotime(date('y-m-d', strtotime($PDATE)).'+21 days'));
	
	
	
	if($count>0){
		echo "<script>alert('Error with your entered records')</script>";
	}else{
		
		$query="INSERT INTO vacancy(vacancyTitle,Description,MinBudget,MaxBudget,Location,UserId,CategoryId,VacancyType,pdate,edate) VALUES ('$Title','$description','$minbudget','$maxbudget','$Location','$userId','$category','$jobs','$PDATE','$EDATE')";
		$run = mysqli_query($dbConnection,$query);
		
		if($run){
			echo "<script>alert('Record inserted Successfull')</script>";
		}
	
	
	
}
}
?>