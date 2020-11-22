
<!DOCTYPE html>
<html>
<head>
	<title>Edit Resume</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php

$firstname = $lastname = $email = $psw = $psw_repeat = $gender = $skill = $fdname=$mdname=$dob=$religion=$marital= "";
$firstnameErr = $lastnameErr = $emailErr = $pswErr = $psw_repeatErr= $skillErr= $genderErr =$fdnameErr=$mdnameErr=$dobErr=$religionErr= "";
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

  if(isset($_POST["fdname"]) & !empty($_POST["fdname"])){
  	$fdname=test_input($_POST["fdname"]);
  }
  else
  {
  	$fdnameErr="Invaild Father name";
  	$counter=$counter+1;
  }

  if(isset($_POST["mdname"]) & !empty($_POST["mdname"])){
  	$mdname=test_input($_POST["mdname"]);
  }
  else{
  	$mdnameErr="Invalid Mother name";
  	$counter=$counter+1;
  }

  if(isset($_POST["dob"]) & !empty($_POST["dob"])){
  	$dob=test_input($_POST["dob"]);
  }
  else{
  	$dobErr="Invalid date of birth";
  	$counter=$counter+1;
  }
  if (isset($_POST["religion"]) & !empty($_POST["religion"])) {
  	$religion=test_input($_POST["religion"]);
  }
  else{
  	$religionErr="Invalid religion";
  	$counter=$counter+1;
  }

  if(isset($_POST["marital"]) & ! empty($_POST["marital"])){
  	$marital=test_input($_POST["marital"]);
  }

  

  if($counter == 0) {
    $signup_status = "Update Resume Successfully";

    $user = fopen("../data/users.txt", "w") or die("Unable to open file!");
    fwrite($user, $firstname. "," . $lastname. ",". $email. ",". $psw.",".$gender. ",".$skill.",".$fdname.",".$mdname.",".$dob.",".$religion.",".$marital);
    fwrite($user, "\n");
    fclose($user);
  }
  else {
    $signup_status = "Resume update failed";
    $counter = 0;
  }
}
else {
	$signup_status = "Resume update failed";
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
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <div>
    <h1>Edit Resume </h1>
    <p>Please fill in this form to update Resume.</p>
    <br />

    <div>
      <label for="firstname"><b>First Name</b></label>
      <input type="text" placeholder="Enter your firstname" name="firstname">
      <span><?php echo $firstnameErr;?></span>
    </div>

    <br />

    <div>
      <label for="lastname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter your lastname" name="lastname">
      <span><?php echo $lastnameErr;?></span>
    </div>

    <br />

    <div>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email">
      <span><?php echo $emailErr;?></span>
    </div>

    <br />

    <div>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw">
      <span><?php echo $pswErr;?></span>
    </div>

    <br />
    
    <div>
      <label for="psw_repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw_repeat">
      <span><?php echo $psw_repeatErr;?></span>
    </div>

    <br/>

    <div>
		<label for="fdname">Father name</label>
		<input type="text" name="fdname" placeholder ="Father name">
		 <span><?php echo $fdnameErr;?></span>
		<br/><br/>
	</div>

	<div>
		<label for="mdname" >Mother name</label>
		<input type="text" name="mdname" placeholder ="Mother name">
		 <span><?php echo $mdnameErr;?></span>
		<br/><br/>
		</div>

	<div>
		<label for="dob" >Date of Birth</label>
		<input type="text" name="dob" placeholder ="DD/MM/YY">
		 <span><?php echo $dobErr;?></span>
 		<br/><br/>
	</div>

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
		<label for ="religion" >Religion</label>
		<input type="text" name="religion" placeholder  = "Religion Name">
		 <span><?php echo $religionErr;?></span>
		 <br/><br/>
  </div>

	<div>
		<label for="marital" >Marital Status</label> <br/>
		<input type="radio" id="unmarried" name="marital" value="Unmarried" checked>Unmarried
		<br/>
	<input type="radio" id="married" name="marital" value="Married">Married
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
      <button type="submit">Submit</button>
    </div>
  </div>
</form>

<br />

<?php 
  echo $signup_status;
?>

 <div>
    <?php include '../view/footer.php' ?>
  </div>





</body>
</html>
