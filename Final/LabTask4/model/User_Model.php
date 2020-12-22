<?php
	
	$serverName="localhost";
	$username="root";
	$password="";
	$dbName="labtask";

	$conn=new mysqli($serverName,$username,$password,$dbName);

	function UserSignUp($id,$uname,$psw,$email,$dob){
		global $conn;
		$stmt= $conn->prepare("INSERT INTO user (id,username,password,email,dob) VALUES (?,?,?,?,?) ");
		$stmt->bind_param("issss",$id,$uname,$psw,$email,$dbName);
		$stmt->execute();
		return 1;
	}

	function UserLogin($uname,$psw){
		global $conn;
		$sql = "SELECT username FROM `user` WHERE username = '$uname' and password = '$psw'";
		 $result = mysqli_query($conn,$sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck>0)
            {
                return 1;
            }
            else{
                return 0;
            }
	}

	function Show(){
		global $conn;
		$sql="SELECT * FROM user";
		 $result = mysqli_query($conn,$sql);
            echo "<table border=1>";
            
            while($row = $result-> fetch_assoc())
            {
                
                echo "<tr>";
                echo "<td>". $row['id']. "</td>";
                echo "<td>". $row['username']. "</td>";
                echo "<td>". $row['email']. "</td>";
                echo "<td>". $row['dob']. "</td>";
                echo "<td>". $row['password']. "</td>";
                
                
                
                echo "</tr>";
                
            }
            echo "</table>";
      
	}


?>
