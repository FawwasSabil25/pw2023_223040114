<?php $title = 'Add Items'?>
<?php require('partials/header.php') ?>
<?php require('partials/navbar.php') ?>

<div class="additems">
    <div class="container">
        <form class="form-container" method="post">
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
                    <div class="col-md-6">
                        <input type="text" name="cover" placeholder="Image" required="required" class="input-field" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" name="desc" placeholder="Description" required="required" class="input-field" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="rating" placeholder="Rating ( 0% - 100% )" required="required" class="input-field" />
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="price" placeholder="Price" required="required" class="input-field" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="submit">
                            <button type="submit" class="submit">
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