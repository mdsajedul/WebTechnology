<?php
 
function currentBalance(&$uname,&$balance){
    $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "bank";
 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }

//global $conn;
$sql= "SELECT username,balance from users WHERE username='".$uname."' ";
$result=$conn->query($sql);

if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){

            $uname = $row["username"];
            $balance = $row["balance"] ; 
        }
        $conn->close();
    } 
else{
    echo "return 0";
}
}

function updateBalance($uname,$amount){

    $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "bank";
 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
   

    $sql="UPDATE users SET balance='".$amount."' WHERE username='".$uname."'  ";
    if($conn->query($sql)==True){
        echo "Update succesfully";
    }
    else{
        echo "Update failed";
    }
    $conn->close();

}



?>
