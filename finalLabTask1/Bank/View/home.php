
<!DOCTYPE html>
<?php 
session_start();
?>
<html>
<head>
	<title>Bank</title>
</head>
<body>


<?php
		require ('../controller/action_balance.php');
		//require_once '../model/BalanceModel.php';
		//$model=new BankModel();
    ?>

<div>
	<p> Welcome  <span><?php echo $_SESSION["id"] ?> </span></p>
	

	<table>
        <thead>
            <tr>
            <th>Username</th>
            <th>Balance</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><?php echo $uname; ?></td>
            <td><?php echo $balance; ?></td>
            </tr>
        </tbody>
        </table>

</div>
<div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="amount">Enter amount:</label>
    <input type="text" name="amount",value="<?php echo $amount;?>" required>
    <br/>
    <button type="submit" value="diposit" name="diposit" >Diposit</button>
    <button type="submit" value="withdraw" name="withdraw" >Withdraw</button>
    </form>
</div>

</body>
</html>
