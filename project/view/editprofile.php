<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
</head>
<body>

<div>
	<?php include 'header.php' ?>
</div>



<form  action="/Project/controller/action_editprofile.php" method="POST">
<div class=profile>
  <h1>Edit Resume </h1>
    <p>Please fill in this form to update Resume.</p>
    <br />
<div>	
<label for="fname">First Name</label>
<input type="text" name="firstname" placeholder ="First name">
<br/><br/>
</div>

<div>
<label for="lname">Last Name</label>
<input type="text" name="lastname" placeholder="Last name">
 <br/><br/>
</div>

<div>
<label for="fdname">Father name</label>
<input type="text" name="fdname" placeholder ="Father name">
<br/><br/>
</div>

<div>
<label for="mdname" >Mother name</label>
<input type="text" name="mdname" placeholder ="Mother name">
<br/><br/>
</div>

<div>
<label for="dob" >Date of Birth</label>
<input type="text" name="dob" placeholder ="DD/MM/YY">
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
<input type="text" name="religion" placeholder  = "Religion">
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
<input type="text" name="email" placeholder ="Enter your email">
 <br/><br/>
</div>


 <div>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw">
    </div>

    <br />
    
    <div>
      <label for="psw_repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw_repeat">
    </div>

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

<div>
	<button type="button" onClick="document.location.href='/project/view/profile.php'">Cancel</button>
    <button type="submit">Submit</button>
</div>
<br/><br/>

</div>
</form>

<div>
	<?php include 'footer.php' ?>
</div>

</body>
</html>