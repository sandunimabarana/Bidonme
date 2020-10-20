
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
    include 'index3edit.php';
         ?>  

        <div class="container">
            <div class="row">

                <?php


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
$query =mysqli_query($conn,"SELECT* from user where Email='$userEmail'");
$row=mysqli_fetch_array($query);
$userId=$row['UserId'];



//retrieve records
$results2= mysqli_query($conn,"SELECT * from certificate where UserId='$userId'");
$results3= mysqli_query($conn,"SELECT * from diploma where UserId='$userId'");
$results4= mysqli_query($conn,"SELECT * from degree where UserId='$userId'");
$results5= mysqli_query($conn,"SELECT * from workingxp where UserId='$userId'");
$results6= mysqli_query($conn,"SELECT * from skills where UserId='$userId'");
$results7= mysqli_query($conn,"SELECT * from awards where UserId='$userId'");




                //certificate details
                $CT = $_GET['CT'];
                $CR = $_GET['CR'];
                $CI = $_GET['cerins'];

                //diploma details
                $DIPT = $_GET['DIPT'];
                $DIPR = $_GET['DIPR'];
                $DI = $_GET['dipins'];
                
                //degree details
                $DEGT = $_GET['DEGT'];
                $DEGL = $_GET['DEGL'];
                $DEGI = $_GET['degins'];


                //working experience
                $Title = $_GET['jobtitle'];
                $CO = $_GET['CO'];
                $SD = $_GET['SD'];
                $ED = $_GET['ED'];
                $LO = $_GET['LO'];
                $DES = $_GET['DES'];
               
                //skills
                $ST = $_GET['ST'];
                $SL = $_GET['SL'];

                 //awards
                $AT = $_GET['AT'];
                $AD = $_GET['AD'];


                

$sql1= "UPDATE certificate SET CerTitle='$CT', CerResult='$CR',InsName='$CI' where UserId='$userId'";
$sql2= "UPDATE diploma SET DipTitle='$DIPT',DipResult='$DIPR' ,InsName='$DI' where UserId='$userId'";
$sql3 = "UPDATE degree SET DegreeTitle='$DEGT',DegreeLevel='$DEGL',InsName='$DEGI' where UserId='$userId'";
$sql4 = "UPDATE workingxp SET Company='$CO',StartDate='$SD',EndDate='$ED',Location='$LO',Description='$DES',JobTitle='$Title' where UserId='$userId'";
$sql5= "UPDATE skills SET SkillTitle='$ST',skillLevel='$SL' where UserId='$userId'";
$sql6= "UPDATE awards SET AwardTitle='$AT',Description='$AD' where UserId='$userId'";
		

$conn->query($sql2);
$conn->query($sql3);
$conn->query($sql4);
$conn->query($sql5);
$conn->query($sql6);
$conn->query($sql1);

$conn->close(); 


                
                ?>

            </div>
        </div>
    </div>
</div>
</body>
</html>

