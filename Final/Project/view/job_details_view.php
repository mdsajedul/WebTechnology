
<?php
error_reporting(0);
include_once("../model/model_jobs.php");

$jobId="";

if(isset($_GET["view"])){
	$jobIdd=$_GET["view"];
}


//echo $jobIdd;
jobdetails($jobIdd);


?>


<!DOCTYPE html>
<html>
<head>
	<title>Find your job</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/final/project/data/css/index.css">
</head>


<body>

	<div>
		<?php include '../view/header.php' ?>
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


	<div class="row">

		<div class="leftcolumn">




			<div class="jobindex">
				<div class="card">

					<div class="jobDetails">

						<?php //require("../controller/action_job_details.php") ;?>

						<h3><?php echo $jobName ; ?></h3>

						<p><?php echo $companyName ; ?></p>

						<p>Mail : <?php echo $companyName ; ?></p>

						<p>Vacancy: <br/> Not specific </p>

						<p> <b> Job Responsibilities</b> <br/> <?php echo $jobResponsibility ; ?></p>

						<p><b>Employment Status</b><br/> <?php echo $employmentStatus ; ?></p>

						<p><b>Educational Requirements</b><br/> <?php echo $educationalRequrment ; ?> </p>

						<p><b>Experience Requirements</b><br/> <?php echo $experienceRequirment ; ?>  </p>

						<p><b> Job Location</b><br/> <?php echo $location ; ?> </p>

						<p><b>Salary</b><br/> <?php echo  $salary ; ?> </p>

						<p><b>Compensation & Other Benefits</b><br/> <?php echo $otherBenifits ; ?></p>

						<p>Deadline: <?php echo $deadline ; ?></p>

							<?php $_SESSION["jobId"]=null ; ?>
					</div>
				</div>
			</div>

		</div>
		
	</div>


	<div>
		 <?php include '../view/footer.php' ?>
	</div>

</body>
</html>