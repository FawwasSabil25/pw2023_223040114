<?php 
    //array
    //membuat array

    $hari = array('Senin', 'Selasa', 'Rabu');
    //cara lama
    $bulan = ['Januari', 'Feburari','Maret'];
    //cara baru

    $x = ['Fawwas', 19, True];
    $binatang = ['🦊','😺','🐰','🐺','🐵'];
    
    //menampilkan isi array
    //mencetak satu elemen array menggunakan index
    echo $hari[1];
    echo "<hr>";

    //mencetak seluruh isi array
    //var_dump, print_r
    var_dump ($hari);
    echo "<br>";
    print_r($bulan);
    echo "<br>";
    var_dump($x);
    echo "<br>";
    print_r($binatang);
    echo "<hr>";

    //manipulasi isi array
    // isi elemen menggunakan indexnya
    $hari[3]='Kamis';
    print_r($hari);
    echo "<br>";

    // menambahkan elemen di akhir menggunakan index kosong []
    $hari[]="Jum'at";
    $hari[]='Sabtu';
    //nambahin elemen ga bisa dua sekalian, cuman bisa satu satu
    print_r($hari);
    echo "<br>";

    //kalo pengen nambahin lebih dari satu kyk gini :
    //array_push()
    array_push($bulan, 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'oktober', 'November', 'Desember');
    print_r($bulan);
    echo '<hr>';

    //menambahkan elemen baru di awal array
    //array_unshift
    array_unshift($binatang, '🐍', '🐲');
    print_r($binatang);
    echo '<hr>';

    //menghapus elemen akhir array menggunakan
    //array_pop
    //cuman bisa menghapus satu persatu
    array_pop($hari);
    array_pop($hari);
    print_r($hari);
    echo '<hr>';
    
    //menghapus elemen di awal array menggunakan
    //array_shift
    array_shift($hari);
    print_r($hari);
    

?>