<?php 

    //SUPERGLOBALS
    //variable global milik PHP
    //merupakan array associative

    //$_GET

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
    <title>GET</title>
</head>
<body>
        
        <h1>Daftar Mahasiswa</h1>

        <ul>
        <?php foreach($mahasiswa as $mhs):?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"] ?>&nrp=<?= $mhs["NRP"]?>&email=<?= $mhs["email"]?>&jurusan=<?= $mhs["jurusan"]?>"><?= $mhs["nama"]; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>

</body>
</html>