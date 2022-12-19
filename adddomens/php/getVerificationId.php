<?php
session_start();
require_once './classes/WebmasterApi.php';

$state = $api->getVerificationId($_POST['id']);
$_SESSION["host_id"] = $_POST['id'];
$_SESSION['verification_uin'] = $state->verification_uin;
$_SESSION['verification_state'] = $state->verification_state;
$_SESSION['host_name'] = $_POST['name'];

if($state->verification_state === "NONE" || $state->verification_state === "VERIFICATION_FAILED") {
  print "confirm.php";
} else {
  print "dashboard.php";
}