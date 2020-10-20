<?php
session_start();
$dbConnection=mysqli_connect('localhost','root','','bidonme');
if(!isset($_SESSION['userEmail'])){
	echo "<script>window.open(AdminPanal.php','_self')</script>";
}
else{
	
	
	
}
?>


<?php
$userEmial = $_SESSION['userEmail'];
$query=mysqli_query($dbConnection,"select * from vacancy");
$row= mysqli_fetch_array($query);
$vecid = $row['vacancyId'];


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Panal</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<link href="css/c1.css" rel="stylesheet" type="text/css">
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<style>
	#head{
		background-color: #000033;
		color: white;
		padding: 10px;
		padding-left: 70px;
	}		
</style>
</head>

<body>

<?php
           $usernm   = "root";
            $passwd   = "";
            $host     = "localhost";
            $database = "bidonme";


           $con =  mysqli_connect($host,$usernm,$passwd);

            mysqli_select_db($con ,$database);

          
			$sql = "SELECT * FROM reportedvacancy";
           
			    ?>




<div class="row">
	<div class="col-sm-12" id="head">
		<h2>Admin Panal</h2>
	</div>
</div>


<div class="row">
	<div class="col-sm-9">
	<div>
	
		  
		  
		    <table class="table">
            <?php
            $result = mysqli_query($con,$sql);

            if ($result->num_rows > 0) {
                // output data of each row
               while ($row = mysqli_fetch_array($result)) {

					$Description = $row["Description"];
					$vacancyId = $row['vacancyId'];
			$_SESSION['vec']=$vacancyId;
		
                    echo "	<tr>
                				<td><h4>  Description : " . $Description . "</h4></td><br>
								<td><center><a href='Delete.php?hello=true'>Delete</a></center></td>
							</tr>";
                }
            } else {
                echo "0 results";
            }
            $con->close();
            ?>



        </table>
		  
		  
		  
		  
		  
  	</div>
	</div>
	<div class="col-sm-3">
		<div>
			<a href="vacancydelete">Delete expired vacancies and Advertisements</a>		
		</div>
	</div>
</div>

</body>
</html>


