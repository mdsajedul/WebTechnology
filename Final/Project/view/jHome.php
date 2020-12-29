<!DOCTYPE html>
<?php 
session_start();
if ($_SESSION["id"]==null){
	echo "<script> window.location.assign('login.php'); </script>";
}
?>
<html>
<head>
	<title>My Jobs</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/final/project/data/css/jhome_style.css">

</head>
<body>

	<div class="header">
		<?php include 'header.php' ?>
	</div>

	<div class="topnav">
		<a href="../index.php">Home</a>
		<a href="jobseeker.php">My Jobs</a>
		<a href="../controller/action_logout.php" style="float: right;">Sign out</a>
	</div>

	<div class="welcomenote">
		<div class="card">
			<p> Welcome  <span><?php echo $_SESSION["id"] ?> </span></p>
		</div>
	</div>


	<div class="noticeboard">
		<div class="card">
			 <?php require("../controller/action_view_noticeboard.php") ;?>
			<h2 style="text-align:center;">Noticeboard</h2>
			<h3><?php echo $noticeHeader; ?></h3>
			<p><?php echo $noticeBody ; ?></p>
			
		</div>
	</div>


	<div class="row">

		<div class="leftcolumn">

			<div class="card">
				<div class="subnav">
					
					<label><b> Resume </b></label> <br/><br/>
					<a href="profile.php" > View Resume </a> <br/><br/>
					<a href="editprofile.php">Edit Resume</a> <br/><br/>
					<a href="emailcv.php">Email Resume</a><br/><br>
					<a href="jobs.php">View Jobs </a><br/><br/>
					<label><b>Mailbox</b></label><br/> <br/>
					<a href="getmail.php"> Message </a> <br/> <br/>
					<a href="emailedcv.php">Emailed Ressume </a> <br/>
					
				</div>

			</div>

		</div>

		<div class="rightcolumn">
			<div class="card">
				<div style="background-color: white;">
					<?php include_once("../view/profile.php") ;?>
				</div>
				
			</div>
		</div>
	</div>



	<div class="card" style="text-align: center;">
	<a style="text-align: center;">Facing any problem? Feel free to <a href="conwithteam.php">Contact with Us</a> </a>
	</div>

	<div>
	<?php include 'footer.php' ?>
	</div>


</body>
</html>