<?php


//session_start();
include("../model/model_jobseeker.php");

$uname=$_SESSION["id"];
detailsView($uname);

include("../model/model_email.php");

ViewSentResume($email);


?>