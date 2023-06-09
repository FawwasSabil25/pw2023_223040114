<?php
require('functions.php');
session_start();

if(!isset($_SESSION['login'])){
    header('location: login.php');
    exit;
}

$title = 'Home';

// Check if a specific category is selected
if(isset($_GET['category'])){
    $selectedGenre = $_GET['category'];

    // Fetch items matching the selected genre
    $product = query("SELECT * FROM items WHERE genre = '$selectedGenre'");
} else {
    // Fetch all items
    $product = query("SELECT * FROM items");
}

require('views/index.views.php');
?>
