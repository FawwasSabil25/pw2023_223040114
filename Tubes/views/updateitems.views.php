<?php require('partials/header.php')?>
<?php require('partials/navbar.php')?>

<div class="updateitems">
    <div class="container">
        <form class="form-container" method="post" enctype="multipart/form-data">
            <div class="input">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Edit Items</h3>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?= $prdct["id"];?>">
                <div class="row">
                    <div class="col-md-6">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Name" required="required" class="input-field" value="<?= $prdct["name"]?>"/>
                    </div>
                    <div class="col-md-6">
                    <label>Publisher</label>
                        <input type="text" name="publisher" placeholder="Publisher" required="required" class="input-field" value="<?= $prdct["publisher"]?>"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <label>Genre</label>
                        <input type="text" name="genre" placeholder="Genre" required="required" class="input-field" value="<?= $prdct["genre"]?>"/>
                    </div>
                    <div class="col-md-4">
                        <input type="hidden" name="old_cover" value="<?= $prdct['cover'];?>">
                    <label>Cover</label>
                        <input type="file" name="cover" placeholder="Image" class="gambar input-field" onchange="previewImage()"/>
                    </div>
                    <div class="col-md-2">
                        <img src="img/homepage/product/<?= $prdct["cover"]; ?>" style="width: 150px;" class="img-preview">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <label>Main Description</label>
                        <input type="text" name="main_desc" placeholder="Main Description" required="required" class="input-field" value="<?= $prdct["main_desc"]?>"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <label>Secondary Description</label>
                        <input type="text" name="sec_desc" placeholder="Secondary Description" class="input-field" value="<?= $prdct["sec_desc"]?>"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <label>Rating</label>
                        <input type="text" name="rating" placeholder="Rating ( 0% - 100% )" required="required" class="input-field" value="<?= $prdct["rating"]?>"/>
                    </div>
                    <div class="col-md-6">
                    <label>Price</label>
                        <input type="text" name="price" placeholder="Price" required="required" class="input-field" value="<?= $prdct["price"]?>"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="submit">
                            <button type="submit" class="update" name="update">
                                U P D A T E
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="return">
                            <a href="admin.php">
                                <button>
                                    Return
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<?php require('partials/footer.php')?>