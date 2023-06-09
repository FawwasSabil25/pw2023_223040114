<?php 
require('functions.php');
session_start();

if(!isset($_SESSION['login'])){
    header('location: login.php');
    exit;
}

if (isset($_SESSION['id'])) {
    $user = getUserName($_SESSION['id']);
}

$title = 'Admin';
require('views/admin.views.php');