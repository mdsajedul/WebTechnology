
<!DOCTYPE html>
<?php 
session_start();
?>
<html>
<head>
	<title>Bank</title>
</head>
<body>

<div>
	<p> Welcome  <span><?php echo $_SESSION["id"] ?> </span></p>
	<p> Your Balance is : <span><?php echo $_SESSION["balance"] ?></span>
</div>


</body>
</html>