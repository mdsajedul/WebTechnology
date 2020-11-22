<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
</head>
<body>

<div>
	<?php include 'header.php' ?>
</div>
<div>
	<a href="editprofile.php">Edit Profile</a><br/><br/>
</div>
<form>
<div class=profile>
<div>
<label for="fname">First Name</label>
<input type="text" name="fname" placeholder value="Sajedul">
</div>
<div>
<br/><br/>
<label for="lname">Last Name</label>
<input type="text" name="lname" placeholder="Islam">
 <br/><br/>
</div>

<div>
<label for="fdname">Father name</label>
<input type="text" name="fname" placeholder value="">
<br/><br/>
</div>

<div>
<label for="mdname" >Mother name</label>
<input type="text" name="mdname" placeholder value="">
<br/><br/>
</div>

<div>
<label for="dob" >Date of Birth</label>
<input type="text" name="dob" placeholder value="">
 <br/><br/>
</div>

 <div>
<label for="gender">Gender</label>
<input type="text" name="gender" placeholder value="">
 <br/><br/>
</div>

 <div>
<label for ="religion" >Religion</label>
<input type="text" name="religion" placeholder value = "">
 <br/><br/>
</div>

 <div>
<label for="marital" >Marital Status</label>
<input type="text" name="marital" placeholder value="">
 <br/><br/>
</div>

 <div>
<label for="email">Email</label>
<input type="text" name="email" placeholder value="">
 <br/><br/>
</div>

<div>
	 
	 <label for="skills" >Skill</label>
	<input type="text" name="skills" placeholder value="">	

</div>
  <br/><br/>

</div>
</form>


<div>
	<?php include 'footer.php' ?>
</div>

</body>
</html>