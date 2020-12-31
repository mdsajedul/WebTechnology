<?php 
 error_reporting(0);
include("../model/model_jobseeker.php");
session_start();
$uname=$_SESSION["id"];
detailsView($uname);

$currentPassword=$newPassword=$reNewPassword=$changeStatus="";
$currentPasswordErr=$newPasswordErr=$reNewPasswordErr=$notMatch=$currPassWrong="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$counter=0;
	if(isset($_POST["currentPassword"]) & !empty($_POST["currentPassword"])){
		$currentPassword=$_POST["currentPassword"];
	}
	else{
		$counter=$counter+1;
		$currentPasswordErr="Enter your current password";
	}




	if(isset($_POST["newPassword"]) & !empty($_POST["newPassword"])){
		$newPassword=$_POST["newPassword"];
	}
	else{
		$counter=$counter+1;
		$newPasswordErr="Enter new password";
	}


	if(isset($_POST["reNewPassword"]) & !empty($_POST["reNewPassword"])){
		$reNewPassword=$_POST["reNewPassword"];
	}
	else{
		$counter=$counter+1;
		$reNewPasswordErr="Re-enter new password";
	}



	if($currentPassword != $password){
		$currPassWrong="Wrong password";
		$counter=$counter+1;
	}
	else if($newPassword !=  $reNewPassword){
		$notMatch="New Passwords are not match";
		$counter=$counter+1;
	}


	echo $counter;

	if($counter==0 && updatePassword($uname,$newPassword)==1){
		$changeStatus="Password Update Successfully";
	}
	else{
		$changeStatus="Password Update Failed";
	}



}


 ?>





 <!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="/final/project/data/css/form_style.css">
    <link rel="stylesheet" type="text/css" href="/final/project/data/css/page_style.css">
</head>

<body>


	<div>
		<?php include '../view/header.php' ?>
	</div>

  <div class="topnav">
    <a href="/final/project/index.php">Home</a>
    <a href="/final/project/view/jobseeker.php">My Jobs</a>
    <a href="/final/project/view/contact.php" >Contact with us</a>
    <?php
			
			if ($_SESSION["id"]==null){

				?><a href="login.php" style="float: right;">Login</a> 
				<a href="signup.php" style="float: right;">Sign Up</a>
				 <?php
			}
			else{
				?>
				<a href="/final/project/controller/action_logout.php" style="float: right;">Sign out</a>
				<a href="/final/project/view/jhome.php" style="float: right;"><?php echo ucfirst($_SESSION["id"]) ; ?></a>  


				<?php

			}
		?>
  </div>

  <div class="card">
  	<h2>Change Password</h2>


  	<div class="content" style="padding-left: 25px">
  		<form action="/Final/Project/controller/action_changePassword.php" method="POST" onsubmit="return validation()">
  			<label>Enter your current password</label><br/>
  			<input type="password" name="currentPassword" id="currentPassword">
  			<a id="currentPasswordErr"></a>
  			<span><?php echo $currentPasswordErr;?></span>
  			<span><?php echo $currPassWrong;?></span>
  			<br/><br/>

  			<label>Enter your new password</label><br/>
  			<input type="password" name="newPassword" id="newPassword">
  			<a id="newPasswordErr"></a>
  			<span><?php echo $newPasswordErr;?></span>

  			<br/><br>

  			<label>Re-enter your new password</label><br/>
  			<input type="password" name="reNewPassword" id="reNewPassword">
  			<a id="reNewPasswordErr"></a>
  			<span><?php echo $reNewPasswordErr;?></span>
  			<span><?php echo $notMatch;?></span>
  			<br/><br/>

  			<input type="submit" name="submit" value="Submit"> <br/><br/>
  			<span><?php echo $changeStatus;?></span>
  			


  			


  		</form>
  	</div>

  </div>
<!--
<script type="text/javascript" src="/Final/Project/data/js/changePassword_validation.js"></script>
-->

<div>
    <?php include '../view/footer.php' ?>
  </div>
</body>
</html>