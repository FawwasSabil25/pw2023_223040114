<?php 
    require("functions.php");

    session_start();

if(!isset($_SESSION['login'])){
    header('location: login.php');
    exit;
}

    $title = 'Edit Items';
    $product = query("SELECT * FROM items");


    $id = isset($_GET["id"]) ? $_GET["id"] : null;
    if ($id !== null && delete($id) > 0) {
        echo "
                <script>
                    alert('Item Successfully Deleted !');
                    document.location.href = index.php;
                </script>
            ";
    }
    require("views/edititems.views.php");


?>