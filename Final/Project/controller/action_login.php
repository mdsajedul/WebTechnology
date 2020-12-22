
<div style="display:inline-block;">
    <?php include '../view/header.php' ?>
  </div>

  

	
<?php 
require ("../model/model_jobseeker.php");

  $uname = $psw = "";

$usernameError="";
$passwordError="";
$userFound="";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $counter = 0;
      if (isset($_POST["username"]) & !empty($_POST["username"])) {
       $uname = $_POST["username"];
      
      }
      else {
        $counter = $counter + 1;
          $usernameError="Enter your password";
      }
      if (isset($_POST["password"]) & !empty($_POST["password"])) {
       $psw = $_POST["password"];
       
      }
      else {
        $counter = $counter + 1;
         $passwordError="Enter your Password";
      }

      $userFound = false;

     // LoginJobseeker($uname,$psw)
       
          if($counter == 0 && LoginJobseeker($uname,$psw)==true ) {
            $userFound=true;
            echo "<p>Login Successful</p>";
            echo "<script> window.location.assign('../view/jhome.php'); </script>";
          }
          else {
            echo "<p>Login Unsuccessful</p>";
            echo "<a href='../view/login.php'>Try Again!</a>";
          }
      
    }

?>

<h1>Login</h1>
   <br />
   <form  method = "POST" onsubmit="return validation()">
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
   

<?php 
     if($userFound==true){
      session_start();
      $_SESSION["id"]=$uname;
     }
     else{
      echo "<br/> <br/>Username or Password incorrect";
     }
    ?>

     <div>
    <?php include '../view/footer.php' ?>
  </div>

