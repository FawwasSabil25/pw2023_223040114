<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1c.php</title>
    <style>
        .box {
            width: 40px;
            aspect-ratio: 1;
            background-color: pink;
            text-align: center;
            line-height: 40px;
            border: 1px solid black;
        }

        .box-wrapper {
            display: flex;
        }

    </style>

</head>
<body>
    
    <div class="box">1</div>
    <div class="box-wrapper">
        <div class="box">2</div>
        <div class="box">2</div>    
    </div>
    <div class="box-wrapper">
        <div class="box">3</div>
        <div class="box">3</div>
        <div class="box">3</div>
    </div>

</body>
</html>