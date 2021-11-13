<title>Eletiva | Home</title>
<link rel="stylesheet" type="text/css" href="css/home_index.css">
<?php
require "dbconnect.php";

include "header.php";
?>
<?php if(isset($_SESSION['status']) && !empty($_SESSION['status']) || $_SESSION['status'] != 3) : ?>
<section>
    <img class="banner" src="images/home.png" alt="Banner">
    <!-- โพสล่าสุด -->
    <div class="inf">
        <div class="posttext">
            <i class="fas fa-clock"></i>
            <p class="mainC">โพสล่าสุด</p>
        </div>
        <!-- -ข้อมูล -->
        <?php              
        $query = "SELECT * FROM post";
        $result = mysqli_query($connect, $query);
        //"SELECT COUNT(ID_comment) FROM comment WHERE create_by = $";
        while($row =  mysqli_fetch_assoc($result)){
            
            echo '<a href="#Test1" class="Content">';
            echo '    <div class="post_btn">';
            echo '        <div class="A_left">';
            echo '            <i class="icon_next fas fa-chevron-circle-right"></i>';
            echo '            <h4 class="textC" name="Post">'.$row['title_post'].'</h4>';
            echo '            <h6 class="textS" name="subject">'.$row['Group_subject'].'</h6>';
            echo '            <br><p class="Timestamp">User:'.$row['create_by'].' Time:'.$row['time_post'].'</p>';
            echo '        </div>';
            echo '        <div  class="A_right">';
            echo '            <i class="iconcomment far fa-comment-dots"></i>';
            echo '            <h5 class="commentN">num</h5>';
            echo '        </div>';
            echo '    </div>';
            echo '</a>';
        }
        ?>
    </div>

    <!-- โพสยอดนิยม -->
    <div class="inf">
        <div class="posttext">
            <i class="fas fa-star"></i>
            <p class="mainC">โพสยอดนิยม</p>
        </div>
        <!-- -ข้อมูล -->
        <?php              
        $query = "SELECT * FROM post";
        $result = mysqli_query($connect, $query);
        while($row =  mysqli_fetch_assoc($result)){
            
            echo '<a href="#Test1" class="Content">';
            echo '    <div class="post_btn">';
            echo '        <div class="A_left">';
            echo '            <i class="icon_next fas fa-chevron-circle-right"></i>';
            echo '            <h4 class="textC" name="Post">'.$row['title_post'].'</h4>';
            echo '            <h6 class="textS" name="subject">'.$row['Group_subject'].'</h6>';
            echo '            <br><p class="Timestamp">User:'.$row['create_by'].' Time:'.$row['time_post'].'</p>';
            echo '        </div>';
            echo '        <div  class="A_right">';
            echo '            <i class="iconcomment far fa-comment-dots"></i>';
            echo '            <h5 class="commentN">num</h5>';
            echo '        </div>';
            echo '    </div>';
            echo '</a>';
        }
        ?>
    </div>

    <!-- โพสแนะนำ -->
    <div class="inf">
        <div class="posttext">
            <i class="fas fa-bookmark"></i>
            <p class="mainC">โพสแนะนำ</p>
        </div>
        <!-- -ข้อมูล -->
        <?php              
        $query = "SELECT * FROM post";
        $result = mysqli_query($connect, $query);
        while($row =  mysqli_fetch_assoc($result)){
            
            echo '<a href="#Test1" class="Content">';
            echo '    <div class="post_btn">';
            echo '        <div class="A_left">';
            echo '            <i class="icon_next fas fa-chevron-circle-right"></i>';
            echo '            <h4 class="textC" name="Post">'.$row['title_post'].'</h4>';
            echo '            <h6 class="textS" name="subject">'.$row['Group_subject'].'</h6>';
            echo '            <br><p class="Timestamp">User:'.$row['create_by'].' Time:'.$row['time_post'].'</p>';
            echo '        </div>';
            echo '        <div  class="A_right">';
            echo '            <i class="iconcomment far fa-comment-dots"></i>';
            echo '            <h5 class="commentN">num</h5>';
            echo '        </div>';
            echo '    </div>';
            echo '</a>';
        }
        ?>
    </div>
</section>
<!--
<nav>
    <div class="footer">
        <p>Thank you to everyone who has used our website.</p>
    </div>    
</nav>
-->
<?php else: ?>
<?php include "logout.php"; ?>
<?php endif ?>