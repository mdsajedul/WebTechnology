<!DOCTYPE html>
<html>
<head>
  <title>Edit Resume</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/final/project/data/css/editprofile.css">
  <link rel="stylesheet" type="text/css" href="/final/project/data/css/form_style.css">


</head>
<body>


  <div class='header'>
       <?php include 'header.php' ?>
  </div>


<div class="card">

  <div>
    <h1>Edit Resume </h1>
    <p>Please fill in this form to update Resume.</p>
  </div>

  <div class="row">
  
    <form  action="/Final/Project/controller/action_editprofile.php" method="POST" enctype="multipart/form-data">
      <?php require("../controller/action_view_jobseeker.php") ;?>

    <div class="leftProfile">

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
        <label for="dob" >Date of Birth</label>
        <input type="date" name="dob" value="<?php echo $dob; ?>">
        <br/><br/>
      </div>

      <div>
         <label for="gender"><b>Select Gender </b> </label><br/>
         <input type="radio" id="male"  name="gender" value="Male" <?php if($gender=="Male") echo 'checked="checked"'; ?>>Male
          <br/>
         <input type="radio" id="female" name="gender" value="Female" <?php if($gender=="Female") echo 'checked="checked"'; ?>>Female
          <br/>
          <input type="radio" id=other name="gender" value="Other" <?php if($gender=="Other") echo 'checked="checked"'; ?>>Other
          <br/><br/>
      </div>

      <div>
        <label for ="religion" >Religion</label>
        <input type="text" name="religion" value="<?php echo $religion; ?>">
        <br/><br/>
      </div>

      <div>
        <label><b>Select Address</b></label>
        <br/><br/>
      </div>

      <div>
         Divition: <select name="divition" id="divition">
                        <option value="" selected="selected"><?php echo $divition; ?></option>
                   </select>
                   <br/><br/>
      </div>
        
      <div>
        Sub District: <select name="subDistrict" id="subDistrict">
                        <option value="" selected="selected"><?php echo $subDistrict; ?></option>
                     </select>
                     <br/><br/>

      </div>


      <div>
        <label>Road</label>
          <input type="text" value="<?php echo $road; ?>" name="road">
          <br/><br/>
      </div>




      
    </div>



    <div class="rightPart">

      <div class="image">
        <img src="<?php echo $proImage; ?>"  height="120px" width="120px">
      </div>

      <div>
         <input type='file' name="file">
          <br/><br/>
      </div>

      <div>
        <label for="mdname" >Mother name</label>
        <input type="text" name="mothername" value="<?php echo $mothername; ?>">
         <br/><br/>
      </div>

      <div>
        <label for="email">Email</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
         <br/><br/>
      </div>

      <div>
        <label for="marital" >Marital Status</label> <br/>
        <input type="radio" id="unmarried" name="marital" value="Unmarried" <?php if($maratialStatus=="Unmarried") echo 'checked="checked"'; ?>>Unmarried
          <br/>
        <input type="radio" id="married" name="marital" value="Married"  <?php if($maratialStatus=="Married") echo 'checked="checked"'; ?>>Married
         <br/><br/>
      </div>


      <div>
        <label for="skills"><b>Select your skill from following list</b></label><br/>
         <select name="skills" value="">
          <option name="Accounting"><?php echo $skill; ?></option>
          <option name="Accounting">Accounting/Finance</option>
          <option name="bank">Bank /Non Bank Fin.Institution </option>
          <option name="education">Education/Training </option>
          <option name="engineer">Engineer/Architect </option>
          <option name="design">Design/Creative </option>
          <option name="agro">Agro(Plant/Animal/Fisheries) </option>
          <option name="helath">Beauty Care/ Health & Fitness </option>
          <option name="hr">HR/Org. Development </option>
          <option name="it">IT/Telecommunication  </option>
        </select>
         <br/><br/>
      </div>
      

      <div>
        District: <select name="district" id="district">
                     <option value="" selected="selected"><?php echo $district; ?></option>
                  </select>
                   <br/><br/>
      </div>

      <div>
        <label>Post Office</label>
          <input type="text" value="<?php echo $postOffice; ?>" name="postoffice">
           <br/><br/>
      </div>

    </div>


    <div style="text-align: left;">
      <button type="button" onClick="document.location.href='/final/project/view/jhome.php'">Cancel</button>
      <button type="submit" name="submit">Submit</button>
    </div>
    
    </form>

  </div>

</div>


  <div class="footer">
    <?php include 'footer.php' ?>
  </div>

<script src="/Final/Project/data/js/districtWithSubDistrict.js">
</script>
</body>
</html>