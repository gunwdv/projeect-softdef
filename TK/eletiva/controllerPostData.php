<?php 

session_start();
require "dbconnect.php";
$errors = array();

$email = $_SESSION['email'];
$check = "SELECT ID FROM users WHERE email = '$email'";
$result = mysqli_query($connect, $check);
$row = mysqli_fetch_assoc($result);

if (isset($_REQUEST['creat_post'])) {


    //DB: Post
    $Group_subject = mysqli_real_escape_string($connect, $_REQUEST["Group_subject"]); 
    $ID_subject = mysqli_real_escape_string($connect, $_REQUEST['subject_ID']);
    $name_subject = mysqli_real_escape_string($connect, $_REQUEST['subject_Name']);
    $type_post = mysqli_real_escape_string($connect, $_REQUEST["post_type"]);
    $title_post = mysqli_real_escape_string($connect, $_REQUEST["post_topic"]);
    $msg_post = mysqli_real_escape_string($connect, $_REQUEST["post_details"]);
	$create_by = $row['ID'];

    if (empty($ID_subject) || empty($name_subject) || empty($title_post) || empty($msg_post)) {
        array_push($errors, "Data is required");
        $_SESSION['error'] = "Data is required";
    }

    if (count($errors) == 0) {
        $sql = "INSERT INTO post(Group_subject,ID_subject,name_subject,type_post,title_post,msg_post,create_by) VALUES('$Group_subject','$ID_subject','$name_subject','$type_post','$title_post','$msg_post','$create_by')";
        mysqli_query($connect,$sql); // สั่งรันคำสั่ง sql

        header('location: index.php');
    } else {
        echo myqli_errors($connect);
    }
}
   
if (isset($_REQUEST['comment_post'])) {
    $msg_comment = mysqli_real_escape_string($connect, $_REQUEST["msg_comment"]); 
    $create_by = $row['ID'];
    $from_post = $_SESSION['postnow'];

    if (empty($ID_subject) || empty($name_subject) || empty($name_subject)) {
        array_push($errors, "Data is required");
        $_SESSION['error'] = "Data is required";
    }

    if (count($errors) == 0) {
        $sql = "INSERT INTO comment(msg_comment,create_by,from_post) VALUES('$msg_comment','$create_by','$from_post')";
        mysqli_query($connect,$sql); // สั่งรันคำสั่ง sql

        header('location: index.php');
    } else {
        echo myqli_errors($connect);
    }
}
if (isset($_REQUEST['yesnotify'])) {
    //Admin ---> user
    $from_post = $_SESSION['postnow'];
    $msg_comment = 'กรุณาตรวจสอบข้อความในโพสของคุณด้วยว่าผิดกฎหรือไม่?';

    $find = "SELECT create_by FROM post WHERE from_post = '$from_post'";
    $result = mysqli_query($connect, $find);
    $row = mysqli_fetch_assoc($result);
    $to_ID = $row['create_by'];

    $sql = "INSERT INTO notify(msg_notify,create_by,from_post,status_notify,to_ID) VALUES('$msg_comment','ADMIN','$from_post','1','$to_ID')";
        mysqli_query($connect,$sql); // สั่งรันคำสั่ง sql

    header("location: post.php?id='.$from_post.'");
}
if (isset($_REQUEST['yesdel'])) {
    $postdel = $_SESSION['postnow'];
    $msg_comment = 'โพสของคุณถูกลบ';

    $find = "SELECT create_by FROM post WHERE from_post = '$from_post'";
    $result = mysqli_query($connect, $find);
    $row = mysqli_fetch_assoc($result);
    $to_ID = $row['create_by'];

    $sqlA = "DELETE FROM post WHERE ID_post='$postdel'";
    mysqli_query($connect,$sqlA); // สั่งรันคำสั่ง sql

    $sql = "INSERT INTO notify(msg_notify,create_by,from_post,status_notify,to_ID) VALUES('$msg_comment','ADMIN','$from_post','1','$to_ID')";
    mysqli_query($connect,$sql); // สั่งรันคำสั่ง sql
    header('location: admin-home.php');
}
if(isset($_REQUEST['delpageN'])){
   //echo $_REQUEST['delpageN'];
   $postdel = $_REQUEST['delpageN'];

   $sql = "DELETE FROM notify WHERE ID_notify='$postdel'";
   mysqli_query($connect,$sql); // สั่งรันคำสั่ง sql
}
?>