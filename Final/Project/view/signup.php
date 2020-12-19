<!DOCTYPE html>
<html>
<head>
	<title>SIgn Up</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>

	<div style="display: inline-block;">
		<?php include 'header.php' ?>
	</div>

	<form action="/Project/controller/action_signup.php" method="POST">
		<div>
			<h1>Sign Up </h1>
			<p> Please fill in this form to create an account .</p>
			<br/>

			<div>
      <label for="firstname"><b>First Name</b></label>
      <input type="text" placeholder="Enter your firstname" name="firstname">
    </div>

    <br />

    <div>
      <label for="lastname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter your lastname" name="lastname">
    </div>

    <br />

    <div>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email">
    </div>

    <br />

    <div>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw">
    </div>

    <br />
    
    <div>
      <label for="psw_repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw_repeat">
    </div>

    <br />

    <div>
      <label for="gender"><b>Select Gender </b> </label>
      <br>
      <input type="radio" id="male"  name="gender" value="Male" checked>Male
      <br/>
      <input type="radio" id="female" name="gender" value="Female">Female
      <br/>
      <input type="radio" id=other name="gender" value="Other">Other
      <br/><br/>
    </div>
      <div>
        <label for="skills"><b>Select your skill from following list</b></label><br/>
        <select name="skills" value="0">
          <option value="Accounting">Accounting/Finance</option>
          <option name="bank">Bank /Non Bank Fin.Institution </option>
          <option name="education">Education/Training </option>
          <option name="engineer">Engineer/Architect </option>
          <option name="design">Design/Creative </option>
          <option name="agro">Agro(Plant/Animal/Fisheries) </option>
          <option name="helath">Beauty Care/ Health & Fitness </option>
          <option name="hr">HR/Org. Development </option>
          <option name="it">IT/Telecommunication  </option>

        </select>
      </div>
      <br/><br/>
    <div>
      <button type="button" onClick="document.location.href='/project'">Cancel</button>
      <button type="button" onClick="document.location.href='/project/view/login.php'">Login</button>
      <button type="submit">Create Account</button>
    </div>
  </div>
		
	</form>

<div>
    <?php include 'footer.php' ?>
  </div>

</body>
</html>