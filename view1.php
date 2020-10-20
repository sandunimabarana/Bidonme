

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
    include 'userdetailsuser.php';
         ?>  

        <div class="container">
            <div class="row">

                <?php
                 
                

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
				
				
$sql1= "INSERT INTO certificate(CerTitle,CerResult,UserId,InsName) VALUES ('$CT','$CR','$userId','$CI')";
$sql2= "INSERT INTO diploma(DipTitle,UserId,DipResult,InsName) VALUES ('$DIPT','$userId','$DIPR','$DI')";
$sql3 = "INSERT INTO degree(DegreeTitle,UserId,DegreeLevel,InsName) VALUES ('$DEGT','$userId','$DEGL','$DEGI')";
$sql4 = "INSERT INTO workingxp(Company,StartDate,EndDate,Location,Description,UserId,JobTitle) VALUES ('$CO','$SD','$ED','$LO','$DES','$userId','$Title')";
$sql5= "INSERT INTO skills(SkillTitle,UserId,skillLevel) VALUES ('$ST','$userId','$SL')";
$sql6= "INSERT INTO awards(AwardTitle,Description,UserId) VALUES ('$AT','$AD','$userId')";


		
$conn->query($sql1);
$conn->query($sql2);
$conn->query($sql3);
$conn->query($sql4);
$conn->query($sql5);
$conn->query($sql6);


//echo "<a href='userdetailsuser.php'>View your data</a>";
$conn->close(); 


                
                ?>

            </div>
        </div>
    </div>
</div>
</body>
</html>

