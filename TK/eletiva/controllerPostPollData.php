<?php 

session_start();
require "dbconnect.php";
$errors = array();
$email = '';

if (isset($_POST['creat_post'])) {
    //DB: Post
    $Group_subject = mysqli_real_escape_string($connect, $_POST["category"]); 
    $ID_subject = mysqli_real_escape_string($connect, $_POST['subject_ID']);
    $name_subject = mysqli_real_escape_string($connect, $_POST['subject_Name']);
    $type_post = mysqli_real_escape_string($connect, $_POST["post_type"]);
    $title_post = mysqli_real_escape_string($connect, $_POST["post_topic"]);
    $msg_post = mysqli_real_escape_string($connect, $_POST["post_details"]);

    $email = $_SESSION['email'];
    $check = "SELECT ID FROM users WHERE email = '$email'";
    $result = mysqli_query($connect, $check);

    if(mysqli_num_rows($result) != 1){
        echo "ERROR";
    }

    if (empty($subject_ID)) {
        array_push($errors, "Subject ID is required");
        $_SESSION['error'] = "Subject ID is required";
    }
    if (empty($subject_Name)) {
        array_push($errors, "Subject Name is required");
        $_SESSION['error'] = "Subject Name is required";
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
    if (isset($_POST['creat_poll'])) {

    }
    if (isset($_POST['comment_poll'])) {

    }
    if (isset($_POST['comment_poll'])) {

        //DB: poll
        $Group_subject = mysqli_real_escape_string($connect, $_POST["category"]); 
        $ID_subject = mysqli_real_escape_string($connect, $_POST['subject_ID']);
        $name_subject = mysqli_real_escape_string($connect, $_POST['subject_Name']);
        $type_poll = mysqli_real_escape_string($connect, $_POST["poll_type"]);
        $title_poll = mysqli_real_escape_string($connect, $_POST["poll_topic"]);
        $msg_poll = mysqli_real_escape_string($connect, $_POST["poll_details"]);
        $time_poll = mysqli_real_escape_string($connect, $_POST["poll_end"]);
        $user;

        //DB: choice
        $msg_option = mysqli_real_escape_string($connect, $_POST["msg_option"]); 
        $pollID;
        
        //DB: answer
        $value_ans = mysqli_real_escape_string($connect, $_POST["value_ans"]); 
        $choiceID;
        $user;
    }
?>
