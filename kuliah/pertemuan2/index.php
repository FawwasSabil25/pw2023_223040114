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

    
</body>
</html>