<?php
require_once __DIR__ . '/vendor/autoload.php';

require("functions.php");
$items = query("SELECT * FROM items");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Items List</title>
    <link rel="stylesheet" href="css/contents/print.css">
</head>
<body>
    <h1>Items List</h1>
    <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>#</th>
                <th>Cover</th>
                <th>Name</th>
                <th>Publisher</th>
                <th>Genre</th>
            </tr>';

        $i = 1;
        foreach($items as $itms){
            $html .= '<tr>
                        <td>'. $i++ .'</td>
                        <td><img src="img/homepage/product/'. $itms["cover"] .'" width="65px"></td>
                        <td>'. $itms["name"] .'</td>
                        <td>'. $itms["publisher"] .'</td>
                        <td>'. $itms["genre"] .'</td>
                        <td>'. $itms["price"] .'</td>
                    </tr>';
        }

$html .= '</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('SVRSite-Items-List.pdf', 'I');