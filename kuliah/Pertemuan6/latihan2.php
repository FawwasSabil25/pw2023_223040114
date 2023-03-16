<?php 

//array multi dimensi 
//array didalam array

    $mahasiswa = [
        ["Fawwas",'🍕🍚','🦊'],
        ["Faris",'🍔🍚','😺'],
        ["Reza",'🍟🍚','🐺'],
        ["Azhar",'🌭🍚','🐰'],
        ["Raka",'🥪🍚','🐵']
        ];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    
    <h2>Daftar Mahasiswa</h2>

    <?php foreach($mahasiswa as $mhs): ?>
    <ul>
        <li>nama : <?= $mhs[0] ?></li>
        <li>makanan : <?= $mhs[1]; ?></li>
        <li>peliharaan : <?= $mhs[2]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>