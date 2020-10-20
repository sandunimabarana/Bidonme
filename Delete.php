<?php
session_start();
$dbConnection=mysqli_connect('localhost','root','','bidonme');
if(!isset($_SESSION['userEmail'])){
	echo "<script>window.open(Delete.php','_self')</script>";
}
else{
	
	
	
}
?>


<?php
echo $_SESSION['vec'];

	function myfunction(){
	//$vecid=$_GET['vacancyId'];
	
			$usernm   = "root";
            $passwd   = "";
            $host     = "localhost";
            $database = "bidonme";


           $con =  mysqli_connect($host,$usernm,$passwd);

            mysqli_select_db($con ,$database);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 


// sql to delete a record
	
	
	$ad=$_SESSION['vec'];
	
	//$sql = " where vacancyId='$ad'";
	$sql    = "DELETE vacancy,reportedvacancy FROM vacancy INNER JOIN reportedvacancy where vacancy.vacancyId =reportedvacancy.vacancyId AND vacancy.vacancyId='$ad'";
	

	if ($con->query($sql) === TRUE) {
		echo "<script>alert('Delete fake vacancy')</script>";
	
	
	} else {
		echo "Error deleting record: " . $con->error;
	}

$con->close();
	}
	
	
	
		
	
if(isset($_GET['hello'])){
	myfunction();
	// myfunction2();
	
}

?>
