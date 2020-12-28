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
			</div>



		<div class="jobindex">
			<div class="card">
			<?php include "view/jobs.php" ?>
			</div>	
		</div>

	</div>



	<div class="rightcolumn">

	</div>

</div>


 <div>
    <?php include 'view/footer.php' ?>
  </div>	


</body>
</html>