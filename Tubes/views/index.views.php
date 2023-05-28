<?php require('partials/header.php') ?>
<?php require('partials/navbar.php') ?>
<?php require('partials/carousel.php') ?>
<?php require('partials/categories.php') ?>

<div class="row row-cols-1 row-cols-md-5 g-4">
    <?php foreach ($product as $prdct): ?>
        <div class="col">
            <a href="">
                <div class="card h-100" style="background-color: rgba(203, 203, 203, 0.3);">
                    <img src="img/homepage/product/<?= $prdct["cover"] ?>" class="card-img-top"
                        style="max-width: 100%; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $prdct["name"]; ?>
                        </h5>
                        <p class="card-text">
                            <?= $prdct["main_desc"]; ?>
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