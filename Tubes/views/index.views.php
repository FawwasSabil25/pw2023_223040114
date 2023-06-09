<?php require('partials/header.php') ?>
<?php require('partials/navbar.php') ?>
<?php require('partials/carousel.php') ?>
<?php require('partials/categories.php') ?>

<div class="search-container">
    <?php if ($product): ?>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-5 g-4">
                <?php foreach ($product as $prdct): ?>
                    <div class="col">
                        <a href="itemdet.php?id=<?= $prdct["id"] ?>">
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
                                    <button class="btn">not working buy button</button>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php else : ?>
            <div class="emptyalert">
            <div class="container" style="color: white;
        width: 100%;
        margin-left: 43%;
        margin-bottom: 60px;
        font-size: 20px;">
                <p>Product Not Found !</p>
            </div>
        </div>
    <?php endif; ?>
</div>
<br>


<?php require('partials/footer.php') ?>