<?php
//session_start();
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
	if($searchCategory=="organization"){
		$sql="SELECT * from jobdetails where companyName='$searchText' ";
		$result = $conn->query($sql);
	}
	else if($searchCategory=="location"){
		$sql="SELECT * from jobdetails where location='$searchText' ";
		$result = $conn->query($sql);
	}
	

	

}

$catName= $_GET['q'];
//echo $catName;
if($catName != null){
	jobCat();
	

}

$sortName=$_GET['sort'];
if($sortName != null){
	jobSort();
}

function jobSort(){
	global $conn;
	global $sortName;
	global $result;
	echo $sortName;

	if($sortName=="ASC"){
		$sql="SELECT * from jobdetails ORDER BY jobName ASC ";
		$result = $conn->query($sql);
		jobListView();
	}
	else if($sortName=="DESC"){
		$sql="SELECT * from jobdetails ORDER BY jobName DESC ";
		$result = $conn->query($sql);
		jobListView();
	}
	else if($sortName=="deadline"){
		$sql="SELECT * FROM jobdetails WHERE deadline ORDER BY DATE_FORMAT(deadline,'%Y-%m-%d') asc";
		$result = $conn->query($sql);
		jobListView();

	}

	
}

function jobCat(){
	global $conn;
	global $catName;
	global $result;
	//echo $catName;

	$sql="SELECT * from jobdetails where cat='$catName' ";
	$result = $conn->query($sql);
	jobListView();
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