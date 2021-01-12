<?php
session_start();
$message="";
$messageErr="";
$messageStatus="";
$emailStatus="";
require("../model/model_messageAdmin.php");
$jobseeker="";
$jobseeker=$_SESSION["id"];


if($_SERVER["REQUEST_METHOD"] == "POST") {
	$counter=0;

if(isset($_POST["message"]) & !empty($_POST["message"])){
		$message=$_POST["message"];
	}

else{
	$messageErr="Invalid message";
	$counter=$counter+1;
	}

if($counter==0 && ContactTeam($jobseeker,$message)==1){
		$emailStatus="Successfully sent Message";
	}
	else{
		$emailStatus="Message sending failed !";
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Contact with us</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	 <link rel="stylesheet" type="text/css" href="/final/project/data/css/form_style.css">
    <link rel="stylesheet" type="text/css" href="/final/project/data/css/page_style.css">
</head>
<body>




	<div >
		<?php include 'header.php' ?>
	</div>


	<div class="topnav">
    <a href="/final/project/index.php">Home</a>
    <a href="jobseeker.php">My Jobs</a>
    <a href="contact.php" >Contact with us</a>
    <?php
    //session_start();
     //error_reporting(0);
			
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
		<h3>Facing any problem,tell us</h3>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" onsubmit="return validation()">
			<textarea id="message" name="message" rows="4" cols="50"></textarea><br/>
			
			<br/>
			<button type="submit">Send</button><br/>
			<span><?php echo $messageErr;?></span>
		</form>

		<br/><br/>
		<a id="messageErr"></a>



<?php 
echo $emailStatus;

?>
	</div>


<script type="text/javascript" src="/Final/Project/data/js/adminMessage_validation.js"></script>

<br/><br/>
<div>
	<?php include 'footer.php' ?>
</div>

</body>
</html>