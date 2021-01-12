
<!DOCTYPE html>
<html>
<head>
	<title>Edit Resume</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="/final/project/data/css/form_style.css">
    <link rel="stylesheet" type="text/css" href="/final/project/data/css/page_style.css">
</head>
<body>

<?php
error_reporting(0);

require("../model/model_jobseeker.php");

$uname=$_SESSION["id"];

$firstname = $lastname = $email = $gender = $skill = $fathername=$mothername=$dob=$religion=$marital=$divition=$district=$subDistrict=$postOffice=$road=$filename= "";
$firstnameErr = $lastnameErr = $emailErr = $skillErr= $genderErr =$fdnameErr=$mdnameErr=$dobErr=$religionErr=$divitionErr=$districtErr=$subDistrictErr=$postOfficeErr=$roadErr=$filenameErr= "";
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

  if(isset($_POST["fathername"]) & !empty($_POST["fathername"])){
  	$fathername=test_input($_POST["fathername"]);
  }
  else
  {
  	$fdnameErr="Invaild Father name";
  	$counter=$counter+1;
  }

  if(isset($_POST["mothername"]) & !empty($_POST["mothername"])){
  	$mothername=test_input($_POST["mothername"]);
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

  if(isset($_POST["divition"]) & !empty($_POST["divition"])){
    $divition=test_input($_POST["divition"]);
  }
  else{
    $divitionErr="Invalid Divition";
    $counter=$counter+1;
  }


if(isset($_POST["district"]) & !empty($_POST["district"])){
    $district=test_input($_POST["district"]);
  }
  else{
    $districtErr="Invalid District";
    $counter=$counter+1;
  }

if(isset($_POST["subDistrict"]) & !empty($_POST["subDistrict"])){
    $subDistrict=test_input($_POST["subDistrict"]);
  }
  else{
    $subDistrictErr="Invalid Sub District";
    $counter=$counter+1;
  }

  if(isset($_POST["postoffice"]) & !empty($_POST["postoffice"])){
    $postOffice=test_input($_POST["postoffice"]);
  }
  else{
    $postOfficeErr="Invalid Post Office";
    $counter=$counter+1;
  }

  if(isset($_POST["road"]) & !empty($_POST["road"])){
    $road=test_input($_POST["road"]);
  }
  else{
    $roadErr="Invalid Road";
    $counter=$counter+1;
  }

  if(isset($_POST["submit"])){

    $files= $_FILES["file"];

    $filename=$files['name'];
    $fileerror=$files['error'];
    $filetmp=$files['tmp_name'];

    $fileext=explode('.',$filename);
    $filecheck=strtolower(end($fileext));

    $fileextstored=array('png','jpg','jpeg');

    if(in_array($filecheck,$fileextstored)){
      $destinationfile='../data/profileimage/'.$filename;
      move_uploaded_file($filetmp,$destinationfile);
    }

  }
  else{
    $filenameErr="Invalid file";
    $counter=$counter+1;
  }






  if($counter == 0 && updateProfile($uname,$firstname,$lastname,$email,$fathername,$mothername,$gender,$skill,$dob,$religion,$marital,$divition,$district,$subDistrict,$postOffice,$road,$destinationfile)==1 ) {
    $signup_status = "Update Resume Successfully";
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




<div >
    <?php include '../view/header.php' ?>
  </div>

<div class="card">

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data"  onsubmit="return validation()">
  <div  class="leftProfile">
      
    <h1>Edit Resume </h1>
    <p>Please fill in this form to update Resume.</p>
    <br />

    <div>
      <label for="firstname"><b>First Name</b></label>
      <input type="text"  name="firstname" id="firstname" value="<?php echo $firstname; ?>">
      <span><?php echo $firstnameErr;?></span>
      <a id="firstnameErr"></a>
    </div>

    <br />

    <div>
      <label for="lastname"><b>Last Name</b></label>
      <input type="text" id="lastname" value="<?php echo $lastname; ?>" name="lastname">
      <span><?php echo $lastnameErr;?></span>
      <a id="lastnameErr"></a>
    </div>

    <br />

    <div>
      <label for="email"><b>Email</b></label>
      <input type="text" id="email" value="<?php echo $email; ?>" name="email">
      <span><?php echo $emailErr;?></span>
      <a id="emailErr"></a>
    </div>

    <br />


    <br/>

    <div>
		<label for="fdname">Father name</label>
		<input type="text" id="fathername" name="fathername" value="<?php echo $fathername; ?>">
		 <span><?php echo $fdnameErr;?></span>
     <a id="fathernameErr"></a>
		<br/><br/>
	</div>

	<div>
		<label for="mdname" >Mother name</label>
		<input type="text" id="mothername" name="mothername" value="<?php echo $mothername; ?>">
		 <span><?php echo $mdnameErr;?></span>
     <a id="mothernameErr"></a>
		<br/><br/>
		</div>

	<div>
		<label for="dob" >Date of Birth</label>
<input type="date" name="dob" value="<?php echo $dob; ?>">
		 <span><?php echo $dobErr;?></span>
 		<br/><br/>
	</div>

    <div>
      <label for="gender"><b>Select Gender </b> </label>
      <br>
      <input type="radio" id="male"  name="gender" value="Male" >Male
      <br/>
      <input type="radio" id="female" name="gender" value="Female">Female
      <br/>
      <input type="radio" id=other name="gender" value="Other">Other
      <br/><br/>
  </div>



  <div>
		<label for ="religion" >Religion</label>
<input type="text" id="religion" name="religion" value="<?php echo $religion; ?>">
		 <span><?php echo $religionErr;?></span>
     <a id="religionErr"></a>
		 <br/><br/>
  </div>

	<div>
		<label for="marital" >Marital Status</label> <br/>
		<input type="radio" id="unmarried" name="marital" value="Unmarried" checked="">Unmarried
		<br/>
	<input type="radio" id="married" name="marital" value="Married" >Married
 		<br/><br/>
		</div>
    	  <div>
        <label for="skills"><b>Select your skill from following list</b></label><br/>
        <select name="skills" value="0">
          <option name="Accounting"><?php echo $skill; ?></option>
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


      <div class="Address">
  <label><b>Select Address</b></label><br/><br/>

  Divition: <select name="divition" id="divition">
<option value="" selected="selected"><?php echo $divition; ?></option>  </select>
<span><?php echo $divitionErr;?></span>
  <br><br>
District: <select name="district" id="district">
    <option value="" selected="selected"><?php echo $district; ?></option>
  </select>
  <span><?php echo $districtErr;?></span>
  <br><br>
Sub District: <select name="subDistrict" id="subDistrict">
    <option value="" selected="selected"><?php echo $subDistrict; ?></option>
  </select>
  <span><?php echo $subDistrictErr;?></span>
  <br><br>
</div>

<div>
  <label>Post Office</label>
  <input type="text" id="postoffice" value="<?php echo $postOffice; ?>" name="postoffice">
  <span><?php echo $postOfficeErr;?></span>
  <a id="postofficeErr"></a>
</div>

<br/><br/>

<div>
  <label>Road</label>
  <input type="text" id="road" value="<?php echo $road; ?>" name="road">
  <span><?php echo $roadErr;?></span>
  <a id="roadErr"></a>
</div>

<br/>



    <div>
      <button type="button" onClick="document.location.href='/final/project/view/jhome.php'">Cancel</button>
      <button type="submit" name="submit">Submit</button>
    </div>
  </div>


<div class="rightProfile">
    <input type='file' name="file">
</div>


</form>

</div>

<br />

<?php 
  echo $signup_status;
?>

<script type="text/javascript" src="/Final/Project/data/js/editprofile_validation.js"></script>

<script src="/Final/Project/data/js/districtWithSubDistrict.js"></script>


 <div>
    <?php include '../view/footer.php' ?>
  </div>





</body>
</html>
