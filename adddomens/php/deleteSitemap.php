<?php
session_start();
require_once './classes/WebmasterApi.php';

print_r($api->deleteSitemap($_SESSION['user_id'], $_SESSION["host_id"], $_POST['id']));