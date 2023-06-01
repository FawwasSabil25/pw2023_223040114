<?php
    $title = 'Update Items';
    require('functions.php');

//ambil data di url
$id = $_GET["id"];

//query data berdasarkan id
$prdct = query("SELECT * FROM items WHERE id = $id")[0];

//insert data items jika mengklik submit
if(isset($_POST['update'])){
    //tampilkan pesan jika data berhasil ditambahkan
    if(update($_POST)>0){
        echo "<Script>
                alert('Item Successfully Updated');
                document.location.href = 'index.php'
                </script>";
    }else{
        echo "
            <script>
                alert('Update Failed')
                document.location.href = 'admin.php'
            </script>
            ";
    }

}

    require('views/updateitems.views.php');