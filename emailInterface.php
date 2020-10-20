<?php
session_start();
$dbConnection=mysqli_connect('localhost','root','','bidonme');
if(!isset($_SESSION['userEmail'])){
	echo "<script>window.open('emailInterface.php','_self')</script>";
}
else{
	echo "Welcome"." ".$_SESSION['userEmail'];
	
	
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Advertisments</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<link href="css/c1.css" rel="stylesheet" type="text/css">
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!--**************************************************************************************************-->
<!--**************************************************************************************************-->
<!--**************************************************************************************************-->
<!--**************************************************************************************************-->
<!--**************************************************************************************************-->
<!--**************************************************************************************************-->

<!--**************************************************************************************************-->
<!--**************************************************************************************************-->
<!--**************************************************************************************************-->
<!--**************************************************************************************************-->
<!--**************************************************************************************************-->
<!--**************************************************************************************************-->
</head>

<body>
<?php
$userEmial = $_SESSION['userEmail'];
$query=mysqli_query($dbConnection,"select * from user where Email='$userEmial'");
$row= mysqli_fetch_array($query);
$userId = $row['UserId'];


?>






<!--header logo and tagline **************************************************************************-->
<!--header logo and tagline **************************************************************************-->
<!--header logo and tagline **************************************************************************-->
<!--header logo and tagline **************************************************************************-->
<!--header logo and tagline **************************************************************************-->
<!--header logo and tagline **************************************************************************-->
<div class="row">
    <div class="col-sm-3" >
    	<a href="########################"><img src="i/final.png" alt="logoimage" id="logoimg"></a>
    </div>
<!--**************************************************************************************************-->
<!--**************************************************************************************************-->
    <div class="col-sm-3" ></div>
<!--**************************************************************************************************-->
<!--**************************************************************************************************-->
    <div class="col-sm-2" ></div>
<!--**************************************************************************************************-->
<!--**************************************************************************************************-->
    <div class="col-sm-4" id="headertagline">
    	<h4 style="color: #000033"><b><i>Let us “build” a job for you</i></b></h4>
    </div>
</div>
<!--header end****************************************************************************************-->
<!--header end****************************************************************************************-->
<!--header end****************************************************************************************-->
<!--navigation bar ***********************************************************************************-->
<!--navigation bar ***********************************************************************************-->
<!--navigation bar ***********************************************************************************-->
<nav class="navbar navbar-expand-md navbar-dark sticky-top" id="navbar">
  <a class="navbar-brand" href="#"><img src="i/reddit.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="vtemporyjobs.php">Tempory Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vpermanentjobs.php">Permanent Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vparttimejobs.php">PartTime Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vhireandrent.php">Hire and Rent</a>
      </li>   
      <li class="nav-item">
        <a class="nav-link" href="vadvertisments.php">Advertisments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="PostDetails.php">Add Vacancy</a>
      </li>
    </ul>
  </div>
  <div style="text-align: right">
  	<form class="form-inline" action="">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-outline-primary" type="submit" id="btn2">Search</button>
  	</form>
  </div> 
</nav>

<!--navigation bar end *******************************************************************************-->
<!--navigation bar end *******************************************************************************-->
<!--navigation bar end *******************************************************************************-->
<!--content profile card******************************************************************************-->
<!--content profile card******************************************************************************-->
<!--content profile card******************************************************************************-->
<div class="row" id="maincont">
    <div class="col-sm-9">
	

		
 <form action="email.php" method="post">
    <div class="form-group">
      <label for="">Subject:</label>
      <input type="text" class="form-control" id="" placeholder="" name="subject">
    </div>
    <div class="form-group">
      <label for="">Body:</label>
      <textarea type="text" rows="5" class="form-control" id="" placeholder="Description" name="body"></textarea>
    </div>
	<div class="form-group">
      <label for="">To:</label>
      <input type="email" class="form-control" id="" placeholder="" name="to" required pattern="^[A-Za-z0-9@./]+">
    </div>
    
    <button type="submit" class="btn btn-primary" name="submit1">Send</button>
</form>
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
   		
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
   	 	<h4>&nbsp;Reviews</h4>
   	 </div>
  </div>
</div>
<!--profile card end**********************************************************************************-->
<!--profile card end**********************************************************************************-->
<!--profile card end**********************************************************************************-->
<!--footer start**************************************************************************************-->
<!--footer start**************************************************************************************-->
<!--footer start**************************************************************************************-->
<div class="row" id="footertop">
  <div class="col-sm-3" id="footertopdiv">
	<p><span style="font-size: 29px"><i>12142154</i></span></br>
	<sub>REGISTERED USERS</sub></p>
  </div>
  <div class="col-sm-3" id="footertopdiv">
  	<p><span style="font-size: 29px"><i>12142154</i></span></br>
	<sub>TOTAL JOBS POSTED</sub></p>	
  </div>
  <div class="col-sm-6" id="footertopdiv">
  		
  </div>
 
  <hr id="footerhr">
</div>
<!--footer top end************************************************************************************-->
<!--footer top end************************************************************************************-->
<!--footer top end************************************************************************************-->
<!--footer navigation sec 1***************************************************************************-->
<!--footer navigation sec 1***************************************************************************-->
<!--footer navigation sec 1***************************************************************************-->
<div class="row" id="footermid">
		<div class="col-sm-3" id="footermiddiv">
			<p><b>Info</b>
			</p>
			<div id="footermid1">
				<address><i>
			AZ Marketers<br>
			No 115<br> 
			Moraketiya Road<br>
			Embilipitiya<br>
			10200</br>
			Sri Lanka
			</i></address>
			
				<p>077-6657638</br>
					045-5689857</p>
				<p><i>azmarketers.biz@gmail.com</i>
					</br>
					<i>ncprasadmadusanka@gmail.com</i>
				</p>
			</div>
		</div>

		<!--footer navigation sec 2***************************************************************************-->
		<!--footer navigation sec 2***************************************************************************-->
		<div class="col-sm-3" id="footermiddiv">
			<p><b>bidonme</b>
			</p>
			<div id="footermid2">
				<p><a id="link1" href="vtemporyjobs.php">Tempory Jobs</a>
				</p>
				<p><a id="link1" href="vpermanentjobs.php">Permanent Jobs</a>
				</p>
				<p><a id="link1" href="vparttimejobs.php">PartTime Jobs</a>
				</p>
				<p><a id="link1" href="vhireandrent.php""">Hire and Rent</a>
				</p>
				<p><a id="link1" href="vadvertisments.php""">Advertisments</a>
				</p>
				<p><a id="link1" href="userdetailsview.php">Profile</a>
				</p>
				<p><a id="link1" href="dashboard.php">Dashboard</a>
				</p>
			</div>
		</div>
		<!--footer navigation sec 3***************************************************************************-->
		<!--footer navigation sec 3***************************************************************************-->
		<div class="col-sm-3" id="footermiddiv">
			<p><b>About</b>
			</p>
			<div id="footermid2">
				<p><a id="link1" href="fAboutus.php">About us</a>
				</p>
				<p><a id="link1" href="fPrivacyPolicy.php">Privacy Policy</a>
				</p>
				<p><a id="link1" href="fTermsandConditions.php">Terms and Conditions</a>
				</p>
				<p><a id="link1" href="fHowitWorks.php">How it Works</a>
				</p>
				<p><a id="link1" href="fContactus.php">Contact us</a>
				</p>
				<p><a id="link1" href="fFees&Charges.php">Fees &amp; Charges</a>
				</p>
				<p><a id="link1" href="fForum.php">Forum</a>
				</p>
			</div>
		</div>
		<!--footer navigation sec 4***************************************************************************-->
		<!--footer navigation sec 4***************************************************************************-->
		<div class="col-sm-3" id="footermiddiv">
			<p><b>Social Media</b>
			</p>
			<p><a id="link1" href="https://www.facebook.com"><i class="fa fa-facebook-square" style="font-size:24px"></i></a>&nbsp; &nbsp; <a id="link1" href="https://www.facebook.com">Facebook</a>
			</p>
			<p><a id="link1" href="https://plus.google.com/discover"><i class="fa fa-google-plus-square" style="font-size:24px"></i></a>&nbsp; &nbsp; <a id="link1" href="https://plus.google.com/discover">Google+</a>
			</p>
			<p><a id="link1" href="https://wordpress.com/"><i class="fa fa-wordpress" style="font-size:24px"></i></a>&nbsp; &nbsp; <a id="link1" href="https://wordpress.com/">Word-Press</a>
			</p>
			<p><a id="link1" href="https://www.linkedin.com/uas/login"><i class="fa fa-linkedin-square" style="font-size:24px"></i></a>&nbsp; &nbsp; <a id="link1" href="https://www.linkedin.com/uas/login">Linkdin</a>
			</p>
			<p><a id="link1" href="https://twitter.com/Twitter?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa fa-twitter-square" style="font-size:24px"></i></a>&nbsp; &nbsp; <a id="link1" href="https://twitter.com/Twitter?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Twitter</a>
			</p>
			<p><a id="link1" href="https://www.youtube.com"><i class="fa fa-youtube-square" style="font-size:24px"></i></a>&nbsp; &nbsp; <a id="link1" href="https://www.youtube.com">Youtube</a>
			</p>
		</div>
	</div>
<!--footer end****************************************************************************************-->
<!--footer end****************************************************************************************-->
<!--footer end****************************************************************************************-->
<!--copyright*****************************************************************************************-->
<!--copyright*****************************************************************************************-->
<!--copyright*****************************************************************************************-->
<div class="row" id="footerbot">
 <hr id="footerbothr">
  <div class="col-sm-3" ></div>
  <div class="col-sm-6" id="copy"><p>Copyright &copy; 2018 www.bidonme.lk</p></div>
  <div class="col-sm-3" ></div>
</div>
<!--**************************************************************************************************-->
<!--**************************************************************************************************-->
<!--**************************************************************************************************-->
<!--**************************************************************************************************-->
<!--**************************************************************************************************-->
<!--**************************************************************************************************-->

</body>
</html>