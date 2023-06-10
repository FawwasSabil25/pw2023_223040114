<?php require("partials/header.php")?>
<?php require("partials/navbar.php")?>

<div class="edititems">
    <div class="container">

    <h3>Edit Items</h3>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Cover</th>
                <th scope="col">Name</th>
                <th scope="col">Publisher</th>
                <th scope="col">Genre</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($product as $prdct) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td>
                        <img src="img/homepage/product/<?= $prdct['cover']; ?>" width="50">
                    </td>
                    <td><?= $prdct['name']; ?></td>
                    <td><?= $prdct['publisher']; ?></td>
                    <td><?= $prdct['genre']; ?></td>
                    <td>
                        <a href="updateitems.php?id=<?= $prdct["id"];?>" class="edit">
                            <button>Edit</button>
                        </a>    |   
                        <a href="edititems.php?id=<?= $prdct["id"];?>" class="delete" onclick="return confirm('Are you sure')">
                            <button>Delete</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <a href="admin.php" class="return">
        <button>Return</button>
    </a>
    <a href="print.php" target="_blank">
        <button>Print</button>
    </a>
    </div>
</div>


<?php require("partials/footer.php")?>