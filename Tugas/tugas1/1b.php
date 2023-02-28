<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1b.php</title>
</head>
<body>
    
    <?php 
       $npm = 14;
       echo "Aku adalah <b>$npm</b>";
    ?>
    <br>
    <?php 
        $npm *= 5 ;
        echo "Jika aku dikali 5, maka aku sekarang menjadi <b>$npm</b>"
    ?>
    <br>
    <?php 
        $npm /= 2;
        echo "jika aku dibagi 2, maka aku sekarang menjadi <b>$npm</b>"
    ?>
    <br>
    <?php 
        $npm += 75;
        echo "Jika aku ditambah 75, maka aku sekarang menjadi <b>$npm</b>"
    ?>
    <br>
    <?php 
        $npm -= 20;
        echo "Jika aku dikurang 20, maka aku sekarang menjadi <b>$npm</b>"
    ?>

</body>
</html>