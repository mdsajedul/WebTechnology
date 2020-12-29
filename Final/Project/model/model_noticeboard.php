<?php

$serverName="localhost";
$username="root";
$password="";
$dbname="findyourjob";
$noticeDate;
$noticeHeader;
$noticeBody;

$conn =new mysqli($serverName,$username,$password,$dbname);


function viewNoticeboard(){
	global $conn;
	global $noticeDate,$noticeHeader,$noticeBody;

	$sql="SELECT * from noticeboard ";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
 		 while($row = $result->fetch_assoc()) {

 		 	$noticeDate=$row["noticeDate"];
 		 	$noticeHeader=$row["noticeHeader"];
 		 	$noticeBody=$row["noticeBody"];

 		 }


 	}

 	else{
 		echo "0 result";
 	}

}



?>