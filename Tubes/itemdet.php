<?php
$title = 'Details';
require('functions.php');

session_start();

if (!isset($_SESSION['login'])) {
    header('location: login.php');
    exit;
}

// Ambil data di URL
$id = $_GET["id"];

// Query data berdasarkan id
$prdct = query("SELECT * FROM items WHERE id = $id")[0];

require('views/itemdet.views.php');
?>
