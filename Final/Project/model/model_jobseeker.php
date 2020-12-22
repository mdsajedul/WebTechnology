<?php

$serverName="localhost";
$username="root";
$password="";
$dbname="findyourjob";

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

?>