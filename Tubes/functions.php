<?php

define('BASE_URL', 'pw2023_223040114/Tubes/');

function koneksi(){
    $conn = mysqli_connect('localhost','root','','svr_site') or die('Koneksi GAGAl!');
    return $conn;
}

function query($query){
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function add($items){
    $conn = koneksi();
    $name = $items['name'];
    $publisher = $items['publisher'];
    $genre = $items['genre'];
    $rating = $items['rating'];
    $price = $items['price'];
    $main_desc = $items['main_desc'];
    $sec_desc = $items['$sec_desc'];
    $cover = $items['cover'];

$query = "  INSERT INTO 
                items
            VALUES
                (null,'$name','$publisher','$genre','$rating','$price','$main_desc','$sec_desc','$cover')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}