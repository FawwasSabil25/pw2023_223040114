<?php 
    require('partials/header.php');
    require('partials/navbar.php')
?>

<div class="profile">
    <div class="container">
        <form class="form-container" method="POST">
            <h3>Edit Profile</h3>
            <div class="input">
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" name="name" placeholder="Name" required="required" class="input-field" value="<?= $user['name']; ?>"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="username" placeholder="Username" required="required"
                            class="input-field" value="<?= $user['username']; ?>"/>
                    </div>
                    <div class="col-md-6">
                        <input type="email" name="email" placeholder="Email" required="required"
                            class="input-field" value="<?= $user['email']; ?>"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" name="current_password" value="<?= $user['password']; ?>">
                        <input type="password" name="password1" placeholder="New Password" required="required"
                            class="input-field" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="password" name="password2" placeholder="Confirm Password" required="required"
                            class="input-field"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="submit" name="update">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require('partials/footer.php')?>
