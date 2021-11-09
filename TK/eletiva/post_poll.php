<title>Eletiva | </title>
<?php
require "dbconnect.php";

include "header.php";
?>
<?php if((isset($_SESSION['status']) && !empty($_SESSION['status']) && $_SESSION['status'] != 3) || empty($_SESSION['status'])) : ?>
    
<?php else: ?>
<?php include "logout.php"; ?>
<?php endif ?>

<?php 

if (isset($_POST['creat_post'])) {
    // รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
    $category = mysqli_real_escape_string($connect, $_POST[""]); 
    $subject_ID = mysqli_real_escape_string($connect, $_POST['']);
    $subject_Name = mysqli_real_escape_string($connect, $_POST['']);
    $teacher = mysqli_real_escape_string($connect, $_POST[""]);
    $detail = mysqli_real_escape_string($connect, $_POST[""]);

    if (empty($subject_ID)) {
        array_push($errors, "Subject ID is required");
        $_SESSION['error'] = "Subject ID is required";
    }
    if (empty($subject_Name)) {
        array_push($errors, "Subject Name is required");
        $_SESSION['error'] = "Subject Name is required";
    }
    if (empty($teacher)) {
        $teacher = NULL;
    }
    if (empty($detail)) {
        array_push($errors, "Detail Name is required");
        $_SESSION['error'] = "Detail Name is required";
    }

    // บันทึกข้อมูล
    $check_user = "SELECT email,password,status FROM users WHERE email = '$email ' AND password = '$password' AND status = '$status'";
    $post_check_query = "SELECT * FROM posts";
    $query = mysqli_query($connect, $check_user);
    $result = mysqli_fetch_assoc($query);

    if ($result) { // if user exists
        if ($result['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }
    //var_dump($errors);

    if (count($errors) == 0) {
        $password = md5($password_1);

        $sql = "INSERT INTO users(email,password,status) VALUES('$email','$password','$status')";
        mysqli_query($connect,$sql); // สั่งรันคำสั่ง sql

        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['status'] = $status;

        header('location: first-select.php');
    } else {
        header("location: login-user.php");
        //echo myqli_errors($connect);
    }
}
?>