<?php
session_start();
$dbConnection=mysqli_connect('localhost','root','','bidonme');
if(!isset($_SESSION['userEmail'])){
  echo "<script>window.open('RealLogin1.php','_self')</script>";
}
else{
  echo "Welcome"." ".$_SESSION['userEmail'];
  
  
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bidonme";


$id;
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

$sql = "SELECT* FROM images where UserId='$userId'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$id=$row['id'];

if($id>0){

//($row = mysqli_fetch_array($result));
echo "<div id='img_div'>";
echo "<img src='images/".$row['image']."'>";
echo "</div>";

} 

else{


echo "<div id='img_div'>";
echo "<img src='i/img_avatar1.png'>";
echo "</div>";


}

?>