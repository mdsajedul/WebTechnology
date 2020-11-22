<!DOCTYPE html>
<html>
<head>
	<title>Email Resume</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>

<?php
$myemail=$companyemail=$message=$subject="";
$myemailErr=$companyErr=$messageErr=$subjectErr="";
$emailStatus="";

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$counter=0;
	if(isset($_POST["myemail"]) & !empty($_POST["myemail"])){
		$myemail=$_POST["myemail"];
	}
	else{
		$myemailErr="Invaild Email";
		$counter=$counter+1;
	}
	if(isset($_POST["companyemail"]) & !empty($_POST["companyemail"])){
		$companyemail=$_POST["companyemail"];
	}
	else{
		$companyErr="Invalid email";
		$counter=$counter+1;
	}

	if(isset($_POST["subject"]) & !empty($_POST["subject"])){
		$subject=$_POST["subject"];
		
	}
	else{
		$subjectErr="Invalid Subject";
		$counter=$counter+1;
	}

	if(isset($_POST["message"]) & !empty($_POST["message"])){
		$message=$_POST["message"];
	}


	if($counter==0){
		$emailStatus="Successfully sent email";
	}
	else{
		$emailStatus="Email sending failed !";
	}


}
?>




 <div style="display:inline-block;">
    <?php include 'header.php' ?>
</div>
    <div class="emailcv">
    	<label><b>Here you can email your resume</b></label><br><br/>

    	<h3>Email Resume to a company </h3>

    	<form name="email" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

    		<label for="myemail" >My email address</label><br/>
    		<input type="text" id="myemail" name="myemail" > 
    		 <span><?php echo $myemailErr;?></span>
    		<br/><br/>

    		<label for="companyemail">Company email address</label> <br/>
    		<input type="text" id="companyemail" name="companyemail">
			 <span><?php echo $companyErr;?></span>
    		<br/><br/>

    		<label for="subject">Subject</label><br/>
    		<input type="text" id="subject" name="subject">
    		 <span><?php echo $subjectErr;?></span>
    		<br/><br/>

    		<label for="message">Message</label><br/>
    		<textarea id="message" name="message" rows="6" cols="80">
    			
    		</textarea> 
    		 <span><?php echo $messageErr;?></span>
    		<br/>
    		<button type="submit" >Send Ressume</button>


    		
    	</form>

    	<?php
    	echo $emailStatus;
    	echo "<br/>".$myemail;
    	echo "<br/>".$companyemail;
    	echo "<br/>".$subject;
    	echo "<br/>".$message;
    	
    	?>

    </div>

    <div>
    	<?php include 'footer.php' ?>
    </div>

</body>
</html>