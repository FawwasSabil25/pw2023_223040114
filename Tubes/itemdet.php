    <?php
        $title = 'Details';
        require('functions.php');

        //ambil data di url
        $id = $_GET["id"];

        //query data berdasarkan id
        $prdct = query("SELECT * FROM items WHERE id = $id")[0];


        require('views/itemdet.views.php');