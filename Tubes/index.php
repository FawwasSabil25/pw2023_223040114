<?php
require('functions.php');
session_start();

if(!isset($_SESSION['login'])){
    header('location: login.php');
    exit;
}


$title = 'Home';
$product = query("SELECT * FROM items");

require('views/index.views.php');
?>
