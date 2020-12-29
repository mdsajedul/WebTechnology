<!DOCTYPE html>
<html>
<head>
	<title>Find your job</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/final/project/data/css/index.css">
</head>


<body>

	<div>
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
			
			<div class="noticeboard">

				<div class="card">
					<?php
						include("model/model_noticeboard.php");
						viewNoticeboard();
					?>
						<h2 style="text-align:center;">Noticeboard</h2>
						<h3><?php echo $noticeHeader; ?></h3>
						<p><?php echo $noticeBody ; ?></p>
				</div>
				
			</div>


			<div class="jobindex">
				<div class="card">
					<?php include "view/jobs.php" ?>
				</div>
			</div>


		</div>
		
	</div>


	<div>
		 <?php include 'view/footer.php' ?>
	</div>

</body>
</html>