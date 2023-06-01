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
    $name = htmlspecialchars($items['name']);
    $publisher = htmlspecialchars($items['publisher']);
    $genre = htmlspecialchars($items['genre']);
    $rating = htmlspecialchars($items['rating']);
    $price = htmlspecialchars($items['price']);
    $main_desc = htmlspecialchars($items['main_desc']);
    $sec_desc = htmlspecialchars($items['$sec_desc']);
    $cover = htmlspecialchars($items['$sec_desc']);

$query = "  INSERT INTO 
                items
            VALUES
                (null,'$name','$publisher','$genre','$rating','$price','$main_desc','$sec_desc','$cover')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function delete($id){
    $conn = koneksi();

    $query = "DELETE FROM items WHERE id = $id";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    

    return mysqli_affected_rows($conn);
}