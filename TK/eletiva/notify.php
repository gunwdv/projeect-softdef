<title>Eletiva | Notification</title>
<link rel="stylesheet" type="text/css" href="css/home_index.css">
<link rel="stylesheet" type="text/css" href="css/notify.css">
<?php
require "dbconnect.php";

include "header.php";
?>
<?php if(isset($_SESSION['status']) && !empty($_SESSION['status']) && ($_SESSION['status'] == 1 || $_SESSION['status'] == 2)) : ?>
<section>
    <!-- โพสล่าสุด -->
    <div class="inf">
        <br>
        <div class="posttext">
            <i class="fas fa-bell"></i>
            <p class="mainC">การแจ้งเตือน</p>
        </div>
        <!-- -ข้อมูล -->
        <div class="boxn">
        <form method="POST" action="controllerPostData.php">
            <?php
            $query = "SELECT * FROM notify";
            $result = mysqli_query($connect, $query);

            while($row =  mysqli_fetch_assoc($result)){
                echo'<a <a href="post.php?id='.$row['from_post'].'" class="linkn">';
                echo'<div class="nof_btn">';
                echo'    <div class="Lbox">';
                echo'        <input type="checkbox" id="buttonN">';
                echo'        <label for="buttonN" class="fas"></label>';
                echo'    </div>';
                echo'    <div class="Mbox">';
                echo'    <p class="txtM">'.$row['creat_by'].' : '.$row['msg_notify'].'</p>';
                echo'    <p class="txtT">'.$row['time_notify'].'</p>';
                echo'    </div>';
                echo'    <div class="Rbox">';
                echo'        <button style="margin-left:10px" value="'.$row['ID_notify'].'" name="delpageN" onclick="return  confirm("do you want to delete Y/N")"><i class="iconclose fas fa-window-close"></i></button>';
                echo'    </div>';
                echo'</div>';
                echo'</a>';
            }
        ?>
        </form>
        
        
    </div>
    </div>
</section>
<?php else: ?>
<?php include "logout.php"; ?>
<?php endif ?>