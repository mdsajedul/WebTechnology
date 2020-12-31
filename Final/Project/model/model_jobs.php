<?php
session_start();
$serverName="localhost";
$username="root";
$password="";
$dbname="findyourjob";
$result="";
$jobId="";
$jobName;
$companyName;
$companyMail;
$jobResponsibility;
$employmentStatus;
$salary;
$educationalRequrment;
$otherBenifits;
$location;
$experienceRequirment;
$deadline;

$conn =new mysqli($serverName,$username,$password,$dbname);


function jobList(){
	global $conn;
	global $result;


	$sql="SELECT * from jobdetails ";
	$result = $conn->query($sql);
}


function jobSearch($searchText,$searchCategory){
	global $conn;
	global $result;
	if($searchCategory=="Organization"){
		$sql="SELECT * from jobdetails where companyName='$searchText' ";
		$result = $conn->query($sql);
	}
	else if($searchCategory=="location"){
		$sql="SELECT * from jobdetails where location='$searchText' ";
		$result = $conn->query($sql);
	}
	else if($searchCategory=="skill"){
		$sql="SELECT * from jobdetails where jobId='$searchText' ";
		$result = $conn->query($sql);
	}

	

}

function jobListView(){
	global $result,$jobId;
		if ($result->num_rows > 0) {

 		 	while($row = $result->fetch_assoc()) {
 		 		?>
 		 		<div class="jobButton">
 		 			<table>
 		 				<tr>


 		 		<a href="/final/Project/view/job_details_view.php?view=<?php echo $row["jobId"];?>">
 		 		<?php
 		 		echo "<h3>". $row["jobName"] . "</h3>";
 		 		?>
 		 		</a>
 		 		<?php
 		 		echo "<p>" . $row["companyName"] . "</p>";
 		 		echo "<p>" . $row["location"] ."</p>";
 		 		echo "<p> Education" . $row["educationalRequrment"]."</p>";
 		 		echo "<p> Experience" . $row["experienceRequirment"]."</p>";
 		 		echo $row["jobId"];
 		 		echo "<br/><br/><br/>";
 		 		?>

 		 		</tr>
 		 		</table>
 		 		</div>
 		 		<?php

 		 }


 		}
}


function jobdetails($jobIdd){


	global $conn;
	global $result,$jobName,$companyName,$companyMail,$jobResponsibility,$employmentStatus,$salary,$educationalRequrment,$otherBenifits,$location,$experienceRequirment,$deadline;


	$sql="SELECT * from jobdetails where jobId='$jobIdd' ";
	$resultn = $conn->query($sql);
	if ($resultn->num_rows > 0) {


 		 	while($row = $resultn->fetch_assoc()) {

 		 		$jobName=$row["jobName"];
 		 		$companyName=$row["companyName"];
 		 		$companyMail=$row["companyMail"];
 		 		$jobResponsibility=$row["jobResponsibility"];
 		 		$employmentStatus=$row["employmentStatus"];
 		 		$salary=$row["Salary"];
 		 		$educationalRequrment=$row["educationalRequrment"];
 		 		$otherBenifits=$row["otherBenifits"];
 		 		$location=$row["location"];
 		 		$experienceRequirment=$row["experienceRequirment"];
 		 		$deadline=$row["deadline"];

 		 	}

 		 return 1;	

 		 }

 		 else 0;
}


?>