<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

   <div>
    <h1>Login</h1>
   <br />
   <form action = "/bank/controller/action_login.php" method = "POST">
      <div>
         <label for="username"><b>Username</b></label>
         <input type="text" name="username"  />
         <span><?php echo $usernameError;?></span>

      </div>
      <br /><br />
      <div>
         <label for="psw"><b>Password</b></label>
         <input type="password" name="psw" />
         <span><?php echo $passwordError;?></span>
      </div>
      <br /><br />
      <div>
         <input type="submit" value=" Login"/>
      </div>
   </form>
</div>
    <div>
  </div>
</body>
</html>
