<!DOCTYPE html>
<html>
<head>
	<title>Contact with us </title>
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
		<h2>Contact information</h2>
		<br/><br/>
		<h3>Dial : 16836,0621836378 <small>From any number</small></h3>
		<br/>
		<h3>IP phone : +88064782364</h3>
		<h3>Other contact numbers :</h3>
		<p>Dhaka Branch: +8801326732876 </p>
		<p>Khulna Branch: +8801374625382 </p>
		<p>Barishal Branch: +8801736465732</p>
		<p>Rajshahi Branch: +8801667452845 </p>
		<p>Rangpur Branch: +8801574527372 </p>

		<h3>Email Address:</h3>
		<p>contact@findyourjob.com</p>
		<p>teams@findyourjob.com</p>
	</div>
	<br/>
	<div>
		<?php include 'footer.php' ?>
	</div>
</body>
</html>