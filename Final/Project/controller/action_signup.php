<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php

require("../model/model_jobseeker.php");

$firstname = $lastname=$fatherName=$motherName=$maratialStatus=$dob = $email=$uname = $psw = $psw_repeat = $gender = $skill =  "";
$firstnameErr = $lastnameErr = $emailErr=$unameErr = $pswErr = $psw_repeatErr= $skillErr= $genderErr =$psw_not_match= "";
$signup_status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $counter = 0;
  if (isset($_POST["firstname"]) & !empty($_POST["firstname"])) {
    $firstname = test_input($_POST["firstname"]);
  }
  else {
    $firstnameErr = "Invalid FirstName";
    $counter = $counter + 1;
  }

  if (isset($_POST["lastname"]) & !empty($_POST["lastname"])) {
    $lastname = test_input($_POST["lastname"]);
  }
  else {
    $lastnameErr = "Invalid LastName";
    $counter = $counter + 1;
  }

  if (isset($_POST["email"]) & !empty($_POST["email"])) {
    $email = test_input($_POST["email"]);
  }
  else {
    $emailErr = "Invalid Email";
    $counter = $counter + 1;
  }

  if(isset($_POST["username"]) & !empty($_POST["username"])){
    $uname=test_input($_POST["username"]);
  }
  else{
    $unameErr="Invalid Username";
    $counter=$counter+1;
  }

  if (isset($_POST["psw"]) & !empty($_POST["psw"])) {
    $psw = test_input($_POST["psw"]);
  }
  else {
    $pswErr = "Invalid Password";
    $counter = $counter + 1;
  }

  if (isset($_POST["psw_repeat"]) & !empty($_POST["psw_repeat"])) {
    $psw_repeat = test_input($_POST["psw_repeat"]);
  }
  else {
    $psw_repeatErr = "Invalid Password Repeat";
    $counter = $counter + 1;
  }

  if(isset($_POST["gender"]) & !empty($_POST["gender"])){
    $gender=test_input($_POST["gender"]);
  }
  else{
    $genderErr="Invalid gender";
    $counter=$counter + 1;
  }
  
  if(isset($_POST["skills"]) & !empty($_POST["skills"])){
    $skill=test_input($_POST["skills"]);
  }
  else{
    $skillErr="Invalid skill";
    $counter=$counter+1;
  }
  if($psw==$psw_repeat){
    $counter=$counter+0;
  }
  else{
    $counter=$counter+1;
    $psw_not_match="Password not match";

  }
  

  if($counter == 0 && signupJobseeker($uname,$psw,$firstname,$lastname,$fatherName,$motherName,$email,$maratialStatus,$gender,$dob) ==1 ) {
    $signup_status = "Sign Up Successful";
  }
  else {
    $signup_status = "Sign Up Failed";
    $counter = 0;
  }
}
else {
	$signup_status = "Sign Up Failed";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<div style="display:inline-block;">
    <?php include '../view/header.php' ?>
  </div>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" onsubmit="return validation()">
  <div>
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <br />

    <div>
      <label for="firstname"><b>First Name</b></label>
      <input type="text" placeholder="Enter your firstname" name="firstname" id="firstname">
      <span><?php echo $firstnameErr;?></span>
      <p id="firstnameErr"></p>
    </div>

    <br />

    <div>
      <label for="lastname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter your lastname" name="lastname" id="lastname">
      <span><?php echo $lastnameErr;?></span>
       <p id="lastnameErr"></p>
    </div>

    <br />

    <div>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email">
      <span><?php echo $emailErr;?></span>
      <p id="emailErr"></p>
    </div>

    <br />

    <div>
      <label for="username"><b>Username</b></label>
      <input type="text" name="username" id="username" placeholder="Enter an username">
      <span><?php echo $unameErr;?></span>
      <p id="usernameErr"></p>
    </div>

    <br/>

    <div>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="psw">
      <span><?php echo $pswErr;?></span>
      <p id="pswErr"></p>
    </div>

    <br />
    
    <div>
      <label for="psw_repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw_repeat" id="psw_repeat">
      <span><?php echo $psw_repeatErr;
          echo "\n";
          echo $psw_not_match;
      ?></span>
       <p id="psw_repeatErr"></p>
    </div>

    <br/>

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
      <button type="button" onClick="document.location.href='/final/project'">Cancel</button>
      <button type="button" onClick="document.location.href='/final/project/view/login.php'">Login</button>
      <button type="submit">Submit</button>
    </div>
  </div>
</form>

<script type="text/javascript" src="/Final/Project/data/js/signup_validation.js"></script>


<br />

<?php 
  echo $signup_status;
?>

 <div>
    <?php include '../view/footer.php' ?>
  </div>
</body>
</html>
