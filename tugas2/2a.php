<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas2a</title>
</head>
<body>
    <?php 
        $sdepan= "Fawwas";
        $sbelakang= "Sabil";

       for ($x = 1; $x <= 100; $x++):
        if ($x %3 == 0){
            echo "$sdepan <br>";
        }
        else if ($x %5 == 0){
            echo "$sbelakang <br>";
        }
        else if ($x %3 ==0 & $x %5 == 0){
            echo "$sdepan +$sbelakang";
        }
        else {
            echo "$x <br>";
        }
    endfor;
    ?>



</body>
</html>