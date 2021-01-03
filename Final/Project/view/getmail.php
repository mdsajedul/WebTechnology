
<?php   

session_start();
//error_reporting(0);
require("../model/model_messageAdmin.php");
$jobseeker="";


$jobseeker=$_SESSION["id"];

//echo $jobseeker;

GetMessageResult($jobseeker);

$message="";
$messageErr="";
//$counter=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $counter = 0;
  if (isset($_POST["message"]) & !trim($_POST["message"])=="") {
    $message = $_POST["message"];
  }
  else {
    $messageErr = "Fill the message box";
    $counter = $counter + 1;
  }
  echo $counter;
  if($counter==0 )
  {
    SendMessage($jobseeker,$message);
    GetMessageResult($jobseeker);
  }
  else{
    $messageErr="Please fill the message box";
  }


}



?>

<!DOCTYPE html>
<html>
<head>
  <title>Message to admin</title>
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
    //session_start();
     
            
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

    <h2>Contact with Admin</h2>
    

    <div class="view_message" style="padding: 30px">

      <?php
          
          ViewAdminMessage();

      ?>
      
    </div>


    <div class="send_message" style="padding: 30px">

      <form  method="POST" >
       <textarea id="message" name="message" rows="6" cols="80">
          
        </textarea> 

        <br/><br/>
        <input type="submit" name="send_message" id="send_message" value="Send Message">
      </form>
      <br/>
      <br/>
      <span><?php echo $messageErr; ?></span>
      
    </div>


  </div>


   <div>
      <?php include 'footer.php' ?>
    </div>

</body>
</html>