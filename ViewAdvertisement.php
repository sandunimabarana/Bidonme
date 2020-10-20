<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <title>Advertisements</title>

        <style>


            #appoint {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;

            }

            #appoint td, #appoint th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #appoint tr:nth-child(even){background-color: #f2f2f2;}

            #appoint tr:hover {background-color: #ddd;}

            #appoint th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: center;
                background-color: #4CAF50;
                color: white;
            }
            .button {
                background-color: #008CBA; 
                border: none;
                border-radius: 5px;
                color: white;
                padding: 15px ;
                text-align: center;
                text-decoration: none;
                width:90px; 
                font-size: 16px;
            }
            .button:hover{
                background-color: orange;
                color: white;
                cursor:pointer;
                box-shadow: 5px 3px gray;
            }
            .button1:hover{
                background-color: orange;
                color: white;
                cursor:pointer;
                box-shadow: 5px 3px gray;
            }
            .button1 {
                background-color:#f44336; 
                border: none;
                border-radius: 5px;
                color: white;
                padding: 15px ;
                text-align: center;
                text-decoration: none;
                width: 90px;
                font-size: 16px;
            }
            .button3 {
                background-color:green; 
                border: none;
                border-radius: 5px;
                color: white;
                padding: 15px ;
                text-align: center;
                text-decoration: none;
                width: 90px;
                font-size: 16px;
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
    <center>
        <h1>Advertisement Details</h1>
    </center>

    <br>
    <br>
    <table id="appoint">
        <tr>
            <th>User Id</th>
            <th>Advertisement Title</th>
            <th>Advertisement Description</th>
            <th>Budget</th>
            <th>Category</th>
            <th>Location</th>
            
         
        </tr>
        
        <?php
        $query = "Select * from advertiestment";
        $result = mysqli_query($con, $query);

        while ($row = mysqli_fetch_assoc($result)) {

$ch=$row['UserId'];

$_SESSION["UID"]=$ch;
            echo "<tr>";
            echo "<td><a href=\"Review.php\" >". $row['UserId']."</a>";
            echo "<td>" . $row['AdvTitle'];
            echo "<td>" . $row['Description'];
            echo "<td>" . $row['Price'];
            echo "<td>" . $row['Category'];
            echo "<td>" . $row['Location'];
     
       
           

            echo "</tr>";
        }

       
        
        ?>


    </table>

</body>
</html>
