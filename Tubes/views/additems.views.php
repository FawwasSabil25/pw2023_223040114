<?php $title = 'Add Items'?>
<?php require('partials/header.php') ?>
<?php require('partials/navbar.php') ?>

<div class="additems" style="margin-bottom: 10px;">
    <div class="container">
        <form class="form-container" method="POST" enctype="multipart/form-data">
            <div class="input">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Add Items</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="name" placeholder="Name" required="required" class="input-field" />
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="publisher" placeholder="Publisher" required="required" class="input-field" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="genre" placeholder="Genre" required="required" class="input-field" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <img src="img/homepage/product/default.jpg" style="width: 150px;" class="img-preview">
                    </div>
                    <div class="col-md-4">
                        <input type="file" name="cover" placeholder="Image" class="gambar input-field" onchange="previewImage()"/>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="rating" placeholder="Rating ( 0% - 100% )" required="required" class="input-field" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" name="main_desc" placeholder="Main Description" required="required" class="input-field" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" name="sec_desc" placeholder="Sec Description" required="required" class="input-field" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="submit">
                            <button type="submit" class="add" name="add">
                                S u b m i t
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="reset">
                            <button type="reset" class="reset">
                                S t a r t  O v e r
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<?php require('partials/footer.php') ?>