<?php include('includes/headUpper.php'); ?>
<title></title>
<?php include('includes/headLower.php'); ?>

<head> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- font awesome -->
  	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">

</head>

<body>

<?php include('includes/header.php'); ?>
    
    
        <?php
        $ser = "localhost";
        $user = "root";
        $pass = "";
        $db = "bidonme";
        $con = mysqli_connect($ser, $user, $pass) or die("connection failed");
        $selected = mysqli_select_db($con, $db) or die("Colud not selected database");
        ?>

<div class="row" id="maincont">
    <div class="col-sm-9">
    
    	<div class="container mt-3" id="post" style="font-size: 14px">
   		
  			<div class="media border p-3 border border-right-0 border-left-0">
    			
    			<div class="media-body">
                           
      				
 
                                
    			</div>
  			</div>
   		</div>
    			
  <table class="table table-condensed">
	<thead>
	  <tr>
             <th> </th>
	    <th>Reviewer</th>
	    <th>Feedback</th>
	    <th>Rating</th>
	  </tr>
	</thead>
	<tbody>
	<?php 
		$conn = mysqli_connect('localhost','root','','bidonme');
                
		if($qry = mysqli_query($conn,"SELECT * FROM review")){
                    
                    
			while($show = mysqli_fetch_assoc($qry)){
                         $userId = $show['UserId'];
                         
                        
                                     
                           
                                        echo "<td><img src=\"i\img_avatar1.png\" alt=\"John Doe\" class=\"mr-3 mt-3 rounded-circle\" style=\"width:60px;\"></td>";
					
                                        
                                        echo "<td>User ".$show['UserId']."</td>";					
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
 				<a href="userdetailsuser.php" class="btn btn-primary" id="btnsignout">&nbsp; View Profile</a>
 				<br><br>
 				<a href="index2.php" class="btn btn-primary" id="btnsignout">&nbsp; Edit Profile</a>
 				<br><br>
 				<a href="index3.php" class="btn btn-primary" id="btnsignout">&nbsp; Add Higher Edu/ Working Xp</a>
 			
                                
                        
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
   	 
                
                
           
   	 </div>
  </div>
</div>


<?php include('includes/footer.php'); ?>