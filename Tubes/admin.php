<?php 
require('functions.php');
session_start();

if(!isset($_SESSION['login'])){
    header('location: login.php');
    exit;
}
    $title = 'Admin';
    require('views/admin.views.php');