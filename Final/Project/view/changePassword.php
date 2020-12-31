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
		<?php include 'header.php' ?>
	</div>

  <div class="topnav">
    <a href="/final/project/index.php">Home</a>
    <a href="jobseeker.php">My Jobs</a>
    <a href="contact.php" >Contact with us</a>
    <?php
    session_start();
     error_reporting(0);
			
			if ($_SESSION["id"]==null){

				?><a href="login.php" style="float: right;">Login</a> 
				<a href="signup.php" style="float: right;">Sign Up</a>
				 <?php
			}
			else{
				?>
				<a href="/final/project/controller/action_logout.php" style="float: right;">Sign out</a>
				<a href="jhome.php" style="float: right;"><?php echo ucfirst($_SESSION["id"]) ; ?></a>  


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
  			<br/><br/>

  			<label>Enter your new password</label><br/>
  			<input type="password" name="newPassword" id="newPassword">
  			<a id="newPasswordErr"></a>

  			<br/><br>

  			<label>Re-enter your new password</label><br/>
  			<input type="password" name="reNewPassword" id="reNewPassword">
  			<a id="reNewPasswordErr"></a>
  			<br/><br/>

  			<input type="submit" name="submit" value="Submit">


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