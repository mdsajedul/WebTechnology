
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank";
$balance="";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


  $uname = $psw = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $counter = 0;
      if (isset($_POST["username"]) & !empty($_POST["username"])) {
       $uname = $_POST["username"];
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

      
      $sql = "SELECT * FROM `users` WHERE username=' ".$uname." '  and password='".$psw."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {

$userFound=true;
$balance=$row["bslance"];

    
  }
} else {
  echo "0 results";
}


$conn->close();
        
          if($userFound == false) {
            $counter = $counter + 1;
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
     if($userFound){
      session_start();
      $_SESSION["id"]=$uname;
      $_SESSION["balance"]=$balance;
     }
     else{
      echo "<br/> <br/>Username or Password incorrecy";
     }
    ?>


