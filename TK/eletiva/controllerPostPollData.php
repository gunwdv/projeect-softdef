<?php 

session_start();
require "dbconnect.php";
$errors = array();

if (isset($_REQUEST['creat_post'])) {
    //DB: Post
    $Group_subject = mysqli_real_escape_string($connect, $_REQUEST["category"]); 
    $ID_subject = mysqli_real_escape_string($connect, $_REQUEST['subject_ID']);
    $name_subject = mysqli_real_escape_string($connect, $_REQUEST['subject_Name']);
    $type_post = mysqli_real_escape_string($connect, $_REQUEST["post_type"]);
    $title_post = mysqli_real_escape_string($connect, $_REQUEST["post_topic"]);
    $msg_post = mysqli_real_escape_string($connect, $_REQUEST["post_details"]);

    $email = $_SESSION['email'];
    $check = "SELECT ID FROM users WHERE email = '$email'";
    $result = mysqli_query($connect, $check);

    if(mysqli_num_rows($result) != 1){
        echo "ERROR";
    }

    if (empty($ID_subject)) {
        array_push($errors, "Subject ID is required");
        $_SESSION['error'] = "Subject ID is required";
    }
    if (empty($name_subject)) {
        array_push($errors, "Subject Name is required");
        $_SESSION['error'] = "Subject Name is required";
    }
    if (empty($title_post)) {
        array_push($errors, "Title is required");
        $_SESSION['error'] = "Title is required";
    }
    if (empty($msg_post)) {
        array_push($errors, "Detail is required");
        $_SESSION['error'] = "Detail is required";
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
    if (isset($_REQUEST['creat_poll'])) {

    }
    if (isset($_REQUEST['comment_poll'])) {

    }
    if (isset($_REQUEST['comment_poll'])) {

        //DB: poll
        $Group_subject = mysqli_real_escape_string($connect, $_REQUEST["category"]); 
        $ID_subject = mysqli_real_escape_string($connect, $_REQUEST['subject_ID']);
        $name_subject = mysqli_real_escape_string($connect, $_REQUEST['subject_Name']);
        $type_poll = mysqli_real_escape_string($connect, $_REQUEST["poll_type"]);
        $title_poll = mysqli_real_escape_string($connect, $_REQUEST["poll_topic"]);
        $msg_poll = mysqli_real_escape_string($connect, $_REQUEST["poll_details"]);
        $time_poll = mysqli_real_escape_string($connect, $_REQUEST["poll_end"]);
        $user;

        if (empty($ID_subject)) {
            array_push($errors, "Subject ID is required");
            $_SESSION['error'] = "Subject ID is required";
        }
        if (empty($name_subject)) {
            array_push($errors, "Subject Name is required");
            $_SESSION['error'] = "Subject Name is required";
        }
        if (empty($title_post)) {
            array_push($errors, "Title is required");
            $_SESSION['error'] = "Title is required";
        }
        if (empty($msg_post)) {
            array_push($errors, "Detail is required");
            $_SESSION['error'] = "Detail is required";
        }

        //DB: choice
        $msg_option = mysqli_real_escape_string($connect, $_REQUEST["msg_option"]); 
        $pollID;
        
        if (empty($msg_option)) {
            array_push($errors, "msg_option is required");
            $_SESSION['error'] = "msg_option is required";
        }

        //DB: answer
        $value_ans = mysqli_real_escape_string($connect, $_REQUEST["value_ans"]); 
        $choiceID;
        $user;

        if (empty($value_ans)) {
            array_push($errors, "You don't choose your choice.");
            $_SESSION['error'] = "Answer is required";
        }
    }
?>
