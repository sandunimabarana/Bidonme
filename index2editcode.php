
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
    include 'index2edit.php';
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
$results1= mysqli_query($conn,"SELECT * from userprofile where UserId='$userId'");

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
				
$UserProId=0;


$sql="UPDATE  userprofile 
        SET FirstName='$fn', LastName='$ln',Initials='$in', CurrentJob='$cj',NIC='$nic',
             Gender='$gender',DOB='$dob', Nationality='$nation',CivilStatus='$civil',
             TpNo='$tp', AltTpNo='$tpAlt',
             AddressL1='$add1', AddressL2='$add2',AddressL3='$add3', PostalCode='$postal',
             OlIndexNo='$OLindex', OlEnglish='$eng',OlMaths='$maths', OlScience='$sci',OlResult='$TR',
              AlIndexNo='$ALindex',
              AlSub1='$subject_1Name', Alsub1Result='$subject_1',
              AlSub2='$subject_2Name', Alsub2Result='$subject_2',
              AlSub3='$subject_3Name',Alsub3Result='$subject_3', 
              AlEnglishResult='$AL_Eng_Result',
              FbLink='$fb', GithubLink='$git',LinkedinLink='$link', TwitterLink='$tw',WebLink='$web', OverView='$over' where UserId='$userId' 
              ";

  


 if (mysqli_query($conn, $sql)) {
            echo '<script language="javascript">';
            echo 'window.alert("Records updated successfully")'; 
            echo '</script>';
          
        } else {
            echo '<script language="javascript">';
            echo 'alert("Something going wrong")';
            echo '</script>';
        }

$conn->close(); 


                
                ?>

            </div>
        </div>
    </div>
</div>
</body>
</html>

