<?php


$serverName="localhost";
$username="root";
$password="";
$dbname="findyourjob";
$result;


$conn =new mysqli($serverName,$username,$password,$dbname);


function SendMessage($jobseeker,$message){
	global $conn;

	 $stmt = $conn -> prepare("INSERT INTO message_admin (jobseeker,jobseeker_message) Values (?,?) ");
	  $stmt -> bind_param("ss",$jobseeker,$message);
	   $stmt -> execute();
	   return 1;

}


function GetMessageResult($jobseeker){

	global $conn,$result;

	$sql="SELECT * from message_admin where jobseeker='$jobseeker' ";
	$result = $conn->query($sql);
}


function ViewAdminMessage(){

	global $result;

	if ($result->num_rows > 0) {
		?>

		<table border="1px" style="width: 70%">
			<tr style="text-align: left; padding: 15px">
				<th>My Message</th>
				<th>Admin Message</th>
			</tr>

<?php
		while($row = $result->fetch_assoc()) {

?>
		<tr>
		<td>
				<?php echo $row['jobseeker_message']; ?>
		</td>

		<td>
			<?php echo $row['admin_message']; ?>
		</td>
	</tr>
		<?php

		}

		?>

	</table>

	<?php

	
	}

	
}

//Contact with managing team

	
	function ContactTeam($jobseeker,$message){
		global $conn;
		$stmt = $conn -> prepare("INSERT INTO contact_team (jobseeker,message) Values (?,?) ");
	  $stmt -> bind_param("ss",$jobseeker,$message);
	   $stmt -> execute();
	   return 1;

	}



?>