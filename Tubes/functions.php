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
                (null,'$name','$publisher','$genre','$rating','$main_desc','$sec_desc','$cover')";

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
          WHERE
            name LIKE '%$keyword%' OR
            publisher LIKE '%$keyword%' OR
            genre LIKE '%$keyword%'
          ";


    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function login($data){
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    //cek dulu username
    if($user = query("SELECT * FROM user WHERE username = '$username'")){
        //cek password
        if(password_verify($password, $user[0]['password'])){

            $id = $user[0]['id'];

            $_SESSION['login'] = true;
            $_SESSION['id'] = $id;


            return $user[0];
        }
    }
    
    return false;
}



function registrasi($data){
    $conn = koneksi();

    $name = htmlspecialchars($data['name']);
    $username = htmlspecialchars(strtolower($data['username']));
    $email = htmlspecialchars($data['email']);
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);


    //jika username atau password kosong
    if(empty($username) || empty($password1) || empty($password2)){
        echo "<script>
                    alert('username/password cannot be empty!');
                    document.location.href = 'regis.php';
                </script>";
        return false;
    }

    //jika username udah ada
    if(query("SELECT * FROM user WHERE username = '$username'")){
        echo "<script>
                    alert('username taken!');
                    document.location.href = 'regis.php';
                </script>";
        return false;
    }

    //jika konfirmasi password tidak sesuai
    if($password1 != $password2 ){
        echo "<script>
                    alert('Password did not match');
                    document.location.href = 'regis.php';
                </script>";
        return false;
    }

    //membatasi password
    if(strlen($password1)<= 5 ){
        echo "<script>
                    alert('password can't be less than 5 chars');
                    document.location.href = 'regis.php';
                </script>";
            return false;
    }

    //jika password dan username sesuai
    //enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    //insert ke tabel
    $query = "INSERT INTO user 
                VALUES
                (null, '$name', '$username', '$email', '$password_baru')
                ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function updateProfile($id, $name, $username, $email, $newPassword)
{
    $conn = koneksi();

    $query = "UPDATE user SET name = ?, username = ?, email = ?, password = ? WHERE id = ?";
    $stmt = $conn->prepare($query);

    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    $stmt->bind_param("ssssi", $name, $username, $email, $hashedPassword, $id);

    if ($stmt->execute()) {
        return true;
    } else {
        // Update failed
        return false;
    }
}

// Add item to wishlist
function addToWishlist($user_id, $item_id) {
    $conn = koneksi();

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO wishlist (user_id, item_id) VALUES (?, ?)");
    $stmt->bind_param("ii", $user_id, $item_id);

    // Execute the SQL statement
    if ($stmt->execute()) {
        // Wishlist item added successfully
        return true;
    } else {
        // Failed to add item to wishlist
        return false;
    }
}

// Function to retrieve user name based on ID
function getUserName($userId) {
    $conn = koneksi();

    $query = "SELECT name FROM user WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $userId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $name);
    mysqli_stmt_fetch($stmt);

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    return $name ? ['name' => $name] : false;
}

