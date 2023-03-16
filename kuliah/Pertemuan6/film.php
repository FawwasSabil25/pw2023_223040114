<?php 
$film = [
    [
        "poster" => "godfather.jpg",
        "judul" => "The Godather",
        "tahun" => "1972",
        "genre" => ["crime"," Drama"],
        "pemeran" => ["Marlon Brando"," Al Pacino"],
        "sutradara" => "Francis Ford Coppola"
    ],
    [
        "poster" => "Rush.jpg",
        "judul" => "Rush",
        "tahun" => "2013",
        "genre" => ["action"," biography"," drama"],
        "pemeran" => ["Daniel Bruhl"," Chris Hemsworth"],
        "sutradara" => "Ron Howard"
    ],
    [
        "poster" => "ford.jpg",
        "judul" => "Ford v Ferrari",
        "tahun" => "2019",
        "genre" => ["action"," biography"," drama"],
        "pemeran" => ["Matt Damon"," Christian Bale"],
        "sutradara" => "James Mangold"
    ],
    [
        "poster" => "joker.jpg",
        "judul" => "Joker",
        "tahun" => "2019",
        "genre" => ["crime"," drama"," thriller"],
        "pemeran" => ["Joaquin Phoenix"],
        "sutradara" => "Todd Phillips"
    ],
    [
        "poster" => "batman.jpg",
        "judul" => "The Dark Knight",
        "tahun" => "2008",
        "genre" => ["action"," crime"," drama"],
        "pemeran" => ["Christian Bale"],
        "sutradara" => "Christopher Nolan"
    ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fav mov</title>

    <style>
        img {
            aspect-ration: 1;
            width: 256px;
            object-fit: cover;
        }
    </style>

</head>
<body>
    
<h2>Film Favourite</h2>

<?php foreach($film as $f): ?>
<ul>
    <li>
        <img src="img/<?= $f["poster"]; ?>">
    </li>
    <li>Judul : <?= $f["judul"] ?></li>
    <li>Tahun: <?= $f["tahun"] ?></li>
    <li>genre :
        <?php foreach($f["genre"] as $gnr){ 
            echo $gnr;
        }?>
    </li>
    <li>Pemeran :
        <?php foreach($f["pemeran"] as $pmr){ 
            echo $pmr;
        }?>
    </li>
    <li>Sutradara <?= $f["sutradara"]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>