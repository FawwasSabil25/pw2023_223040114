<?php 

    $mahasiswa = [
        [
            "foto" => "fawwas.jpeg",
            "nama" => "Fawwas Nawwaf Sabil",
            "NRP" => "223040114",
            "Email" => "fawwas2573@gmail.com",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "foto" => "fawwaya.jpeg",
            "nama" => "M. Fawwas ",
            "NRP" => "223040124",
            "Email" => "pawasgaya@gmail.com",
            "jurusan" => "DKV"
        ],
        [
            "foto" => "fawwastyle.jpeg",
            "nama" => "Fawwas Nawwaf",
            "NRP" => "223040134",
            "Email" => "pawasfly@gmail.com",
            "jurusan" => "Seni Musik"
        ],
        [
            "foto" => "fawwibu.jpeg",
            "nama" => "Nawwaf Sabil",
            "NRP" => "223040154",
            "Email" => "pawasbaubawng3@gmail.com",
            "jurusan" => "Sastra Jepang"
        ],
        [
            "foto" => "fawwaduk.jpeg",
            "nama" => "Sabil Nawwaf",
            "NRP" => "223040164",
            "Email" => "pawasdudug@gmail.com",
            "jurusan" => "Kimia Murni"
        ],
        [
            "foto" => "fawwasus.jpeg",
            "nama" => "Nawwaf Fawwas",
            "NRP" => "223040174",
            "Email" => "pawasamogus@gmail.com",
            "jurusan" => "Hukum"
        ],
        [
            "foto" => "fawwakan.jpeg",
            "nama" => "Sabil Fawwas",
            "NRP" => "223040184",
            "Email" => "pawasmangab@gmail.com",
            "jurusan" => "Teknik Pangan"
        ],
        [
            "foto" => "fawwareb.jpeg",
            "nama" => "Fawwas Sabil",
            "NRP" => "223040194",
            "Email" => "pawastengkureb@gmail.com",
            "jurusan" => "Matematika Murni"
        ],
        [
            "foto" => "fawwadur.jpeg",
            "nama" => "Sabil Fawwas Nawwaf",
            "NRP" => "223040195",
            "Email" => "pawassare@gmail.com",
            "jurusan" => "Psikologi"
        ],
        [
            "foto" => "fawwasem.jpeg",
            "nama" => "Nawwaf Sabil Fawwas",
            "NRP" => "223040196",
            "Email" => "pawasem@gmail.com",
            "jurusan" => "Tata Boga"
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5</title>

    <style>
        img {
            aspect-ration: 1;
            width: 256px;
            object-fit: cover;
        }
    </style>

</head>
<body>
    
<h2>Daftar Mahasiswa</h2>

<?php foreach($mahasiswa as $mhs):?>
<ul>
    <li>
        <img src="img/<?= $mhs["foto"]; ?>">
    </li>
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NRP : <?= $mhs["NRP"]; ?></li>
    <li>Email : <?= $mhs["jurusan"]; ?></li>
    <li>Jurusan : <?= $mhs["Email"]; ?></li>
</ul>
<?php endforeach;?>

</body>
</html>