
<?php 

session_start();

?>


<!DOCTYPE html>
<html>
<head>
    <title>Emailed Resume</title>
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


    <h2>Emailed Resume</h2>

    <div class="content" style="padding-left: 20px">

        <?php

            require("../controller/action_emailed_cv.php");
        ?>

    </div>
      



  </div>



    <div>
        <?php include 'footer.php' ?>
    </div>



</body>
</html>