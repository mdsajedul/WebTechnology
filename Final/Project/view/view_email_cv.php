
<?php
session_start();
include_once("../model/model_email.php");

$id_email="";

if(isset($_GET["view"])){
	$id_email=$_GET["view"];
}

$resumeStatus="";
//echo $id_email;
viewEmailedCv($id_email);

if($resume==""){
	$resumeStatus=" Not attached";
}
else{
	$resumeStatus=" Attached";
}




?>

<!DOCTYPE html>
<html>
<head>
	<title>Details of email</title>
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
    <?php
            
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

  		<h2>Details Email</h2>

  		<div class="content" style="padding-left: 20px">
  			<h3>Receiver : <?php echo $companyMail; ?></h3>
  			<h4>Subject : <?php echo $subject; ?></h4>
  			<h4>Resume : <?php echo $resumeStatus; ?></h4>
  			
  			<p> <b>Message</b> <br/><br/> <?php echo $message; ?></p>

  		</div>
  		
  	</div>

  	<div>
        <?php include 'footer.php' ?>
    </div>


</body>
</html>