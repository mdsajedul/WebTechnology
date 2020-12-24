<?php
session_start();

$serverName="localhost";
$username="root";
$password="";
$dbname="findyourjob";
$firstname;
$lastname;
$fathername;
$mothername;
$dob;
$maratialStatus;
$email;
$password;
$gender;
$uname;
$religion;
$skill;
$divition;
$district;
$subDistrict;
$postOffice;
$road;
$proImage;

$conn =new mysqli($serverName,$username,$password,$dbname);


function LoginJobseeker(&$uname,$psw){
	global $conn;
	

	$sql = "SELECT username FROM `jobseeker` WHERE username='$uname' and password='$psw'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {

		return true;
	}
	else {
		return false;
	}
}



function signupJobseeker($uname,$psw,$firstname,$lastname,$fatherName,$motherName,$email,$maratialStatus,$gender,$dob){

	global $conn;
	 $stmt = $conn -> prepare("INSERT INTO jobseeker (username,password,firstname,lastname,fathername,mothername,email,maratialstatus,gender,dob) Values (?,?,?,?,?,?,?,?,?,?) ");
	  $stmt -> bind_param("ssssssssss",$uname,$psw,$firstname,$lastname,$fatherName,$motherName,$email,$maratialStatus,$gender,$dob);
	   $stmt -> execute();
	   return 1;


}

function detailsView($uname){
	global $conn;
	global $firstname,$lastname,$fathername,$mothername,$email,$maratialStatus,$religion,$gender,$dob,$uname,$password,$skill,$divition,$district,$subDistrict,$postOffice,$road,$proImage;
	$sql="SELECT * from jobseeker where username='$uname' ";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
 		 while($row = $result->fetch_assoc()) {
 		 	$uname=$row["username"];
 		 	$password=$row["password"];
 		 	$firstname=$row["firstname"];
 		 	$lastname=$row["lastname"];
 		 	$fathername=$row["fathername"];
 		 	$mothername=$row["mothername"];
 		 	$email=$row["email"];
 		 	$maratialStatus=$row["maratialstatus"];
 		 	$skill=$row["skill"];
 		 	$religion=$row["religion"];
 		 	$gender=$row["gender"];
 		 	$dob=$row["dob"];
 		 	$divition=$row["division"];
 		 	$district=$row["preDistrict"];
 		 	$subDistrict=$row["preSubDistrict"];
 		 	$postOffice=$row["prePostOffice"];
 		 	$road=$row["preRoad"];
 		 	$proImage=$row["picture"];

 		 	

 	 	}
	}

 	else {
  		echo "0 results";
	}

}


function updateProfile($uname,$firstname,$lastname,$email,$fathername,$mothername,$gender,$skill,$dob,$religion,$marital,$divition,$district,$subDistrict,$postOffice,$road,$destinationfile){

	global $conn;
	 $sql ="UPDATE `jobseeker` SET `firstname`='$firstname',`lastname`='$lastname',`fathername`='$fathername',`mothername`='$mothername',`email`='$email',`maratialstatus`='$marital',`skill`='$skill',`religion`='$religion',`gender`='$gender',`dob`='$dob',`division`='$divition',`preDistrict`='$district',`preSubDistrict`='$subDistrict',`prePostOffice`='$postOffice',`preRoad`='$road',picture='$destinationfile' WHERE `username`='$uname' " ;

	if ($conn->query($sql) == TRUE) {
  		return 1;

	}
	 else {
 	return 0;
	}
}

?>