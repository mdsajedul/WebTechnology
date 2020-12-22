<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>


<form action="/FinalLabTask4/controller/action_login.php" method="POST" onsubmit="return Validation()">

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