<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/php/classes/WebmasterApi.php';

$params = array(
  'response_type' => 'code',
	'client_id'     => '7074b24275b94df99dac54c573afb065',
);
echo '<a href="https://oauth.yandex.ru/authorize?' . http_build_query( $params ) . '">Авторизация через Яндекс</a>';


$h = new WebmasterApi();

if(isset($_GET['code'])) {
  $h->getToken($_GET['code']);
  print $h->accessToken;
  $_SESSION['token'] = $h->accessToken;
}




header('https://oauth.yandex.ru/authorize?' . http_build_query( $params ));