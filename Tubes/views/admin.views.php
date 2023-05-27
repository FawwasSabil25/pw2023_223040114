<?php $title = 'Admin';?>
<?php require('partials/header.php')?>
<?php require('partials/navbar.php')?>

<div class="admin">

<div class="welcome-text">
    <h2>Welcome, Admin!</h2>
  </div>

<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <a href="">
      <div class="card">
        <div class="card-body d-flex flex-column align-items-center justify-content-center">
          <div class="card-icon">
            <img src="../img/admin/in.svg" class="d-block img-fluid" alt="1">
          </div>
          <h5 class="card-title">Add Items</h5>
          <p class="card-text">Add Items to main page</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col">
    <a href="">
      <div class="card">
        <div class="card-body d-flex flex-column align-items-center justify-content-center">
          <div class="card-icon">
            <img src="../img/admin/out.svg" class="d-block img-fluid" alt="1">
          </div>
          <h5 class="card-title">Remove Items</h5>
          <p class="card-text">Remove Items from main page</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col">
    <a href="">
      <div class="card">
        <div class="card-body d-flex flex-column align-items-center justify-content-center">
          <div class="card-icon">
            <img src="../img/admin/person.svg" class="d-block img-fluid" alt="1">
          </div>
          <h5 class="card-title">Profile</h5>
          <p class="card-text">Profile Management</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col">
    <a href="">
      <div class="card">
        <div class="card-body d-flex flex-column align-items-center justify-content-center">
          <div class="card-icon">
            <img src="../img/admin/cart.svg" class="d-block img-fluid" alt="1">
          </div>
          <h5 class="card-title">cart</h5>
          <p class="card-text">Your Saved Items in Cart</p>
        </div>
      </div>
    </a>
  </div>
</div>
<div class="footer"></div>
  <div class="container">
    <img src="../img/logo.png" alt="">
    <p>Copyright: @2023 | Created Hardly by Fawwas Sabil</p>
  </div>
</div>
</div>




<?php require('partials/footer.php')?>