
<?php 

include '../model/BankModel.php';

  $username = $psw = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $counter = 0;
      if (isset($_POST["username"]) & !empty($_POST["username"])) {
       $username = $_POST["username"];
      }
      else {
        $counter = $counter + 1;
      }
      if (isset($_POST["psw"]) & !empty($_POST["psw"])) {
       $psw = $_POST["psw"];
      }
      else {
        $counter = $counter + 1;
      }

      $userFound = false;



     $model=new BankModel();
     $userFound=$model->Login($username,$psw);



     if($userFound==true){
       $counter=0;
     }
     else{
       $counter=$counter+1;
     }
        
          if($counter == 0) {
             echo "<p>Login Successful</p>";
            echo "<script> window.location.assign('../view/home.php'); </script>";
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
      $_SESSION["id"]=$username;
     }
     else{
      echo "<br/> <br/>Username or Password incorrecy";
     }
    ?>

