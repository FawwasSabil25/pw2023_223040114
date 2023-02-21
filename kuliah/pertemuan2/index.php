<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pertemuan2</title>
</head>
<body>

    <h1>
        <?php echo 'Hello, World!'; ?>
    <h1>
    <p>
        <?php echo 'Pemroraman Web'; ?>
    </p>
    <p>
        <?php echo "\"Pengumuman\" hari jum'at libur"; ?>
    </p>
    <p>
        <?php echo '"Pengumuman" hari jum\'at libur'; ?>
    </p>
    <p>
        <?php echo '"Pengumuman "' . "hari jum'at libur"; ?>
    </p>
    <p>
        <?php echo '"Pengumuman "'; echo "hari jum'at libur"; ?>
    </p>

    <hr>

    <?php 
        $nama_depan =  'Fawwas';
        $nama_belakang = 'Sabil';   
    ?>

    <h2>
        <?php echo "Wuzzah, $nama_depan $nama_belakang!"; ?>
    </h2>

    <?php 
       $npm = 14;
       echo "Aku adalah <b>$npm</b>";
    ?>
    <br>

        $npm = $npm*5 ;
        echo "Jika aku dikali 5, maka aku sekarang menjadi <b>$npm</b>"
    ?>
    <br>

        $npm = $npm/2;
        echo "jika aku dibagi 2, maka aku sekarang menjadi <b>$npm</b>"
    ?>
    <br>

        $npm = $npm+75;
        echo "Jika aku ditambah 75, maka aku sekarang menjadi <b>$npm</b>"
    ?>
    <br>

        $npm = $npm-20;
        echo "Jika aku dikurang 20, maka aku sekarang menjadi <b>$npm</b>"
    ?>

</body>
</html>