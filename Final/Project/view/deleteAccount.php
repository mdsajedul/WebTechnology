

<?php
error_reporting(0);
session_start();
$uname="";
$uname=$_SESSION["id"];

require ("../model/model_jobseeker.php");

$text="Delete Account";
$deleteErr="";
$deleteErr2="";
$delete="";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $counter = 0;
      if (isset($_POST["delete"]) & !empty($_POST["delete"])) {
       $delete = $_POST["delete"];
      
      }
      else {
        $counter = $counter + 1;
          $deleteErr2="Text Box blank";
      }


      if($text !=$delete){
      	$counter = $counter + 1;
      	$deleteErr="Not match ";
      }

      if( $counter==0 && DeleteAccount($uname) == true){

      	session_destroy();

      	//echo "Not delet";
      	echo "<script> window.location.assign('../index.php'); </script>";


      }

}

?>




<!DOCTYPE html>
<html>
<head>
	<title>Delete Account</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="/final/project/data/css/form_style.css">
    <link rel="stylesheet" type="text/css" href="/final/project/data/css/page_style.css">
</head>
<body>

	<div>
		<?php include 'header.php' ?>
	</div>




	<div class="topnav">
    <a href="/final/project/index.php">Home</a>
    <a href="jobseeker.php">My Jobs</a>
    <a href="contact.php" >Contact with us</a>
    <?php
    //session_start();
     
			
			if ($_SESSION["id"]==null){

				?><a href="login.php" style="float: right;">Login</a> 
				<a href="signup.php" style="float: right;">Sign Up</a>
				 <?php
			}
			else{
				?>
				<a href="/final/project/controller/action_logout.php" style="float: right;">Sign out</a>
				<a href="jhome.php" style="float: right;"><?php echo ucfirst($_SESSION["id"]) ; ?></a>  


				<?php

			}
		?>
  </div>



  <div class="card">

  	<h3>Delete Profile</h3>

  	<form method = "POST" onsubmit="return validation()">
  		<label>If you want to delete your account.Please write 'Delete Account' in textbox</label><br/><br/>

  		<input type="text" name="delete" id="deletez">
  		<p id="deleteErr"></p>
  		<span><?php echo $deleteErr2; ?></span>
  		
  		<br/><br/>

  		 <button type="button" onClick="document.location.href='/final/Project'">Cancel</button>
  		 <input type="submit" value="Delete" style="background-color: red">
  	</form>
  	<br/><br/>
  	 <?php
  	echo $deleteErr;
  	
  ?>
  	
  </div>

<script type="text/javascript" src="/Final/Project/data/js/delete_validation.js">
	

</script>


  <div>
    <?php include '../view/footer.php' ?>
  </div>


</body>
</html>