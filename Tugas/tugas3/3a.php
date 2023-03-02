<?php 


    echo "<h4>Menghitung Luas Lingkaran</h4>";
    function hitungLuasLingkaran($r=10){
        $luas = pi() * ($r * $r);
        return $luas;
    }
    $r = 10;

    //menghitung luas lingkaran
    $luas = hitungLuasLingkaran($r);
    echo "Jari-Jari = $r <br>";
    echo "Luas Lingkaran = $luas";

    echo "<hr>";

    echo "<h4>Menghitung Keliling Lingkaran</h4>";
    function hitungKelilingLingkaran($r){
        $keliling = 2 * pi() * $r;
        return $keliling;
    }
    $r = 20;

    //menghitung keliling lingkaran
    $keliling = hitungKelilingLingkaran($r);
    echo "Jari-Jari = $r <br>";
    echo "Luas LIngkaran = $keliling";
?>