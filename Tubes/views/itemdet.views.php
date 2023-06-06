<?php require('partials/header.php') ?>
<?php require('partials/navbar.php') ?>

<div class="itemdesc" style="margin-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="main-img">
                    <img src="img/homepage/product/<?= $prdct['cover']; ?>">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="game-desc">
                    <h1><?= $prdct['name'];?></h1>
                    <div class="line">
                        <hr>
                    </div>
                    <h3><?= $prdct['publisher'];?></h3>
                    <div class="line">
                        <hr>
                    </div>
                    <a href="">
                        <h3><?= $prdct['genre'];?></h3>
                    </a>
                    <div class="line">
                        <hr>
                    </div>
                    <h4><?= $prdct['rating'];?></h4>
                    <div class="line">
                        <hr>
                    </div>
                    <p><?= $prdct['sec_desc'];?></p>
                    <div class="line">
                        <h2><?= $prdct['price'];?></h2>
                    </div>
                    <div class="col-lg-12">
                        <a href="">
                            <button class="btn-buy">
                                <p>Buy</p>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require('partials/footer.php') ?>