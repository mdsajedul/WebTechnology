<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="FinalLabTask4/controller/JS/signupValidation.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width",initial-scale=1.0>
	<title>Sign Up</title>

	
</head>
<body>
<form action="/FinalLabTask4/controller/signup_control.php" method="POST" onsubmit="return validation()">
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