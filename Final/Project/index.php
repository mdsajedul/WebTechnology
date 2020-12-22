<!DOCTYPE html>

<html>
<head>
	<title>Find your job</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<style>
		*{
			box-sizing: border-box;
		}
		body{
			margin: 0;
			font-family: Arial;
			padding: 10px;

		}
		.card{
			padding: 20px;
			margin-top: 20px;
		}
		.card a{
			padding: 14px 16px;
		}
		.header{
			width: auto;
			padding: 30px;
			text-align: right;

		}
		.header h1{
			font-size: 50px;
		}
		.topnav{
			overflow: hidden;
		}
		.topnav a {
			float: left;
			display: block;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}
		.leftcolumn{
			float: left;
			width: 75%;
			padding-left: 20px;
		}
		.rightcolumn {
  			float: left;
 			width: 25%;
 			padding-left: 20px;
		}
		.row:after{
			content: "";
			display: table;
			clear: both;
		}

	</style>
</head>
<body>
 
<!--
	<?php
	$usernameError="";
	$passwordError="";
	
	$error="";
	$success="";


	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(empty($_REQUEST["username"])){
			$usernameError="Username is required";
		}
		elseif (empty($_REQUEST["password"])) {
			$passwordError="Password is required";
		}
	}

	

	
	?>

--->

<div style="display:inline-block;">
    <?php include 'view/header.php' ?>
  </div>

<div class="topnav">
	<a href="index.php">Home</a>
	<a href="view/jobseeker.php">My Jobs</a>
	<a href="view/contact.php" >Contact with us</a>
	<a href="view/signup.php" style="float: right;">Sign Up</a>
	<a href="view/login.php" style="float: right;">Login</a>

</div>


<div class="row">

<div class="leftcolumn">
	<div class="card">


		<div class="noticeboard">
			<h2 style="text-align:center;">Noticeboard</h2>
			<p>We want to remind to all that public health officials state that the risk of contracting the virus is low at this time. However, to help you protect yourself from possible infection, Health officials recommend you:

<br/>1.Wash your hands frequently and well with soap and water
</br>1.Use alcohol-based hand sanitizer
Avoid touching your eyes, nose or mouth
</p>
<p style="text-align: center;"> <i>Some company may be will take interview in online </i></p>

	
	<br/>
	<br/>
		</div>



		<div class="jobindex">
			<?php include "view/jobs.php" ?>
		</div>
	</div>
</div>

	<div class="rightcolumn">
		<div class="card">
			



				</div>
	</div>

</div>
 <div>
    <?php include 'view/footer.php' ?>
  </div>	
</body>
</html>