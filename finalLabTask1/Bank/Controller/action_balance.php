<?php
//session_start();

require('../model/balanceModel.php');

$uname=$psw="";

(double)$balance=0;
(double)$amount=0;
    $counter =0;
    $uname=$_SESSION["id"];

    currentBalance($uname,$balance);


    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $amount=$_POST['amount'];
        if(isset($_POST['diposit'])){
            $amount=$amount+$balance;
            updateBalance($uname,$amount);
            $amount=0;
            currentBalance($uname,$balance);
        }
        else if(isset($_POST["withdraw"])){
            if($balance<$amount+500){
                echo "Insuffisient Balance";
            }
            else{
                $amount=$balance-$amount;
                updateBalance($uname,$amount);
                $amount="";
                currentBalance($uname,$balance);
            }
        }
    }

    ?>