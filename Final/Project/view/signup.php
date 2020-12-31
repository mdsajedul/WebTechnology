<!DOCTYPE html>
<html>
<head>
	<title>SIgn Up</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="/final/project/data/css/form_style.css">
    <link rel="stylesheet" type="text/css" href="/final/project/data/css/page_style.css">
</head>
</head>
<body>

	<div>
		<?php include 'header.php' ?>
	</div>

  <div class="topnav">
    <a href="/final/project/index.php">Home</a>
    <a href="jobseeker.php">My Jobs</a>
    <a href="contact.php" >Contact with us</a>
    <a href="signup.php" style="float: right;">Sign Up</a>
    <a href="login.php" style="float: right;">Login</a>
  </div>

<div class="card">
	<form action="/Final/Project/controller/action_signup.php" method="POST" onsubmit="return validation()">
		<div>
			<h1>Sign Up </h1>
			<p> Please fill in this form to create an account .</p>
			<br/>

			<div>
      <label for="firstname"><b>First Name</b></label>
      <input type="text" placeholder="Enter your firstname" name="firstname" id="firstname">
      <p id="firstnameErr"></p>
    </div>

    <br />

    <div>
      <label for="lastname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter your lastname" name="lastname" id="lastname">
      <p id="lastnameErr"></p>
    </div>

    <br />

    <div>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email">
      <p id="emailErr"></p>
    </div>

    <br />

    <div>
      <label for="username"><b>Username</b></label>
      <input type="text" name="username" id="username" placeholder="Enter an username" id="username">
      <p id="usernameErr"></p>
    </div>
    <br/>

    <div>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="psw">
      <p id="pswErr"></p>
    </div>

    <br />
    
    <div>
      <label for="psw_repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw_repeat" id="psw_repeat">
      <p id="psw_repeatErr"></p>
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
      <button type="button" onClick="document.location.href='/Final/project'">Cancel</button>
      <button type="button" onClick="document.location.href='/Final/project/view/login.php'">Login</button>
      <button type="submit">Signup</button>
    </div>
  </div>
		
	</form>

</div>

<div>
    <?php include 'footer.php' ?>
  </div>

<script type="text/javascript" src="/Final/Project/data/js/signup_validation.js"></script>

</body>
</html>