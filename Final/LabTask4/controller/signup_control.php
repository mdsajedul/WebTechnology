<?php

require ('../model/User_Model.php');

$counter=0;
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["id"])){
		echo "Enter an ID";
		$counter=0;
	}
	else if(empty($_POST["username"])){
		echo "Enter your Name";
		$counter=0;
	}
	else if(empty($_POST["password"])){
		echo "Enter your Password";
		$counter=0;
	}
	else if(empty($_POST["email"])){
		echo "Enter your email";
		$counter=0;
	}
	else{
		$id=$_POST["id"];
		$uname=$_POST["username"];
		$psw=$_POST["password"];
		$email=$_POST["email"];
		$dob=$_POST["dob"];
		$counter=1;
	}

	if($counter==0){
		echo "Sign Up Failed";
	}
	else if(UserSignUp($id,$uname,$psw,$email,$dob)==1){
		echo "Registration Complete";
	}

	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>SIgn Up</title>
</head>
<body>
<form method="POST" onsubmit="return validation()">
	<label for="id" >ID:</label>
	<input type="text" name="id" id="id" placeholder="ID">
	<br/><br/>
	<label for="username">Username</label>
	<input type="text" name="username" id="username" placeholder="Username">
	<br/><br/>
	<label for="password">Password</label>
	<input type="password" name="password" id="password" placeholder="*****" >
	<br/><br/>
	<label for="email">Email</label>
	<input type="text" name="email" id="email" placeholder="example@email.com">
	<br/><br/>
	<label for="dob">Date of Birth</label>
	<input type="Date" name="dob" id="dob">
	<br/><br/>
	<input type="submit" name="Submit">
	<button type="button" onclick="document.location.href='/FinalLabTask4/view/login.php'">Login</button>
	
</form>


	<script>
		
		function validation(){
			var id = document.getElementById('id').value;
			var username=document.getElementById('username').value;
			var password=document.getElementById('password').value;
			var email=document.getElementById('email').value;
			var dob =document.getElementById('dob').value;

			if(id==""){
				document.getElementById('errorMsg').innerHTML="ID is empty";
				document.getElementById('errorMsg').style.color = "red";
					return false;	
			}
			else if(username == ""){
                    document.getElementById('errorMsg').innerHTML = "Name is empty";
                    document.getElementById('errorMsg').style.color = "red";
					return false;	
			}
			 else if(password == ""){
                    document.getElementById('errorMsg').innerHTML = "Password is empty";
                    document.getElementById('errorMsg').style.color = "red";
					return false;
			}
			 else if(email == ""){
                    document.getElementById('errorMsg').innerHTML = "Email is empty";
                    document.getElementById('errorMsg').style.color = "red";
					return false;	
             }
                else if(dob == ""){
                    document.getElementById('errorMsg').innerHTML = "DOB is empty";
                    document.getElementById('errorMsg').style.color = "red";
					return false;	
				}
			return true;

		}
	</script>

	<p id="errorMsg"></p>

</body>
</html>