<!DOCTYPE html>
<?php 
session_start();
?>
<html>
<head>
	<title>My Jobs</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
<div>
<?php include 'header.php' ?>
</div>

<div class="topnav" style="overflow: hidden;">
	<a style="float: left;display: block;text-align: center;padding: 14px 16px"; href="../index.php">Home</a>
	<a style="float: left;display: block;text-align: center;padding: 14px 16px"; href="jobseeker.php">My Jobs</a>
	<a href="../controller/action_logout.php" style="float: right;display: block;padding: 14px 16px;">Sign out</a>

</div>

<div>
	<p> Welcome  <span><?php echo $_SESSION["id"] ?> </span></p>
</div>

<div class="noticeboard">
			<h2 style="text-align:center;">Noticeboard</h2>
			<p>We want to remind to all that public health officials state that the risk of contracting the virus is low at this time. However, to help you protect yourself from possible infection, Health officials recommend you:

<br/>1.Wash your hands frequently and well with soap and water
</br>1.Use alcohol-based hand sanitizer
Avoid touching your eyes, nose or mouth
</p>
<p style="text-align: center;"> <i>Some company may be will take interview in online </i></p>
</div>


<div class="sunbav" >
	<label><b>Resume</label></b> <br/><br/>

	<a href="profile.php" > View Resume </a> <br/><br/>
	<a href="editprofile.php">Edit Resume</a> <br/><br/>

	<a href="emailcv.php">Email Resume</a><br/><br>

	<a href="jobs.php">View Jobs </a>	
	<br/>
	<br/>
	<br/>
</div>

<div class="sunbav">
	<label><b>Mailbox</b></label><br/> <br/>
	<a href="getmail.php"> Message </a> <br/> <br/>
	<a href="emailedcv.php">Emailed Ressume </a> <br/>
</div>


<br/>
<br/>
<br/>


<div>
	<a style="text-align: center;">Facing any problem? Feel free to <a href="conwithteam.php">Contact with Us</a> </a>
</div>

<div>
	<?php include 'footer.php' ?>
</div>

</body>
</html>