<?php
session_start();
$dbConnection=mysqli_connect('localhost','root','','bidonme');
if(!isset($_SESSION['userEmail'])){
	echo "<script>window.open('PostDetails.php','_self')</script>";
}
else{
	echo "Welcome"." ".$_SESSION['userEmail'];
	
	
}
?>


<html lang="en">
    
    <head>
       <title>Post Vacancy</title>
        <style>
            body
            {

                background: url(136.jpg);
                background-size: cover;
            }
            #body_header
            {

                width:auto;
                margin:0px auto;
                text-align:center;
                font-size:25px;
            }
            form {
                max-width: 300px;
                margin: 10px auto;
                padding: 10px 20px;
                background: #f4f7f8;
                border-radius: 8px;
            }

            h1 {
                margin: 0 0 30px 0;
                text-align: center;
            }

            input[type="text"],
            input[type="password"],
            input[type="date"],
            input[type="datetime"],
            input[type="email"],
            input[type="number"],
            input[type="search"],
            input[type="tel"],
            input[type="time"],
            input[type="url"],
            textarea,
            select {
                background: rgba(255,255,255,0.1);
                border: none;
                padding: 8px;
                font-size: 16px;
                height: auto;
                margin: auto;
                outline: 0;
                width: 100%;
                background-color: #e8eeef;
                color: black;
                box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
                margin-bottom: 30px;
            }

            input[type="radio"],
            input[type="checkbox"]

            {
                margin: 0 4px 8px 0;
            }

            select {
                padding: 6px;
                height: 32px;
                border-radius: 2px;
            }

            button {
                padding: 19px 39px 18px 39px;
                color: #FFF;
                background-color: #006CD8;
                font-size: 18px;
                text-align: center;
                font-style: normal;
                border-radius: 5px;
                width: 100%;
                border: 1px solid #ff9900;
                border-width: 1px 1px 3px;
                box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
                margin-bottom: 10px;
            }
            button:hover{
                color: #FFF;
                background-color: #009933;
                border: 1px solid #4bc970;
                border-width: 1px 1px 3px;
            }
            fieldset {
                margin-bottom: 30px;
                border: none;
            }

            legend {
                font-size: 1.4em;
                margin-bottom: 10px;
            }

            label {
                display: block;
                margin-bottom: 8px;
            }

            label.light {
                font-weight: 300;
                display: inline;
            }

            .number {
                background-color:#006CD8;
                color: #fff;
                height: 30px;
                width: 30px;
                display: inline-block;
                font-size: 0.8em;
                margin-right: 4px;
                line-height: 30px;
                text-align: center;
                text-shadow: 0 1px 0 rgba(255,255,255,0.2);
                border-radius: 100%;
            }



            form {
                max-width: 480px;
            }



        </style>
            <!-- all rights @ safees mohamed --> 
    </head>

    <body>
        <?php
        $ser = "localhost";
        $user = "root";
        $pass = "";
        $db = "bidonme";
        $con = mysqli_connect($ser, $user, $pass) or die("connection failed");
        $selected = mysqli_select_db($con, $db) or die("Colud not selected database");
        ?>
        
            <!--This is a division tag for body container-->
            <div id="body_header">
                <!--This is a division tag for body header-->
                <h1 style="color:#fff;">Make Your Post Here</h1>
             

            </div>
            <form action="PostDetails.php" method="post">
                <fieldset>
                    <legend><span class="number">*</span>Your Advertisement details</legend>
                    
                     
                  
                    
                    <label for="adtitle">Advertisement Title:</label>
                    <input type="text" name="adtitle" placeholder="Enter your Title" >
                    
                    <label for="Advertisement description">Advertisement Description:</label>
                    <textarea id="Advertisement description" name="advertisementdes" placeholder="Your description ..."></textarea>

                    <label for="budget">Budget:Max-Min</label> 
                    <input type="text"  name="budget" placeholder="Enter your Budget  From Max to min"> <!--required pattern="[a-zA-Z0-9]+"--> 
   
                    
                    <label for="category">Category</label>
                    <select name="category">
                     
                        <?php 
                      $res= mysqli_query($con,"select * from category");
                       while ($row = mysqli_fetch_array($res)) 
                      {
                      ?>
                          <option value="<?php  echo $row["CategoryName"];?>"><?php  echo $row["CategoryName"];?> </option>
                        <?php 
                        }
                        ?>
                          
                    </select>
             
                    
                    <label for="name">Location:</label>
                    <input type="text"  name="location" placeholder="Enter your Location"required pattern="[a-zA-Z0-9]+">
                    
                  
                    <!--     <label for="date">Date*:</label> -->
                    <!--  <input type="date" name="date" value="" required> -->
                </fieldset>

           <button type="submit" name="sub5">Upload the Post</button>
            </form>
        
    </body>
    <?php
    
$dbConnection=mysqli_connect('localhost','root','','bidonme');
$userEmial = $_SESSION['userEmail'];
$query=mysqli_query($dbConnection,"select * from user where Email='$userEmial'");
$row= mysqli_fetch_array($query);
$userId = $row['UserId'];
    

    
$PDATE=date('y-m-d');
$EDATE=date('y-m-d', strtotime(date('y-m-d', strtotime($PDATE)).'+14 days'));
 
    //echo $PDATE;
    
    
   
    if (isset($_POST["sub5"])) {
  

    $AT = $_POST["adtitle"];
    $B = $_POST["budget"];
    $L = $_POST["location"];
    $Dis = $_POST["advertisementdes"];
    $C=$_POST["category"];
 
        $Q5 = "Insert into advertiestment(UserId,AdvTitle,Description,Price,Location,Category,pdate,edate)values('$userId','$AT','$Dis','$B','$L','$C','$PDATE','$EDATE')";
        if (mysqli_query($con, $Q5)) {
            echo '<script language="javascript">';
            echo 'window.alert("Upload Your Post successfully")'; 
            echo '</script>';
          
        } else {
            echo '<script language="javascript">';
            echo 'alert("Appointment request Not sent successfully")';
            echo '</script>';
        }
    }

   $date=date('y-m-d');

   /* $sql1="SELECT AdvId from advertiestment where edate<='$date'";
    $result = mysqli_query($dbConnection, $sql1) or die('error getting data');

    while($row = mysqli_fetch_array($result)){

        echo $row['AdvId'];
    }


    
    $sql2="DELETE* from advertiestment where $result";
    $result = mysqli_query($dbConnection, $sql2) or die('error');
*/

     $sql2="DELETE* from advertiestment where AdvId =(SELECT AdvId from advertiestment where edate<='$date')";
     $result = mysqli_query($dbConnection, $sql2) or die('error');

 while($row = mysqli_fetch_array($result)){

        echo $row['AdvId'];
    }

/*if (mysqli_query($dbConnection, $sql1)) {
8            echo '<script language="javascript">';
            echo 'window.alert("delete Your Post successfully")';
            echo '</script>';
          
        } else {
            echo '<script language="javascript">';
            echo 'window.alert("error")';
            echo '</script>';
        }
    */
    ?>
</html>