<?php 
    $title = 'Profile Management';
    require('functions.php');

    session_start();

    if(!isset($_SESSION['login'])){
        header('location: login.php');
        exit;
    }

    // Retrieve the user_id from the session
    $id = $_SESSION['id'];

    // Fetch the user data based on the user_id
    $user = query("SELECT * FROM user WHERE id = '$id'")[0];

    // Handle form submission
    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $newPassword = $_POST['password1'];

        if(updateProfile($id, $name, $username, $email, $newPassword)){
            echo "<script>alert('Profile updated successfully!');
                    window.location.href = 'index.php';
                    </script>";
        } else {
            echo "<script>alert('Failed to update profile.');</script>";
        }
    }

    require('views/profile.views.php');
?>
