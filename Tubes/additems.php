<?php
    $title = 'Add Items';
    require('functions.php');
    
    session_start();

if(!isset($_SESSION['login'])){
    header('location: login.php');
    exit;
}

//insert data items jika mengklik submit
if(isset($_POST['add'])){
    //tampilkan pesan jika data berhasil ditambahkan
    if(add($_POST)>0){
        echo "<Script>
                alert('Item Successfully Added');
                document.location.href = 'index.php'
                </script>";
    }else{
        echo "<Script>
                alert('Item add fail');
                document.location.href = 'index.php'
                </script>";
    }

}

require("views/additems.views.php");

