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
        <a href="../index.php">Home</a>
        <a href="jobseeker.php">My Jobs</a>
        <a href="../controller/action_logout.php" style="float: right;">Sign out</a>
    </div>

    <div class="card">
        <label><b>Here you can email your resume</b></label><br><br/>

        <h3>Email Resume to a company </h3>
        <div class="content" style="padding-left: 25px">
    	

    	<form action="/Final/Project/controller/action_emailcv.php" method="POST">

    		<label for="myemail" >My email address</label><br/>
    		<input type="text" id="myemail" name="myemail" > 
    		<br/><br/>

    		<label for="companyemail">Company email address</label> <br/>
    		<input type="text" id="companyemail" name="companyemail">
    		<br/><br/>

    		<label for="subject">Subject</label><br/>
    		<input type="text" id="subject" name="subject">
    		<br/><br/>

            <input type="checkbox" checked="checked" name="addRessume"> Add Resume <br/><br/>

    		<label for="message">Message</label><br/>
    		<textarea id="message" name="message" rows="6" cols="80">
    			
    		</textarea> 
    		<br/>
    		<button type="submit" >Send Ressume</button>


    		
    	</form>
        </div>
    </div>

    <div>
    	<?php include 'footer.php' ?>
    </div>

</body>
</html>