<?php
require('partials/header.php');
?>

<?php
require('partials/nav.php');
?>

<div class="container">
  <h1>Halaman Home</h1>

  <h3>Daftar Mahasiswa</h3>


  <div class="row">
    <div class="col-md-6">
      <form action="" method="GET">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username"
            aria-describedby="button-addon2">
          <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
        </div>
      </form>
    </div>
  </div>

  <?php
  foreach ($students as $student):
    ?>

    <ul>
      <li>Nama :
        <?= $student["nama"]; ?>
      </li>
      <li>NPM :
        <?= $student["npm"]; ?>
      </li>
      <li>Email :
        <?= $student["email"]; ?>
      </li>

    </ul>

  <?php
  endforeach;
  ?>

</div>

<?php
require('partials/footer.php');
?>