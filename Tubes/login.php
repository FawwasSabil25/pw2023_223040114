<?php
session_start();

if(isset($_SESSION{'login'})){
    header('location: index.php');
    exit;
}

require('functions.php');
$title = 'Login';

if(isset($_POST['login'])){
    $login = login($_POST);
}

require('views/login.views.php');
