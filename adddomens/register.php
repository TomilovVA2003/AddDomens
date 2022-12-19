<?php

include 'connect.php';

$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];

$password = md5($password);

mysqli_query ($connect, "INSERT INTO `user` (`id_user`, `name`, `login`, `password`) VALUES (NULL, '$name', '$login', '$password')");

header('Location:../index.php');