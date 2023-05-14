<?php 
    $product = [
        [
            "cover" => "forza.jpg",
            "name" => "Forza Horizon",
            "description" => "an open world racing game you can explore with a large selection of cars.",
            "genre" => "Driving",
            "publisher" => "Microsoft Studios",
            "rating" => "85%",
            "price" => "Rp 110 000"
        ],
        [
            "cover" => "AC.jpg",
            "name" => "Asetto Corsa",
            "description" => "you can race multiple cars in multiple race tracks with sensational driving physics",
            "genre" => "Driving",
            "publisher" => "505 Games",
            "rating" => "85%",
            "price" => "Rp 108 000"
        ],
        [
            "cover" => "CS.jpg",
            "name" => "Counter Strike",
            "description" => "Hop on 2 teams avaible to successfully defuse a bomb or plant a bomb.",
            "genre" => "Shooter",
            "publisher" => "Valve",
            "rating" => "88%",
            "price" => "free"
        ],
        [
            "cover" => "crysis.jpg",
            "name" => "Crysis",
            "description" => "first person shooting game with high-tech soldiers battle aliens on a tropical island..",
            "genre" => "Shooter",
            "publisher" => "Crytek",
            "rating" => "91%",
            "price" => "Rp 139 000"
        ],
        [
            "cover" => "cotl.jpg",
            "name" => "Cult Of the Lamb",
            "description" => "You take on the role of a sacrificed lamb who gains god-like powers and seeks to rebuild their cult",
            "genre" => "Adventure",
            "publisher" => "Devolver Digital",
            "rating" => "88%",
            "price" => "Rp 150 000"
        ],
        [
            "cover" => "genshin.jpg",
            "name" => "Genshin Impact",
            "description" => "Travel a world full fantasy and mystery while searching your long lost sibling",
            "genre" => "Adventure",
            "publisher" => "Hoyoverse",
            "rating" => "84%",
            "price" => "free"
        ],
        [
            "cover" => "multiversus.jpg",
            "name" => "MultiVersus",
            "description" => "Pick your favoutite characters from warnerbros or cartoon network and start rumble",
            "genre" => "Fighting",
            "publisher" => "Warner Bros. Games",
            "rating" => "78%",
            "price" => "free"
        ],
        [
            "cover" => "guilty gear.jpg",
            "name" => "Guilty Gear Strive",
            "description" => " a fighting game that features a diverse cast of characters with unique abilities and stunning visuals.",
            "genre" => "fighting",
            "publisher" => "Arc System Works",
            "rating" => "86%",
            "price" => "Rp 500 000"
        ],
        [
            "cover" => "fallout.jpg",
            "name" => "Fallout New Vegas",
            "description" => "navigate through the wasteland of a Las Vegas while making choices that affect the story's outcome.",
            "genre" => "Driving",
            "publisher" => "Bethesda Softworks",
            "rating" => "82%",
            "price" => "Rp 110 000"
        ],
        [
            "cover" => "powerwash.jpg",
            "name" => "Power Wash Simulator",
            "description" => "a relaxing game where you clean and restore various items and surfaces using a high-pressure washer.",
            "genre" => "Simulation",
            "publisher" => "Square Enix Collective",
            "rating" => "81%",
            "price" => "Rp 280 000"
        ],
    ]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/homepagestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SVR Shop</title>
</head>
<body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="../img/logo.png" alt="Logo" height="30px" class="d-inline-block me-2">
            SVR Shop
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <form class="d-flex ms-auto">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline" type="submit"><i class="fa fa-search"></i></button>
                </form>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-home"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-bell"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-sign-in"></i></a>
                        </li>
                    </ul>
            </div>
        </div>
    </nav>

      <!--end navbar-->

      <!--carousel-->
      <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide mt-1" data-bs-ride="carousel">
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/homepage/carousel/1.jpg" class="d-block img-fluid" alt="1">
                </div>
                <div class="carousel-item">
                    <img src="../img/homepage/carousel/2.jpg" class="d-block img-fluid" alt="2">
                </div>
                <div class="carousel-item">
                    <img src="../img/homepage/carousel/3.jpg" class="d-block img-fluid" alt=".3">
                </div>
                <div class="carousel-item">
                    <img src="../img/homepage/carousel/4.jpg" class="d-block img-fluid" alt="4">
                </div>
                <div class="carousel-item">
                    <img src="../img/homepage/carousel/6.jpg" class="d-block img-fluid" alt="6">
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!--end carousel-->


        <!--Category-->
        <div class="box">

            <div class="row text-center row-container">
                <div class="category-title">
                    <h5>
                        Categories
                    </h5>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="category-menu">
                        <a href=""><img src="../img/homepage/category/race.png" class="img-category mt-4"></a>
                        <p class="mt-2">Driving</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="category-menu">
                        <a href=""><img src="../img/homepage/category/adventure.png" class="img-category mt-4"></a>
                        <p class="mt-2">Adventure</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="category-menu">
                        <a href=""><img src="../img/homepage/category/fighter.png" class="img-category mt-4"></a>
                        <p class="mt-2">Fighter</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="category-menu">
                        <a href=""><img src="../img/homepage/category/shooting.png" class="img-category mt-4"></a>
                        <p class="mt-2">Shooter</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="category-menu">
                        <a href=""><img src="../img/homepage/category/rpg.png" class="img-category mt-4"></a>
                        <p class="mt-2">RPG</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="category-menu">
                        <a href=""><img src="../img/homepage/category/simulations.png" class="img-category mt-4"></a>
                        <p class="mt-2">Simulations</p>
                    </div>
                </div>
            </div>
        </div>
        <!--end category-->

        <br>
        
        <!--Product-->
        <div class="row row-cols-1 row-cols-md-5 g-4">
            <?php foreach ($product as $prdct): ?>
                <div class="col">
                <div class="card h-100" style="background-color: rgba(203, 203, 203, 0.3);">
                    <img src="../img/homepage/product/<?= $prdct["cover"] ?>" class="card-img-top" style="max-width: 100%; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $prdct["name"]; ?></h5>
                        <p class="card-text"><?= $prdct["description"]; ?></p>
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
                            <small class="text-body-secondary">
                                <?= $prdct["price"]; ?>
                            </small>
                        </div>
                        <div class="card-footer card-button-group">
                            <button class="btn1">Add to Cart</button>
                            <button class="btn2">Add to Wishlist</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <!--end Product-->

    <!-- footer -->
        <footer class="bg-dark p-5 mt-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a href="#" style="text-decoration: none;">
                            <img src="../img/logo.png" style="width: 30px;">
                        </a>
                        <span style="font-size: 12px; color: white;">Copyright: @2023 | Created Hardly by Fawwas Sabil</span>
                    </div>
                </div>
            </div>
        </footer>




    <!--end footer-->
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
</body>
</html>