<?php 

//array multi dimensi 
//array didalam array

//array Associative
//array yang indexnya adalah string yang kita buat

    $mahasiswa = [
        [
        "nama" => "Fawwas",
        "makanan" => ['🍕','🍚'],
        "binatang" => '🦊'
        ],
        [
        "nama" => "Faris",
        "makanan" => ['🍔','🍚'],
        "binatang" =>'😺'],
        [
        "nama" => "Reza",
        "makanan" => ['🍟','🍚','🌭'],
        "binatang" => '🐺'
        ],
        [
        "nama" => "Azhar",
        "makanan" => [],
        "binatang" => '🐰'
        ],
        [
        "nama" => "Raka",
        "makanan" => ['🥪'],
        "binatang" => '🦝'
            ]
        ];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    
    <h2>Daftar Mahasiswa</h2>

    <?php foreach($mahasiswa as $mhs): ?>
    <ul>
        <li>nama : <?= $mhs["nama"] ?></li>
        <li>makanan : 
            <?php foreach($mhs["makanan"] as $mkn){ 
                echo $mkn;
            }?>
                
            
        </li>
        <li>peliharaan : <?= $mhs["binatang"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>