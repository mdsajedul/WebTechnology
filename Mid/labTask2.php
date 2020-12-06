<!DOCTYPE html>
<html>
<head>
	<title>My Form</title>
</head>
<body>

	<?php
          $nameError = "";
          $idError= "";
          $mailError="";
          $addressError="";
          $cityError="";
          $stateError="";
          $countryError="";
          //$gender="";


	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["name"])) {
                  $nameError = "Name is required";
            }
            elseif(empty($_REQUEST["id"])){
                $idError="Student ID is required";
            }
            elseif(empty($_REQUEST["mail"])){
                $mailError=" Email is required";
            }
            elseif(empty($_REQUEST["address"])){
                $addressError="Address is required"; 
            }
            elseif(empty($_REQUEST["city"])){
                $cityError="City is required";
            }
            elseif(empty($_REQUEST["state"])){
                $stateError="State is required";
            }
            //elseif(empty($_REQUEST["county"])){
              //  $countryError="Country is required";
            //}
			else {
                echo "Student ID: " .$_REQUEST["id"];
                echo "<br/>";
                echo "Student Name is: " . $_REQUEST["name"];
                echo "<br/>";
                //$gender = $_REQUEST["gender"];
                echo "Gender is : " . $_REQUEST["gender"];
                echo "<br/>";


                
                echo "Email : " . $_REQUEST["mail"];
                echo "<br/>";
                echo "Address - Street Address : " . $_REQUEST["address"] .  " , " . $_REQUEST["address2"];
                echo "<br/>";
                echo " City : " . $_REQUEST["city"];
                echo "<br/>";
                echo " State/Province/Region : " .$_REQUEST["state"]; 
                echo "<br/>";
                echo " Zip/Postal Code : " .$_REQUEST["zip"];
                echo "<br/>";
                echo "Country : " .$_REQUEST["country"];


                
                echo "<br/>";
                echo "<br/>";
                 
			}
		} 
	?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <b>Student ID</b> <br/><input type="text" name="id" required>

    <br/>
    <span><?php echo $idError; ?></span><br />

	<b>Student Name</b> <br/> <input type="text" name="name" required>

	<br />
    <span><?php echo $nameError; ?></span><br />
    <br/>

    <b>Gender</b> <br/>
    <input type="radio" id="male" name="gender" value="Male"> Male 
    <br/>
    <input type="radio" id="female" name="gender" value="Female">Female

    <br/>

    <b>Student Email</b> <br/> <input type="text" name="mail"  required>
    <br />
    <span><?php echo $mailError; ?></span><br />
    
    <br /><br />

    <b>Address</b> <br/>
    <input type="text" name="address" required> <br/><small>Street Address</small> 
    <span><?php echo $addressError; ?></span>
    <br/>
    <br/>
    <input type="text" name="address2"> <br/><small>Address Line 2</small>
    <br/>
    <br/>
    
     <input type="text" name="city" required><br/> City
    <span><?php echo $cityError; ?></span>

    <br /><br />
    

    <input type="text" name="state" required> <br/> State/Province/Region 
    <span><?php echo $stateError; ?></span>
    
    <br /><br />
    
    <input type="text" name="zip" > <br/><small> Zip/Postal Code</small>
	
    <br /><br />
    
    <select name="country" value="0" >
        <option value="Bangladesh">Bangladesh</option>
        <option value="India">India</option>
        <option value="Pakistan">Pakistan</option>
        <option value="Bhutan">Bhutan</option>
        <option value="Nepal">Nepal</option>
    </select><br/><small>Country</small>

    <br/><br/>

	<input type="submit">
	</form>
</body>
</html>
