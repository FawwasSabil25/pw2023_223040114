<?php
    $title = 'Add Items';
    require('functions.php');

//insert data items jika mengklik submit
if(isset($_POST['add'])){
    //tampilkan pesan jika data berhasil ditambahkan
    if(add($_POST)>0){
        echo "<Script>
                alert('Item Successfully Added');
                document.location.href = 'index.php'
                </script>";
    }

}

require("views/additems.views.php");

