<?php 
    $hardware = ['Motherboard', 'Processor', 'Hard Disk', 'PC Coller', 'VGA Card', 'SSD']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>
</head>
<body>
    
<h3>Macam-macam perangkat keras komputer</h3>
    <ol>
        <?php foreach($hardware as $hw) { ?>
            <li><?= $hw; ?></li>
        <?php } ?>
    </ol>

    <?php 
        array_push($hardware, 'Card Reader','Modem');
        sort($hardware)
    ?>

<h3>Macam-macam perangkat keras komputer baru</h3>
    <ol>
        <?php foreach($hardware as $hw) { ?>
            <li><?= $hw; ?></li>
        <?php } ?>
    </ol>

</body>
</html>
    