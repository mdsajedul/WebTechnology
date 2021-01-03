<?php


$serverName="localhost";
$username="root";
$password="";
$dbname="findyourjob";
$companyMail;
$subject;
$myemail;
$subject;
$message;
$resume;




$conn =new mysqli($serverName,$username,$password,$dbname);





function EmailWithCv($myemail,$companyemail,$subject,$message,$firstname,$lastname,$fathername,$mothername,$maratialStatus,$skill,$religion,$gender,$dob,$divition,$district,$subDistrict,$postOffice,$road,$proImage){

	global $conn;
	 $stmt = $conn -> prepare("INSERT INTO emailcv (companyMail,subject,message,firstname,lastname,fathername,mothername,email,maratialstatus,skill,religion,gender,dob,division,preDistrict,preSubDistrict,prePostOffice,preRoad,picture) Values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");

	  $stmt -> bind_param("sssssssssssssssssss",$companyemail,$subject,$message,$firstname,$lastname,$fathername,$mothername,$myemail,$maratialStatus,$skill,$religion,$gender,$dob,$divition,$district,$subDistrict,$postOffice,$road,$proImage);

	  $stmt -> execute();
	   return 1;



}


 function EmailWithMessage($myemail,$companyemail,$subject,$message){

 	global $conn;
	 $stmt = $conn -> prepare("INSERT INTO emailcv (companyMail,subject,message,email) Values (?,?,?,?) ");
	 $stmt -> bind_param("ssss",$companyemail,$subject,$message,$myemail);
	 $stmt -> execute();
	 return 1;

 }



 function ViewSentResume($email){
 	global $conn;

 	$sql="SELECT * from emailcv where email='$email' ";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {

		?>
		<table style="padding: 30px">

 		 			<tr style="text-align: left; padding: 15px">
 		 				<th>Email Address</th>
 		 				<th>Subject</th>

 		 			</tr>
		<?php

 		 	while($row = $result->fetch_assoc()) {



 		 		?>
 		 		<tr>

 		 			<td style="padding: 15px">

 		 				<a href="/final/project/view/view_email_cv.php?view=<?php echo $row["id_email"];?>">

 		 				 

 		 				 <?php 

 		 				echo $row["companyMail"];

 		 				?>
 		 					</td>


 		 					<td style="padding: 15px">
 		 				<?php

 		 				echo $row["subject"];

 		 				?>
 		 				
 		 				
 		 			</a>

 		 			</td>


 		 		</tr>


 		 		<?php


 		 	}

 		 	?>

 		 	
 		 			

 		</table>


 		 		<?php


 		 }	




 }

 function viewEmailedCv($id_email){


 	global $conn;
 	global $myemail,$companyMail,$subject,$message,$resume;

 	$sql="SELECT * from emailcv where id_email='$id_email' ";

 	$resultn = $conn->query($sql);
	if ($resultn->num_rows > 0) {


 		 	while($row = $resultn->fetch_assoc()) {


 		 		$myemail=$row["email"];
 		 		$companyMail=$row["companyMail"];
 		 		$subject=$row["subject"];
 		 		$message=$row["message"];
 		 		$resume=$row["firstname"];



 		 	}



 		 }

 }



?>