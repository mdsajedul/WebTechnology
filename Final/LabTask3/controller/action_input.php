<?php

require_once('../model/model_InputView.php');


CureentUser($id,$uname,$psw,$email,$dob);
echo $id;

$id=$uname=$psw=$email=$dob="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$counter=0;
	if(isset($_POST["id"]) & !empty($_POST["id"])){
		$id=$_POST["id"];
	}
	else{
		$counter=$counter+1;
	}
	if(isset($_POST["username"]) & !empty($_POST["username"])){
		$uname=$_POST["username"];
	}
	else{
		$counter=$counter+1;

	}
	if(isset($_POST["password"]) & !empty($_POST["password"])){
		$psw=$_POST["password"];
	}
	else{
		$counter=$counter+1;
	}
	if(isset($_POST["email"]) & !empty($_POST["email"])){
		$email=$_POST["email"];
	}
	else{
		$counter=$counter+1;
	}

	if(isset($_POST["dob"]) & !empty($_POST["dob"])){
		$dob=$_POST["dob"];
	}
	else{
		$counter=$counter+1;
	}

	AddUser($id,$uname,$psw,$email,$dob);
	CureentUser($id,$uname,$psw,$email,$dob);
	
}

Delete($id);




?>