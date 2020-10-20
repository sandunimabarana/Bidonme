<?php
session_start();

if(!isset($_SESSION['userEmail'])){
	echo "<script>window.open('view.php','_self')</script>";
}
else{
	echo "Welcome"." ".$_SESSION['userEmail'];
	
	
}
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
 <?php
    include 'index2.php';
    ?>

        <div class="container">
            <div class="row">

                <?php
				
				
				
				
                 //over
                  $over = $_GET['over'];
                //basic details
                $fn = $_GET['fn'];
                $ln = $_GET['ln'];
                $in = $_GET['in'];
                $cj = $_GET['cj'];
                $nic = $_GET['nic'];
                
                $gender=$_GET['gender'];
                
                $dob = $_GET['dob'];
                $nation = $_GET['nation'];
                //$file = $_GET['file'];
                $civil = $_GET['civil'];
                
                //contact Details
                $tp = $_GET['tp'];
                $tpAlt = $_GET['tpAlt'];
                
                $add1 = $_GET['ad1'];
                $add2 = $_GET['ad2'];
                $add3 = $_GET['ad3']; 
                $postal = $_GET['postal'];
                
               // $email = $_GET['email'];
                
                //social media
                $fb = $_GET['fb'];
                $git = $_GET['git'];
                $tw = $_GET['tw'];
                $link = $_GET['link'];
                $web = $_GET['web'];
                
                
                //EDUCATION
                //OL
                $OLindex = $_GET['OLindex'];
                $TR = $_GET['TR'];
                $maths = $_GET['maths'];
                $sci= $_GET['sci'];
                $eng = $_GET['eng'];
                
            
                //AL
                  $ALindex = $_GET['ALindex'];
               
                $subject_1 = $_GET['sub1'];
                $subject_2 = $_GET['sub2'];
                $subject_3 = $_GET['sub3'];
               // $AL_Eng = $_GET['ALeng'];
                
                $subject_1Name = $_GET['sub1Name'];
                $subject_2Name = $_GET['sub2Name'];
                $subject_3Name = $_GET['sub3Name'];
                $AL_Eng_Result = $_GET['sub4'];

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
				
				
$sql = "INSERT INTO userprofile(FirstName, LastName, Initials, CurrentJob, NIC, Gender, DOB, Nationality,CivilStatus, "
        . "TpNo, AltTpNo,AddressL1,AddressL2, AddressL3, PostalCode, OlIndexNo,OlEnglish, OlMaths, "
        . "OlScience, OlResult, AlIndexNo, AlSub1,Alsub1Result, AlSub2, Alsub2Result,AlSub3, "
        . "Alsub3Result, AlEnglishResult, FbLink, GithubLink,LinkedinLink, TwitterLink,WebLink, OverView,UserId) "
        . "VALUES('".$fn."','".$ln."','".$in."','".$cj."','".$nic."','".$gender."','".$dob."','".$nation."','".$civil."','".$tp."','".$tpAlt."','".$add1."','".$add2."','".$add3."','".$postal."','".$OLindex."',"
        . "'".$eng."','".$maths."','".$sci."','".$TR."','".$ALindex."','".$subject_1Name."','".$subject_1."','".$subject_2Name."','".$subject_2."','".$subject_3Name."','".$subject_3."','". $AL_Eng_Result."',"
        . "'".$fb."','".$git."','".$link."','".$tw."','".$web."','".$over."','".$userId."')";

 if (mysqli_query($conn, $sql)) {
            echo '<script language="javascript">';
            echo 'window.alert("Records created successfully")'; 
            echo '</script>';
          
        } else {
            echo '<script language="javascript">';
            echo 'alert("Something going wrong")';
            echo '</script>';
        }

       // echo "<a href='index3.php'></a>";

$conn->close(); 


                
                ?>

            </div>
        </div>
    </div>
</div>
</body>
</html>

