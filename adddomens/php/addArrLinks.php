<?php

session_start();
require_once './classes/WebmasterApi.php';

$arrLinks = preg_split('/[\n\r]+/',$_POST['arrLinks']);

foreach($arrLinks as $link) {
  print $api->addLink($_SESSION['user_id'], $link);
}