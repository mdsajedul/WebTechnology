<!DOCTYPE html>
<html>
<head>
	<title>Email Resume</title>
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


    <?php require("../controller/action_view_jobseeker.php") ;?>

    <div class="card">
        <label><b>Here you can email your resume</b></label><br><br/>

        <h3>Email Resume to a company </h3>
        <div class="content" style="padding-left: 25px">
    	

    	<form action="/Final/Project/controller/action_emailcv.php" method="POST" onsubmit="return validation()">

    		<label for="myemail" >My email address</label><br/>
    		<input type="text" id="myemail" name="myemail" value="<?php echo $email; ?>"> 
    		<br/>
             <a id="myemailErr"></a>
            <br/>

    		<label for="companyemail">Company email address</label> <br/>
    		<input type="text" id="companyemail" name="companyemail">
    		<br/>
             <a id="companyemailErr"></a>
            <br/>

    		<label for="subject">Subject</label><br/>
    		<input type="text" id="subject" name="subject">
    		<br/><br/>

             <input type="checkbox" checked="checked" name="addRessume" value="yes"> Add Resume <br/><br/>

    		<label for="message">Message</label><br/>
    		<textarea id="message" name="message" rows="6" cols="80">
    			
    		</textarea> 
    		<br/>
    		<button type="submit" >Send Ressume</button>


    		
    	</form>
        </div>
    </div>


<script type="text/javascript" src="/Final/Project/data/js/emailcv_validation.js"></script>

    <div>
    	<?php include 'footer.php' ?>
    </div>

</body>
</html>