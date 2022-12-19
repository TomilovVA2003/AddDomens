<?php
require_once './classes/WebmasterApi.php';
session_start();

print $api->deleteLink($api->getUserId(), $_POST['id']);