<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
    <title>Revew</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- font awesome -->
  	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
	
        
        
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

    <?php
if(isset($_POST["sub"])){
    
	$conn =mysqli_connect('localhost','root','','bidonme');
	if(mysqli_query($conn,"INSERT INTO review(UserId,Description,ReviewRate) VALUES('".$_POST['SN']."','".$_POST['FB']."','".$_POST['rate']."')")){
            header("location:Review.php");		
	}
}
?>
    <?php
   

$OD=$_SESSION["UID"];


    $query = "Select * from advertiestment where UserId='$OD' ";
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_assoc($result)) {


        echo "UserID" ." : ". $row['UserId'] . "<br>"."<br>";
        echo "Post Title" ." : ". $row['AdvTitle']."<br>"."<br>";
        echo "Description" ." : ". $row['Description']."<br>"."<br>";
        
    }
    ?>
    
    <div>
        <form action="Review.php" method="post">
	
		    <label for="name"> Riviewer Id :</label>
                    <input type="text" class="form-control" id="name" name="SN"><br>		    
	  
	
		    <label for="feedback"> Feedback :</label>
                    <textarea   name="FB"> </textarea>	<br>	    
	  		 
	    <label for="email">Post Rating :</label>	
            
            <select name="rate">
                    <option value="1">One</option>
                    <option value="2">Two<i class='fa fa-star'></i><i class='fa fa-star'></i></option>
                    <option value="3">Three<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></option>
                     <option value="4">Four<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></option>
                     <option value="5">Five<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></option>
                    
                </select>
            	<br>
	  	<input type="submit" class="btn btn-success" value="Feedback" name="sub">
	  
            </form>

    </div>

<h2>Student Details</h2>
<table class="table table-condensed">
	<thead>
	  <tr>
	    <th>Reviewer ID</th>
	    <th>Feedback</th>
	    <th>Rating</th>
	  </tr>
	</thead>
	<tbody>
	<?php 
		$conn = mysqli_connect('localhost','root','','bidonme');
		if($qry = mysqli_query($conn,"SELECT * FROM review")){
			while($show = mysqli_fetch_assoc($qry)){
				echo "<tr>";
					echo "<td>".$show['UserId']."</td>";					
					echo "<td>".$show['Description']."</td>";					
					if($show['ReviewRate']==1){ echo "<td><i class='fa fa-star'></i></td>"; }
					if($show['ReviewRate']==2){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
					if($show['ReviewRate']==3){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
					if($show['ReviewRate']==4){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
					if($show['ReviewRate']==5){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
				echo "</tr>";
			}
		}
	?>
	</tbody>
</table>
</body>
</html>
