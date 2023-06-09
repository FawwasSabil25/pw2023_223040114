<?php
session_start();

if (isset($_SESSION['login'])) {
    header('location: index.php');
    exit;
}

require('functions.php');
$title = 'Login';

if (isset($_POST['login'])) {
    $login = login($_POST);
    if ($login !== false) {
        $_SESSION['login'] = true;
        $_SESSION['id'] = $login['id'];
        header('location: index.php');
        exit;
    } else {
        echo "<script>alert('Username or Password incorrect !');</script>";
    }
}

require('views/login.views.php');
?>
