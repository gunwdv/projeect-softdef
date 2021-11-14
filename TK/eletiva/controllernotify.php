<?php 

session_start();
require "dbconnect.php";
$errors = array();

if (isset($_REQUEST['yesnotify'])) {
    $x = $_REQUEST["idP"]; 
    header("location: post.php?id='.$x.'");
}
if (isset($_REQUEST['yesdel'])) {
    header('location: admin-home.php');
}
?>
