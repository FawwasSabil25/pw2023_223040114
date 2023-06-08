    <?php
        $title = 'Details';
        require('functions.php');

        session_start();

if(!isset($_SESSION['login'])){
    header('location: login.php');
    exit;
}

        //ambil data di url
        $id = $_GET["id"];

        //query data berdasarkan id
        $prdct = query("SELECT * FROM items WHERE id = $id")[0];


        require('views/itemdet.views.php');