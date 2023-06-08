<?php $title = 'Login' ?>
<?php require('partials/header.php') ?>

<div class="login">
    <div class="container">
        <div class="form-container" style="width: 350px;">
            <div class="logo">
                <img src="img/logo.png">
            </div>
            <h3>Join Us</h3>
            <?php if (isset($login['error'])): ?>
                    <p style="color: white; margin-left: 45px;">
                        <?= $login['pesan']; ?>
                    </p>
            <?php endif; ?>
            <div class="input">
                <form method="POST">
                    <input type="text" name="username" placeholder="Username" autocomplete="off" required />
                    <input type="password" name="password" placeholder="Password" autoocmplete="off" required />
                    <button type="submit" class="submit" name="login">Open Sesame</button>
                </form>
                <span>First Time? register <a href="regis.php">here</a></span>
            </div>
                </div>
    </div>
</div>
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>
    </body>

    </html>