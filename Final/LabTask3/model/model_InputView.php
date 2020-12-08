<?php

$status="";
function AddUser($id,$uname,$psw,$email,$dob){
 $servername = "localhost";
 $username = "sajedul"; 
 $password = "1234";
 $dbname = "labtask";
 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }

$sql="INSERT INTO user (id,username,password,email,dob) VALUES ('".$id."','".$uname."','".$psw."','".$email."','".$dob."')";
$result=$conn->query($sql);

$status="Insert Successfull";
}

function CureentUser(&$id,&$uname,&$psw,&$email,&$dob){
	$servername = "localhost";
 $username = "sajedul"; 
 $password = "1234";
 $dbname = "labtask";
 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }


 	$sql="SELECT * FROM user";
 	$result=$conn->query($sql);
	if ($result->num_rows > 0) { ?>

		<div>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Username</th>
					<th>Password</th>
					<th>Email</th>
					<th>Date of Birth</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while($row = $result->fetch_assoc()): ?>
			<tr>
				<td>
					
					<?php echo $row["id"]; 
					$id=$row["id"]; ?>
				</td>
				<td>

					<?php echo $row["username"]; 
					$uname=$row["username"];?>
				</td>
				<td>
					<?php echo $row["password"]; ?>
				</td>
				<td>
					<?php echo $row["email"]; ?>
				</td>
				<td>
					<?php echo $row["dob"];?>
				</td>
				<td>
					<a href="home.php?edit=<?php echo $id;?>">Update</a>
					<a href="http://localhost/FinalLabTask3/controller/action_input.php?delete=<?php echo $id;?>">Delete</a>
				</td>
			</tr>
		<?php endwhile; ?>
		</tbody>
		</table>
	</div>
      <?php }
else{
    echo "return 0";
}

}



?>