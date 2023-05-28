
<?php require('partials/header.php') ?>

<div class="regis">
    <div class="container">
        <form class="form-container">
            <div class="logo"><img src="img/logo.png"></div>
            <h3>Registration</h3>
            <div class="input">
                <form method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="Name" placeholder="Name" required="required" class="input-field" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="Username" placeholder="Username" required="required"
                                class="input-field" />
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="Email" placeholder="Email" required="required"
                                class="input-field" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="password" name="Password" placeholder="Password" required="required"
                                class="input-field" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="submit">Submit</button>
                        </div>
                        <div class="col-md-6">
                            <button type="reset" class="reset">Start Over</button>
                        </div>
                    </div>
                </form>
                <span>Just remembered you have an account? Login <a href="login.php">here</a></span>
            </div>
        </form>
    </div>
</div>

<script src="js/bootstrap.js"></script>
<script src="js/popper.min.js"></script>
</body>

</html>