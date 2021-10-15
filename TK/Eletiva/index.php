
<?php
session_start();

if(!isset($_SESSION["email"])){
  $_SESSION['msg'] = "You must log in first";
  header('location: login-user.php');
}

if(isset($_GET["logout"])){
    session_destroy();
    unset($_SESSION["email"]);
    unset($_SESSION["status"]);
    header('location: login-user.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a New Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href=""> 
    
    <!-- add icon link -->
    <link rel="icon" href="images/icon.jpg" type="image/x-icon">
    <!-- specifying a webpage icon for web clip -->
    <link rel="apple-touch-icon" href="images/icon.jpg" />
    
</head>
<div>
    <!-- logged in user information -->
    <?php if(isset($_SESSION["email"])) : ?>
        <p>Welcome <strong><?php echo $_SESSION["email"]; ?></strong></p>
        <p>status : 
            <?php 
                if($_SESSION["status"] == 0){
                    echo "student"; 
                }
                else if ($_SESSION["status"] == 1){
                    echo "teacher";
                }
                else if ($_SESSION["status"] == 2){
                    echo "admin";
                    echo '<p><a href="admin.php">admin page</a></p>';
                }
            ?>
        </p>
        <p><a href="logout.php">Logout</a></p>
    <?php endif ?>
</div>