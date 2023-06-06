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

function upload(){
    $file_name = $_FILES['cover']['name'];
    $file_type = $_FILES['cover']['type'];
    $file_size = $_FILES['cover']['size'];
    $error = $_FILES['cover']['error'];
    $tmp_file = $_FILES['cover']['tmp_name'];

    if($error == 4){

//ketika tidak ada gambar yang dipilih
        return 'default.jpg';
    }

//cek tipe file
if($file_type != 'image/jpeg' && $file_type != 'image/jpg'){
    echo "<script>
                alert('Choose your picture first!')
              </script>";
        return false;
}

//cek ukuran file
//max 5Mb = 5000000 byte
if($file_size > 50000000){
    echo "<script>
                alert('image size too big')
              </script>";
        return false;
}



//cek extensi file
$daftar_gambar = ['jpg', 'jpeg', 'png'];
$file_extension = explode('.', $file_name);
$file_extension = strtolower(end($file_extension));
if(!in_array($file_extension, $daftar_gambar)){
    echo "<script>
                alert('You didn't pick an image!')
              </script>";
        return false;
}

//lolos pengecekan siap upload file
//generate nama gambar baru
$new_name_file = uniqid();
$new_name_file .= '.';
$new_name_file .= $file_extension;
move_uploaded_file($tmp_file, 'img/homepage/product/' . $new_name_file);
return $new_name_file;

}


function add($items){
    $conn = koneksi();
    $name = htmlspecialchars($items['name']);
    $publisher = htmlspecialchars($items['publisher']);
    $genre = htmlspecialchars($items['genre']);
    $rating = htmlspecialchars($items['rating']);
    $price = htmlspecialchars($items['price']);
    $main_desc = htmlspecialchars($items['main_desc']);
    $sec_desc = htmlspecialchars($items['sec_desc']);
    // $cover = htmlspecialchars($items['$sec_desc']);

    //upload gambar
$cover = upload();
if(!$cover){
    return false;
}

$query = "  INSERT INTO 
                items
            VALUES
                (null,'$name','$publisher','$genre','$rating','$price','$main_desc','$sec_desc','$cover')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function delete($id){
    $conn = koneksi();

    // Mengambil data produk untuk dihapus
    $prdct = query("SELECT * FROM items WHERE id = $id");

    if (isset($prdct[0]['cover']) && $prdct[0]['cover'] != 'default.jpg') {
        $file_path = 'img/homepage/products/' . $prdct[0]['cover'];
        
        if (file_exists($file_path)) {
            unlink($file_path);
        } else {
            echo "File not found: $file_path";
        }
    }

    $query = "DELETE FROM items WHERE id = $id";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    return mysqli_affected_rows($conn);
}



function update($items){
    $conn = koneksi();
    $id = ($items['id']);
    $name = htmlspecialchars($items['name']);
    $publisher = htmlspecialchars($items['publisher']);
    $genre = htmlspecialchars($items['genre']);
    $rating = htmlspecialchars($items['rating']);
    $price = htmlspecialchars($items['price']);
    $main_desc = htmlspecialchars($items['main_desc']);
    $sec_desc = htmlspecialchars($items['sec_desc']);
    $old_cover = htmlspecialchars($items['old_cover']);

    $cover = upload();
    if(!$cover){
        return false;
    }

    if($cover == 'default.jpg'){
        $cover = $old_cover;
    }

    $query = "UPDATE items SET name = '$name',
                publisher = '$publisher',
                genre = '$genre',
                rating = '$rating',
                price = '$price',
                main_desc = '$main_desc',
                sec_desc = '$sec_desc',
                cover = '$cover'
            WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}


function search($keyword){
    $conn = koneksi();

    $keyword = mysqli_real_escape_string($conn, $keyword);

    $query = "SELECT * FROM items
          WHERE name LIKE '%" . $keyword . "%'";


    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}