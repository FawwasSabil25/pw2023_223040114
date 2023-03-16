<?php 
    //$mahasiswa = [
        //["Fawwas", "223040114","fawwas2573@gmail","teknik informatika"],
        //["Faris","223040126","faris126@gmail.com","teknik informatika"]
    //];

    //array associative
    //sama seperti array numerik, kecuali
    //keynya adalah string yang kita buat sendiri

    //buat photo, masukin ke folder "img" dalem folder yg dipake ngoding
    //namain biar gampang & ukurannya kecil aja (100px x 100px)
    //koding gambar = "nama key" => "nama file.extensi file"
    //contoh = "gambar" => "fawwas.jpg"
    //tinggal ditambah ke
    /*
        <li>
            <img src="nama folder gambar/<?= $string["key string dari foto]; ?>">
        </li>

        ex :

        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
    */
    $mahasiswa = [
        [
        "nama" => "Fawwas Sabil", 
        "NRP" => "223040114", 
        "Email" => "fawwas2573@gmail.com",
        "jurusan" => "Teknik Informatika"
        ],
        [
        "nama" => "Eldoni Mosul", 
        "NRP" => "223040114", 
        "Email" => "SulGanz@gmail.com",
        "jurusan" => "Teknik Informatika",
        ]
    ];  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2t</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs):?>
    <ul>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["NRP"]; ?></li>
        <li>Email : <?= $mhs["jurusan"]; ?></li>
        <li>Jurusan : <?= $mhs["Email"]; ?></li>
    </ul>
    <?php endforeach;?>

</body>
</html>