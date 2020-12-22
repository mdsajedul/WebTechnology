<?php
require ('../model/User_Model.php');

$counter =0;
$uname="";
$psw="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["username"])){
		echo "Enter username";
	}
	else if (empty($_POST["password"])) {
		echo "Enter Password";
	}
	else{
		$uname= $_POST["username"];
		$psw= $_POST["password"];
	}

	if(UserLogin($uname,$psw) == 1){
		echo "Login Complete";
		?>
		<html>
		<script>window.location.href="/FinalLabTask4/view/home.php";
	</script>
	</html>
		<?php
	}
	else{
		echo "Login Failed";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form method="POST" onsubmit="return Validation()">

	<label for="username">Username</label>
	<input type="text" name="username" id="username"> <br/><br/>
	<label for="password">Password</label>
	<input type="password" name="password" id="password"><br/><br/>
	<input type="submit" name="Login">
	<button type="button" onclick="document.location.href='/FinalLabTask4/view/signup.php'">Sign Up</button>

</form>

<script>
	function Validation(){
		var username=document.getElementById('username').value;
		var password=document.getElementById('password').value;

		if(username==""){
			document.getElementById('errorMsg').innerHTML="Username must required";
			document.getElementById('errorMsg').style.color='red';
			return false;
		}
		else if(password==""){
			document.getElementById('errorMsg').innerHTML="Password must required";
			document.getElementById('errorMsg').style.color='red';
			return false;
		}
		return true;

	}
</script>

<p id="errorMsg"></p>
</body>
</html>