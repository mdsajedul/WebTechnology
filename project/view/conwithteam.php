<!DOCTYPE html>
<html>
<head>
	<title>Contact with us</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>


<?php
$message="";
$messageErr="";
$messageStatus="";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$counter=0;

if(isset($_POST["message"]) & !empty($_POST["message"])){
		$message=$_POST["message"];
	}

else{
	$messageErr="Invalid message";
	$counter=$counter+1;
	}

if($counter==0){
		$emailStatus="Successfully sent Message";
	}
	else{
		$emailStatus="Message sending failed !";
	}
}
?>

	<div style="display: inline-block;">
		<?php include 'header.php' ?>
	</div>

	<div>
		<h3>Facing any problem,tell us</h3>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
			<textarea id="message" name="message" rows="4" cols="50"></textarea><br/>
			
			<br/>
			<button type="submit">Send</button><br/>
			<span><?php echo $messageErr;?></span>
		</form>


<?php 
echo "<br/>". $messageStatus;
echo "<br/>". $message;

?>
	</div>

<br/><br/>
<div>
	<?php include 'footer.php' ?>
</div>

</body>
</html>