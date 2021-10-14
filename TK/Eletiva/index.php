
<?php
session_start();

if(!isset($_SESSION["email"])){
  $_SESSION['msg'] = "You must log in first";
  header('location: login-user.php');
}

if(isset($_GET["logout"])){
    session_destroy();
    unset($_SESSION["email"]);
    header('location: login-user.php');
  }
?>

<div>
    <!-- logged in user information -->
    <?php if(isset($_SESSION["email"])) : ?>
        <p>Welcome <strong><?php echo $_SESSION["email"]; ?></strong></p>
        <p><a href="logout.php? logout='1'">Logout</a></p>
    <?php endif ?>
</div>