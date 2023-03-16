
<?php
/*
    l menampilkan hari (monday, tuesday, wednesday)
    d menampilkan tanggal (01-31)
    D menampilkan hari dalam 3 huruf (mon, tue, wed)
    M untuk bulan (jan)
    m untuk bulan dalam bentuk angka
    Y untuk tahun
*/
//date(); untuk menampilkan tanggal dengan format tertentu
    echo date("l, d-M-Y");

    echo "<hr>";

    //time();
    echo time();
    echo "<br>";
    //UNIX Timestamp / EPOCH time
    //detik yang sudah berlalu dari 1 januari 1970

    //echo time();

    echo date("l", time()+60*60*24*100);

    //function date dan time dapat di gabung,
    //untuk date("l", time()+60*60*24*100); akan muncul hari dimana 100 hari dari skrg
    //60 detik * 60 menit * 24 jam * brp hari, (+ atau - didepan menentukan apakah masa depan atau masa lampau)

    echo "<hr>";

    //mktime
    //membuat sendiri detik yang sudah berlalu
    //mktime(0,0,0,0,0,0); bisa ada 6 angka didalamnya
    //(0,0,0,0,0,0) = (jam, menit, detik, bulan, tanggal, tahun)

    echo date ("l", mktime(0,0,0,7,25,2003));

    echo "<hr>";

    //strtotime
    //kebalikan dari mktime
    
    echo date("l", strtotime("25 aug 1985"));

    //function String
    //strlen(), untuk menghitung panjang sebuah string
    //strcmp(), untuk membandingkan dua buah string
    //explode(), untuk memecah sebuah string menjadi array
    // htmlspecialchars(), untuk menjaga website

    //utility function (fungsi bantuan)
    //var_dump(), untuk mencetak isi dari sebuah variable, array, objek
    //isset(), untuk mengechek apakah sebuah variable sudah pernah dibikin atau belum
    //emty(), untuk mengechek apakah variable yang ada itu kosong atau tidak
    //die(), untuk memberentikan program kita
    //sleep(), untuk memberentikan program sementara

?>
