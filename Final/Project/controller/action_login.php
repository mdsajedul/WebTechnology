
<div style="display:inline-block;">
    <?php include '../view/header.php' ?>
  </div>
	
<?php 
require ("../model/model_jobseeker.php");

  $uname = $psw = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $counter = 0;
      if (isset($_POST["username"]) & !empty($_POST["username"])) {
       $uname = $_POST["username"];
      
      }
      else {
        $counter = $counter + 1;
      }
      if (isset($_POST["password"]) & !empty($_POST["password"])) {
       $psw = $_POST["password"];
       
      }
      else {
        $counter = $counter + 1;
      }

      $userFound = false;

     // LoginJobseeker($uname,$psw)
       
        echo "\nCounter:";
        echo $counter;
          if($counter == 0 & LoginJobseeker($uname,$psw)==true ) {
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
<?php 
     if($userFound==true){
      session_start();
      $_SESSION["id"]=$uname;
     }
     else{
      echo "<br/> <br/>Username or Password incorrect";
     }
    ?>

