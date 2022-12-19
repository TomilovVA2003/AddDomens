<?php
session_start();
require_once 'connect.php';

$params = array(
    'response_type' => 'code',
    'client_id'     => '7074b24275b94df99dac54c573afb065',
);

$login = $_POST['login'];
$password = md5($_POST['password']);

$check_user = mysqli_query ($connect, "SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");

if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id_user" => $user['id_user'],
        "name" => $user['name'],
        "login" => $user['login'],
        "password" => $user['password']
    ];



    header('Location:https://oauth.yandex.ru/authorize?' . http_build_query( $params ));
}
else {
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('Location:../index.php');
}

?>