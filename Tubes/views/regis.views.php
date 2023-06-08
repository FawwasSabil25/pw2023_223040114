<?php require('partials/header.php') ?>

<div class="regis">
    <div class="container">
        <form class="form-container" method="POST">
            <div class="logo"><img src="img/logo.png"></div>
            <h3>Registration</h3>
            <div class="input">
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" name="name" placeholder="Name" required="required" class="input-field" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="username" placeholder="Username" required="required"
                            class="input-field" />
                    </div>
                    <div class="col-md-6">
                        <input type="email" name="email" placeholder="Email" required="required"
                            class="input-field" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="password" name="password1" placeholder="Password" required="required"
                            class="input-field" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="password" name="password2" placeholder="Confirm Password" required="required"
                            class="input-field" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="submit" name="regis">Submit</button>
                    </div>
                    <div class="col-md-6">
                        <button type="reset" class="reset">Start Over</button>
                    </div>
                </div>
                <span>Just remembered you have an account? Login <a href="login.php">here</a></span>
            </div>
        </form>
    </div>
</div>

<script src="js/bootstrap.js"></script>
<script src="js/popper.min.js"></script>
</body>
</html>
