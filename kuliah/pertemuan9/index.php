<?php 
        require('functions.php');
        $title = 'Home';
        $students = [
            [
                "nama" => "Fawwas Nawwaf Sabil",
                "npm" => "223040114",
                "email" => "fawwas2573@gmail.com"
            ],
            [
                "nama" => "Muhhammad Faris Fathur Rohman",
                "npm" => "223040126",
                "email" => "faris@gmail.com"
            ],
        ];


    // echo $_SERVER["REQUEST_URI"];
    // /pw2023_223040114/kuliah/pertemuan9/
    
    require('views/index.view.php');