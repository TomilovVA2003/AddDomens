<?php
$connect = mysqli_connect('localhost', 'root', '', 'add_domens');

if (!$connect) {
    die ('Error connect to DataBase');
}