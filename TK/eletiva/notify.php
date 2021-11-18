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
            $check2 = "SELECT ID FROM users WHERE email = '$email ' AND password = '$password' AND status = '$status'";
            $result2 = mysqli_query($connect, $check2);
            $row2 = mysqli_fetch_assoc($result2);
            $ID = $row2['ID'];
            
            $query = "SELECT * FROM notify WHERE to_ID = '$ID'";
            $result = mysqli_query($connect, $query);

            while($row =  mysqli_fetch_assoc($result)){
                $from_post = $row['from_post'];
                $query3 = "SELECT title_post FROM post WHERE ID_post='$from_post'";
                $result3 = mysqli_query($connect, $query3);
                $row3 = mysqli_fetch_assoc($result3);           
                echo'<a href="controllernotify.php?id_notify='.$row['ID_notify'].'" class="linkn">';
                echo'<div class="nof_btn">';
                echo'    <div class="Lbox">';
                echo'        <input type="checkbox" id="buttonN"';
                if($row['status_notify']==0){
                    echo 'checked';
                }
                echo'        ><label for="buttonN" class="fas"></label>';
                echo'    </div>';
                echo'    <div class="Mbox">';
                echo '<h4 class="textC" name="Post">'.$row3["title_post"].'</h4>';
                echo'    <p class="txtM">'.$row['create_by'].' : '.$row['msg_notify'].'</p>';
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