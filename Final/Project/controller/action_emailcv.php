<?php
error_reporting(0);

require("../controller/action_view_jobseeker.php");
require("../model/model_email.php");

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



    if(isset($_POST["addRessume"]) == "yes" && $counter == 0){

       if(EmailWithCv($myemail,$companyemail,$subject,$message,$firstname,$lastname,$fathername,$mothername,$maratialStatus,$skill,$religion,$gender,$dob,$divition,$district,$subDistrict,$postOffice,$road,$proImage) == 1){
         $emailStatus = "Message sent with resume";
       }
       else{
        $emailStatus="resume & mail not sent";
       }
    }

    else if(isset($_POST["addRessume"])==null && $counter==0){

        if(EmailWithMessage($myemail,$companyemail,$subject,$message) == 1){
            $emailStatus = "Message sent";
        }
        else{
             $emailStatus="resume & mail not sent";
        }
        
    }
    else{
      $emailStatus="resume & mail not sent";
    }


}
?>





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

    <div class="card">
        <div class="content">
    	<label><b>Here you can email your resume</b></label><br><br/>

    	<h3>Email Resume to a company </h3>

      


    	<form name="email" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

    		<label for="myemail" >My email address</label><br/>
    		<input type="text" id="myemail" name="myemail"  value="<?php echo $email; ?>"> 
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

             <input type="checkbox" checked="checked" name="addRessume" value="yes"> Add Resume <br/><br/>

    		<label for="message">Message</label><br/>
    		<textarea id="message" name="message" rows="6" cols="80">
    			
    		</textarea> 
    		 <span><?php echo $messageErr;?></span>
    		<br/>
    		<button type="submit" >Send Ressume</button>


    		
    	</form>

    	<?php
    	echo $emailStatus;
    	
    	?>
        </div>
    </div>

    <div>
    	<?php include '../view/footer.php' ?>
    </div>

</body>
</html>