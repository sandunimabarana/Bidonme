<?php
session_start();
$_SESSION["userEmail"];
$dbConnection=mysqli_connect('localhost','root','','bidonme');

if(!isset($_SESSION['userEmail'])){
  echo "<script>window.open('RealLogin1.php','_self')</script>";
}
else{
  echo "Welcome"." ".$_SESSION['userEmail'];
  
  
}

if (count($_POST) > 0) {
    $result = mysqli_query($dbConnection, "SELECT *from user WHERE Email='" . $_SESSION["userEmail"] . "'");
    $row = mysqli_fetch_array($result);
   
    if (md5($_POST["currentPassword"]) == $row["Password"]) {
        mysqli_query($dbConnection, "UPDATE user set Password='" .(md5($_POST["newPassword"])) . "' WHERE Email='" . $_SESSION["userEmail"] . "'");
        echo "<script>alert('Password Changed')</script>";
    } else
        echo "<script>alert('Current Password is not correct')</script>";
    }

?>
<?php include('includes/headUpper.php'); ?>
<title></title>
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
	currentPassword.focus();
	document.getElementById("currentPassword").innerHTML = "required";
	output = false;
}
else if(!newPassword.value) {
	newPassword.focus();
	document.getElementById("newPassword").innerHTML = "required";
	output = false;
}
else if(!confirmPassword.value) {
	confirmPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "required";
	output = false;
}
if(newPassword.value != confirmPassword.value) {
	newPassword.value="";
	confirmPassword.value="";
	newPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "not same";
	output = false;
} 	
return output;
}
</script>
<?php include('includes/headLower.php'); ?>
<body>
<?php include('includes/header.php'); ?>
    <form name="frmChange" method="post" action=""
        onSubmit="return validatePassword()">
        <div style="width: 500px;">
            <div class="message"></div>
            <table border="0" cellpadding="10" cellspacing="0"
                width="500" align="center" class="tblSaveForm">
                <tr class="tableheader">
                    <td colspan="2">Change Password</td>
                </tr>
                <tr>
                    <td width="40%"><label>Current Password</label></td>
                    <td width="60%"><input type="password"
                        name="currentPassword" class="txtField" /><span
                        id="currentPassword" class="required"></span></td>
                </tr>
                <tr>
                    <td><label>New Password</label></td>
                    <td><input type="password" name="newPassword"
                        class="txtField" /><span id="newPassword"
                        class="required"></span></td>
                </tr>
                <td><label>Confirm Password</label></td>
                <td><input type="password" name="confirmPassword"
                    class="txtField" /><span id="confirmPassword"
                    class="required"></span></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit"
                        value="Submit" class="btnSubmit"></td>
                </tr>
            </table>
        </div>
    </form>
<?php include('includes/footer.php'); ?>