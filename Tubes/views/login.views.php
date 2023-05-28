<?php $title = 'Login'?>
<?php require('partials/header.php') ?>

<div class="login">
    <div class="container">
        <form class="form-container">
            <div class="logo"><img src="img/logo.png"></div>
            <h3>Join Us</h3>
            <div class="input">
                <form method="post">
                    <input type="text" name="Username" placeholder="Username" required="required" />
                    <input type="password" name="Password" placeholder="Password" required="required" />
                    <button type="submit" class="submit" name="submit">Open Sesame</button>
                </form>
                <span>First Time? register <a href="regis.php">here</a></span>
            </div>
    </div>

    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>
    </body>

    </html>