<?php

require_once './classes/WebmasterApi.php';

$api->startVerification($_POST['id'], $_POST['type']);

sleep(3);
$state = $api->getVerificationId($_POST['id']);

print_r($state->verification_state);
