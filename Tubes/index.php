<?php
    require('functions.php');

    $title = 'Home';
    $product = query("SELECT * FROM items");

    require('views/index.views.php');
?>