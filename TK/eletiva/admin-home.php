<title>Eletiva | Admin Page</title>
<link rel="stylesheet" type="text/css" href="css/home_index.css">
<?php
require "dbconnect.php";

include "header.php";
?>
<?php if(isset($_SESSION['status']) && !empty($_SESSION['status']) && $_SESSION['status'] == 3) : ?>
<section>
        <br>
        <!-- โพสล่าสุด -->
        <div class="inf">
        <div class="posttext">
            <i class="fas fa-file-alt"></i>
            <p class="mainC">รายงาน</p>
        </div>
        <!-- -ข้อมูล -->
        <?php              
        $query = "SELECT * FROM post WHERE report='1'";
        $result = mysqli_query($connect, $query);
        while($row =  mysqli_fetch_assoc($result)){
            
            echo '<a href="admin-post.php?id='.$row['ID_post'].'" class="Content">';
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
</section>

<?php else: ?>
<?php include "logout.php"; ?>
<?php endif ?>