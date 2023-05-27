<?php $title = 'Home'; ?>
<?php
$product = [
    [
        "cover" => "forza.jpg",
        "name" => "Forza Horizon",
        "main-description" => "an open world racing game you can explore with a large selection of cars.",
        "genre" => "Driving",
        "publisher" => "Microsoft Studios",
        "rating" => "85%",
        "price" => "Rp 110 000"
    ],
    [
        "cover" => "AC.jpg",
        "name" => "Asetto Corsa",
        "main-description" => "you can race multiple cars in multiple race tracks with sensational driving physics",
        "genre" => "Driving",
        "publisher" => "505 Games",
        "rating" => "85%",
        "price" => "Rp 108 000"
    ],
    [
        "cover" => "CS.jpg",
        "name" => "Counter Strike",
        "main-description" => "Hop on 2 teams avaible to successfully defuse a bomb or plant a bomb.",
        "genre" => "Shooter",
        "publisher" => "Valve",
        "rating" => "88%",
        "price" => "free"
    ],
    [
        "cover" => "crysis.jpg",
        "name" => "Crysis",
        "main-description" => "first person shooting game with high-tech soldiers battle aliens on a tropical island..",
        "genre" => "Shooter",
        "publisher" => "Crytek",
        "rating" => "91%",
        "price" => "Rp 139 000"
    ],
    [
        "cover" => "cotl.jpg",
        "name" => "Cult Of the Lamb",
        "main-description" => "You take on the role of a sacrificed lamb who gains god-like powers and seeks to rebuild their cult",
        "genre" => "Adventure",
        "publisher" => "Devolver Digital",
        "rating" => "88%",
        "price" => "Rp 150 000"
    ],
    [
        "cover" => "genshin.jpg",
        "name" => "Genshin Impact",
        "main-description" => "Travel a world full fantasy and mystery while searching your long lost sibling",
        "genre" => "Adventure",
        "publisher" => "Hoyoverse",
        "rating" => "84%",
        "price" => "free"
    ],
    [
        "cover" => "multiversus.jpg",
        "name" => "MultiVersus",
        "main-description" => "Pick your favoutite characters from warnerbros or cartoon network and start rumble",
        "genre" => "Fighting",
        "publisher" => "Warner Bros. Games",
        "rating" => "78%",
        "price" => "free"
    ],
    [
        "cover" => "guilty gear.jpg",
        "name" => "Guilty Gear Strive",
        "main-description" => " a fighting game that features a diverse cast of characters with unique abilities and stunning visuals.",
        "genre" => "fighting",
        "publisher" => "Arc System Works",
        "rating" => "86%",
        "price" => "Rp 500 000"
    ],
    [
        "cover" => "fallout.jpg",
        "name" => "Fallout New Vegas",
        "main-description" => "navigate through the wasteland of a Las Vegas while making choices that affect the story's outcome.",
        "genre" => "Driving",
        "publisher" => "Bethesda Softworks",
        "rating" => "82%",
        "price" => "Rp 110 000"
    ],
    [
        "cover" => "powerwash.jpg",
        "name" => "Power Wash Simulator",
        "main-description" => "a relaxing game where you clean and restore various items and surfaces using a high-pressure washer.",
        "genre" => "Simulation",
        "publisher" => "Square Enix Collective",
        "rating" => "81%",
        "price" => "Rp 280 000"
    ],
]
    ?>

<?php require('partials/header.php') ?>
<?php require('partials/navbar.php') ?>
<?php require('partials/carousel.php') ?>
<?php require('partials/categories.php') ?>

<div class="row row-cols-1 row-cols-md-5 g-4">
    <?php foreach ($product as $prdct): ?>
        <div class="col">
            <a href="">
                <div class="card h-100" style="background-color: rgba(203, 203, 203, 0.3);">
                    <img src="../img/homepage/product/<?= $prdct["cover"] ?>" class="card-img-top"
                        style="max-width: 100%; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $prdct["name"]; ?>
                        </h5>
                        <p class="card-text">
                            <?= $prdct["main-description"]; ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">
                            <?= $prdct["genre"]; ?>
                        </small>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">
                            <?= $prdct["publisher"]; ?>
                        </small>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">
                            <?= $prdct["rating"]; ?>
                        </small>
                    </div>
                    <div class="card-footer">
                        <big class="text-body-secondary">
                            <?= $prdct["price"]; ?>
                        </big>
                    </div>
                    <div class="card-footer card-button-group">
                        <button class="btn">Add to Cart</button>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>
<br>
<br>
<br>
<br>
<br>


<?php require('partials/footer.php') ?>