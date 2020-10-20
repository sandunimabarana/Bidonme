<?php
session_start();

if(!isset($_SESSION['userEmail'])){
  echo "<script>window.open('RealLogin1.php','_self')</script>";
}
else{
  echo "Welcome"." ".$_SESSION['userEmail'];
  
  
}

$msg = "";

//if upload button is pressed
if(isset($_POST['upload'])){

	//path to store the uploaded image
	$target = "images/".basename($_FILES['image']['name']);

	//connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bidonme";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
				
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$userEmail = $_SESSION['userEmail'];
$query =mysqli_query($conn,"select* from user where Email='$userEmail'");
$row=mysqli_fetch_array($query);
$userId=$row['UserId'];

//get all the submitted data from the form

$image = $_FILES['image']['name'];

$sql= "INSERT INTO images(image,UserId) VALUES ('$image','$userId')";
mysqli_query($conn,$sql);
  
//move the uploaded image into images folder
if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
	//$msg = "Image uploaded successfully";
	            echo "<script>alert('Image uploaded successfully')</script>";
}
else{
	//$msg ="There was a problem uploading image";
	            echo "<script>alert('There was a problem uploading image')</script>";
}

}

?>


<?php include('includes/headUpper.php'); ?>
<title></title>
<?php include('includes/headLower.php'); ?>

<body>
<?php include('includes/header.php'); ?>
<div id="content">

	

<form action="" method="post" enctype="multipart/form-data">

	<input type="file" name="image" value="1000000">
	<input type="submit" name="upload" value="upload image">

</form>


</div>
<?php include('includes/footer.php'); ?>
 