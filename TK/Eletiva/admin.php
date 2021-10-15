<?php
require "dbconnect.php";

session_start();

if(!isset($_SESSION["email"])){
    $_SESSION['msg'] = "You must log in first";
    header('location: login-user.php');
}

if($_SESSION["status"] != 2){
    header('location: index.php');
}

if(isset($_GET["logout"])){
    session_destroy();
    unset($_SESSION["email"]);
    unset($_SESSION["status"]);
    header('location: login-user.php');
  }
?>
admin page
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
                }
            ?>
        </p>
        <p><a href="index.php">index page</a></p>
        <p><a href="logout.php">Logout</a></p>

    <?php endif ?>

    <?php
    $sql = "SELECT * FROM users WHERE status = 2";
    $query = mysqli_query($connect, $sql);
    $result = mysqli_fetch_assoc($query);
    
    if ($result) { // if user exists
        $user = json_decode($result['interest']);
        echo "<p>name: $user->name</p>","<p>age: $user->age</p>";
    }
//https://www.imooh.com/%E0%B8%9F%E0%B8%B1%E0%B8%87%E0%B8%81%E0%B9%8C%E0%B8%8A%E0%B8%B1%E0%B8%99-json_encode-%E0%B8%82%E0%B8%AD%E0%B8%87-php
    ?>
</div>
