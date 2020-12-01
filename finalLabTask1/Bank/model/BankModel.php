<?php

//require_once "Bank.php";


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }



class BankModel{

    public function Login($uname,$pwd){
          global $conn;
          $sql = "SELECT userId FROM users WHERE username='".$uname."'AND password= '".$pwd."' ";
        $result=$conn->query($sql);

        if ($result->num_rows > 0) {
                $conn->close();
                return true;
            } 
            else {
                $conn->close();
                echo "0 results";
                return false; 
            }
        
    }


}

?>