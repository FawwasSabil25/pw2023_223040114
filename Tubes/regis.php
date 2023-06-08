<?php
$title = 'Regis';

require('functions.php');
if(isset($_POST['regis'])){
    if(registrasi($_POST)>0){
        echo "<script>
        alert('User added!');
        document.location.href = 'login.php';
        </script>";
    }else{
        echo 'User registration failed';
    }
}

require('views/regis.views.php');