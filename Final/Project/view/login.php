<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/final/project/data/css/login_style.css">
  <link rel="stylesheet" type="text/css" href="/final/project/data/css/form_style.css">

</head>
<body>

<?php
$usernameError="";
$passwordError="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(empty($_REQUEST["username"])){
    $usernameError="Enter your password";
  }
  elseif (empty($_REQUEST["psw"])) {
    $passwordError="Enter your Password";
    
  }
}

?>


  <div >
    <?php include 'header.php' ?>
  </div>

  <div class="topnav">
    <a href="/final/project/index.php">Home</a>
    <a href="jobseeker.php">My Jobs</a>
    <a href="contact.php" >Contact with us</a>
    <a href="signup.php" style="float: right;">Sign Up</a>
    <a href="login.php" style="float: right;">Login</a>
  </div>

   <div class="card">
    <div class="login_design">
    <h1>Login</h1>
   <br />
   <form action = "/final/project/controller/action_login.php" method = "POST" onsubmit="return validation()">
      <div>
         <label for="username"><b>Username</b></label>
         <input type="text" name="username" id="username" required />
         <span><?php echo $usernameError;?></span>
         <a id="usernameErr"></a>

      </div>
      <br /><br />
      <div>
         <label for="password"><b>Password</b></label>
         <input type="password" name="password" id="password" required />
         <span><?php echo $passwordError;?></span>
         <a id="pswErr"></a>
      </div>
      <br /><br />
      <div>
         <button type="button" onClick="document.location.href='/final/Project'">Cancel</button>
         <button type="button" onClick="document.location.href='/final/Project/view/signup.php'">Sign Up</button>
         <input type="submit" value=" Login"/>
      </div>
   </form>

<script type="text/javascript" src="/Final/Project/data/js/login_validation.js"></script>
</div>
</div>


    <div>
    <?php include 'footer.php' ?>
  </div>
</body>
</html>