

<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
</head>
<body>

<div>
	<?php include 'header.php' ?>
</div>



<form  action="/Final/Project/controller/action_editprofile.php" method="POST">
<div class=profile>
  <?php require("../controller/action_view_jobseeker.php") ;?>
  <h1>Edit Resume </h1>
    <p>Please fill in this form to update Resume.</p>
    <br />
<div>	
<label for="fname">First Name</label>
<input type="text" name="firstname" value="<?php echo $firstname; ?>">
<br/><br/>
</div>

<div>
<label for="lname">Last Name</label>
<input type="text" name="lastname" value="<?php echo $lastname; ?>">
 <br/><br/>
</div>

<div>
<label for="fdname">Father name</label>
<input type="text" name="fathername" value="<?php echo $fathername; ?>">
<br/><br/>
</div>

<div>
<label for="mdname" >Mother name</label>
<input type="text" name="mothername" value="<?php echo $mothername; ?>">
<br/><br/>
</div>

<div>
<label for="dob" >Date of Birth</label>
<input type="text" name="dob" value="<?php echo $dob; ?>">
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
<input type="text" name="religion" value="<?php echo $religion; ?>">
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
<label for="email">Email</label>
<input type="text" name="email" value="<?php echo $email; ?>">
 <br/><br/>
</div>

    <br />
    

    <br /><br/>

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

<div class="Address">
  <label><b>Select Address</b></label><br/><br/>

  Divition: <select name="divition" id="divition">
    <option value="" selected="selected">Select Divition</option>
  </select>
  <br><br>
District: <select name="district" id="district">
    <option value="" selected="selected">Please select District first</option>
  </select>
  <br><br>
Sub District: <select name="subDistrict" id="subDistrict">
    <option value="" selected="selected">Please select Sub District first</option>
  </select>
  <br><br>
</div>

<div>
  <label>Post Office</label>
  <input type="text" name="postoffice">
</div>

<br/><br/>

<div>
  <label>Road</label>
  <input type="text" name="road">
</div>


<br/>

<div>
	<button type="button" onClick="document.location.href='/project/view/profile.php'">Cancel</button>
    <button type="submit">Submit</button>
</div>


<br/><br/>

</div>
</form>

<script src="/Final/Project/data/js/districtWithSubDistrict.js">

</script>

<div>
	<?php include 'footer.php' ?>
</div>

</body>
</html>