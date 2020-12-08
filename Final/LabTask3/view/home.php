<!DOCTYPE html>
<html>
<head>
	<title>User Information</title>
</head>
<body>

	
	<div>
		 <form action = "/FinalLabTask3/controller/action_input.php" method = "POST">
			<h3>Enter your information : </h3>
			<label for="id">ID</label>
			<input type="text" name="id">


			<label for="username">Username</label>
			<input type="text" name="username">

			<label for="password">Password</label>
			<input type="Password" name="password">

			<label for="email">Email</label>
			<input type="text" name="email">

			<label for="dob">Date of Birth</label>
			<input type="Date" name="dob">

			<input type="submit" value="Submit">
		</form>
	</div>
<br/><br/>
<?php 
		require ("../controller/action_input.php");
		//CurrentUser($id,$uname,$psw,$email,$dob);
		echo "Id:";
		echo  $id;
	 ?>


</body>
</html>