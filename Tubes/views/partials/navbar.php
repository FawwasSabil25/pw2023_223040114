<nav class="navbar">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-brand-container">
      <a class="navbar-brand" href="#">SVR Shop</a>
      <img src="img/logo.png" alt="">
    </div>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
      <div class="searchbar">
        <form class="d-flex" role="search" action="" method="POST" >
          <input class="form-control me-2" name="keyword" type="search" placeholder="Search" aria-label="Search">
          <button class="btn" type="submit" name="search">Search</button>
        </form>
      </div>
    </div>  
  </div>
</nav>

<?php 
  if(isset($_POST['search'])){
    $product = search($_POST['keyword']);
  }

?>