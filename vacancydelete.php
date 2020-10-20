<?php include('includes/headUpper.php'); ?>
<title></title>
<?php include('includes/headLower.php'); ?>

<body>

<?php include('includes/header.php'); ?>

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
$query=mysqli_query($conn,"select * from user where Email='$userEmail'");
$row= mysqli_fetch_array($query);
$userId = $row['UserId'];
    

//delete records

$date=date('y-m-d');

 $sql1="SELECT AdvId from advertiestment where edate<='$date'";
    $result = mysqli_query($conn, $sql1) or die('error getting data');

    while($row = mysqli_fetch_array($result)){

        echo $row['AdvId'];
    }



    if(isset($_GET['del'])){ 
        $userId = $_GET['del'];
      
     $sql2="DELETE from advertiestment where edate<='$date'";
     $result2 = mysqli_query($conn, $sql2) or die('error');
 
    }



    
     ?> 

<html>
<body>
<form>

    <button type="submit" name="del">Delete</button>
    

</form>
</body>
</html>

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
$query=mysqli_query($conn,"select * from user where Email='$userEmail'");
$row= mysqli_fetch_array($query);
$userId = $row['UserId'];
    

//delete records

$date=date('y-m-d');

 $sql1="SELECT vacancyId from vacancy where edate<='$date'";
    $result = mysqli_query($conn, $sql1) or die('error getting data');

    while($row = mysqli_fetch_array($result)){

        echo $row['vacancyId'];
    }



    if(isset($_GET['delete'])){ 
        $userId = $_GET['delete'];
      
     $sql2="DELETE from vacancy where edate<='$date'";
     $result2 = mysqli_query($conn, $sql2) or die('error');
 
    }

 

  

    
     ?> 




     <html>
<body>
<form>

  
     <button type="submit" name="delete">Delete</button>

</form>
</body>
</html>








<div class="row" id="maincont">
    <div class="col-sm-9">
        
     
        
    </div>
<!--content end***************************************************************************************-->
<!--profile card**************************************************************************************-->
  <div class="col-sm-3">
  <h3>Dashboard</h3>
    <div class="card" id="card">
        <div class="row">
            <div class="col-sm-6" id="cardimgdiv">
                <img class="card-img-top" src="i/img_avatar1.png" alt="Card image" id="cardimg">
            </div>
            <div class="col-sm-6">
                <p class="card-title"><span id="cardname"><b><i>
                    <a id="link2" href="userdetailsuser.php">Name</a></i></b></span></br>
                    Location</br>
                    <a id="link3" href="#" ><i class="fa fa-sign-out"></i></a>
                    <a id="link3" href="logout.php" ><span id="cardsignout">&nbsp; Sign Out</span></a>
                </p>
            
                <a href="#" class="btn btn-primary" id="btn1 btnsignout"><i class="fa fa-user-circle" style="font-size:17px"></i>&nbsp; Dashboard</a>
            </div>
            <div class="col-sm-12">
            <br>
                <a href="myposts.php" class="btn btn-primary" id="btnsignout">&nbsp; My Posts</a>
                <br><br>
               <a href="index2.php" class="btn btn-primary" id="btnsignout">&nbsp; Create Profile</a>
        <br><br>
        <a href="userdetailsuser.php" class="btn btn-primary" id="btnsignout">&nbsp; view Profile</a>
        <br><br>
        <a href="index2edit.php" class="btn btn-primary" id="btnsignout">&nbsp; Edit profile</a>
            </div>
        </div>
    </div>
    <br>
     <div class="card" id="card">
        <h4>&nbsp;Current Status</h4>
        <p>&nbsp;&nbsp;Total Bids &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
        <p>&nbsp;&nbsp;Total Posts&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
        <p>&nbsp;&nbsp;Current Bids &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
        <p>&nbsp;&nbsp;Current Posts&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
     </div>
     <br>
     <div class="card" id="card">
        <h4>&nbsp;Reviews</h4>
     </div>
  </div>
</div>


<?php include('includes/footer.php'); ?>