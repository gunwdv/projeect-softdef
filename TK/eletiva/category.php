<title>Eletiva | Category</title>
<link rel="stylesheet" type="text/css" href="css/home_index.css">
<link rel="stylesheet" type="text/css" href="css/category.css">

<?php
require "dbconnect.php";
error_reporting(0);
include "header.php";
?>
<?php if((isset($_SESSION['status']) && !empty($_SESSION['status']) && $_SESSION['status'] != 3) || empty($_SESSION['status'])) : ?>
<div class="inf ">
    <div id="myBtnContainer">
        <br>
        <form method="GET">
     <button class="btn <?php if($_GET["id"]=="") echo "active"; ?>"><i class="fas fa-book"></i>ทุกหมวด</button>
     <button class="btn <?php if($_GET["id"]=="กลุ่มวิชาภาษา") echo "active"; ?>" value="กลุ่มวิชาภาษา" name="id"><i class="fas fa-language"></i>หมวดภาษา</button>
     <button class="btn <?php if($_GET["id"]=="กลุ่มวิชามนุษย์ศาสตร์") echo "active"; ?>" value="กลุ่มวิชามนุษย์ศาสตร์" name="id"><i class="fas fa-users"></i>หมวดมนุษย์ศาสตร์</button>
     <button class="btn <?php if($_GET["id"]=="กลุ่มวิชาสังคมศาสตร์") echo "active"; ?>" value="กลุ่มวิชาสังคมศาสตร์" name="id"><i class="fas fa-globe"></i>หมวดสังคมศาสตร์</button>
     <button class="btn <?php if($_GET["id"]=="กลุ่มวิชาวิทยาศาสตร์กับคณิตศาสตร์") echo "active"; ?>" value="กลุ่มวิชาวิทยาศาสตร์กับคณิตศาสตร์" name="id"><i class="fas fa-atom"></i>หมวดวิทยาศาสตร์ฯ</button>
     <button class="btn <?php if($_GET["id"]=="วิชาเลือกเสรี") echo "active"; ?>" value="วิชาเลือกเสรี" name="id"> <i class="fas fa-dove"></i>หมวดวิชาเลือกเสรี</button>
     <button class="btn <?php if($_GET["id"]=="กลุ่มคุณค่าแห่งชีวิต") echo "active"; ?>" value="กลุ่มคุณค่าแห่งชีวิต" name="id"><i class="fas fa-hand-holding-heart"></i>หมวดคุณค่าแห่งชีวิต</button>
     <button class="btn <?php if($_GET["id"]=="กลุ่มวิถีแห่งสังคม") echo "active"; ?>" value="กลุ่มวิถีแห่งสังคม" name="id"><i class="fas fa-icons"></i>หมวดวิถีแห่งสังคม</button>
     <button class="btn <?php if($_GET["id"]=="กลุ่มศาสตร์แห่งการคิด") echo "active"; ?>" value="กลุ่มศาสตร์แห่งการคิด" name="id"><i class="fas fa-brain"></i>ศาสตร์แห่งการคิด</button>
     <button class="btn <?php if($_GET["id"]=="กลุ่มศิลปแห่งการจัดการ") echo "active"; ?>" value="กลุ่มศิลปแห่งการจัดการ" name="id"><i class="fas fa-chart-line"></i>ศิลปแห่งการจัดการ</button>
     <button class="btn <?php if($_GET["id"]=="กลุ่มภาษาและการสื่อสาร") echo "active"; ?>" value="กลุ่มภาษาและการสื่อสาร" name="id"><i class="fas fa-comments"></i>ภาษาและการสื่อสาร</button>
     <button class="btn btn_L <?php if($_GET["id"]=="กลุ่มทักษะที่จำเป็นในศตวรรษที่21") echo "active"; ?>" value="กลุ่มทักษะที่จำเป็นในศตวรรษที่21" name="id"><i class="fas fa-vr-cardboard"></i>หมวดทักษะที่จำเป็นในศตวรรษที่ 21</button>
     <button class="btn btn_L <?php if($_GET["id"]=="กลุ่มทักษะด้านบุคคลและทักษะส่งเสริมวิชาชีพ") echo "active"; ?>" value="กลุ่มทักษะด้านบุคคลและทักษะส่งเสริมวิชาชีพ" name="id"><i class="fas fa-user-tie"></i>ทักษะด้านบุคคลและทักษะส่งเสริมวิชาชีพ</button>
     <button class="btn btn_L <?php if($_GET["id"]=="กลุ่มทักษะด้านการจัดการและภาวะความเป็นผู้นำ") echo "active"; ?>" value="กลุ่มทักษะด้านการจัดการและภาวะความเป็นผู้นำ" name="id"><i class="fas fa-book-reader"></i>ทักษะด้านการจัดการและภาวะความเป็นผู้นำ</button>
     <button class="btn btn_L <?php if($_GET["id"]=="กลุ่มทักษะด้านภาษาและการสื่อสาร") echo "active"; ?>" value="กลุ่มทักษะด้านภาษาและการสื่อสาร" name="id"><i class="fas fa-globe-americas"></i>หมวดทักษะด้านภาษาและการสื่อสาร</button>
     </form>
      </div>
    </div>
<section>
    <!-- โพสล่าสุด -->
    <div class="inf ">
        <div class="posttext">
            <i class="fas fa-bookmark"></i>
            <p class="mainC">ผลการค้นหา</p>
        </div>
        <!-- -ข้อมูล -->
    <?php
    if($_GET["id"]=="กลุ่มวิชาภาษา"){
        $query = "SELECT * FROM post WHERE Group_subject = 'กลุ่มวิชาภาษา'";
    }
    elseif($_GET["id"]=="กลุ่มวิชามนุษย์ศาสตร์"){
        $query = "SELECT * FROM post WHERE Group_subject = 'กลุ่มวิชามนุษย์ศาสตร์'";
    }
    elseif($_GET["id"]=="กลุ่มวิชาสังคมศาสตร์"){
        $query = "SELECT * FROM post WHERE Group_subject = 'กลุ่มวิชาสังคมศาสตร์'";
    }
    elseif($_GET["id"]=="กลุ่มวิชาวิทยาศาสตร์กับคณิตศาสตร์"){
        $query = "SELECT * FROM post WHERE Group_subject = 'กลุ่มวิชาวิทยาศาสตร์กับคณิตศาสตร์'";
    }
    elseif($_GET["id"]=="วิชาเลือกเสรี"){
        $query = "SELECT * FROM post WHERE Group_subject = 'วิชาเลือกเสรี'";
    }
    elseif($_GET["id"]=="กลุ่มคุณค่าแห่งชีวิต"){
        $query = "SELECT * FROM post WHERE Group_subject = 'กลุ่มคุณค่าแห่งชีวิต'";
    }
    elseif($_GET["id"]=="กลุ่มวิถีแห่งสังคม"){
        $query = "SELECT * FROM post WHERE Group_subject = 'กลุ่มวิถีแห่งสังคม'";
    }
    elseif($_GET["id"]=="กลุ่มศาสตร์แห่งการคิด"){
        $query = "SELECT * FROM post WHERE Group_subject = 'กลุ่มศาสตร์แห่งการคิด'";
    }
    elseif($_GET["id"]=="กลุ่มศิลปแห่งการจัดการ"){
        $query = "SELECT * FROM post WHERE Group_subject = 'กลุ่มศิลปแห่งการจัดการ'";
    }
    elseif($_GET["id"]=="กลุ่มภาษาและการสื่อสาร"){
        $query = "SELECT * FROM post WHERE Group_subject = 'กลุ่มภาษาและการสื่อสาร'";
    }
    elseif($_GET["id"]=="กลุ่มทักษะที่จำเป็นในศตวรรษที่21"){
        $query = "SELECT * FROM post WHERE Group_subject = 'กลุ่มทักษะที่จำเป็นในศตวรรษที่ 21'";
    }
    elseif($_GET["id"]=="กลุ่มทักษะด้านบุคคลและทักษะส่งเสริมวิชาชีพ"){
        $query = "SELECT * FROM post WHERE Group_subject = 'กลุ่มทักษะด้านบุคคลและทักษะส่งเสริมวิชาชีพ'";
    }
    elseif($_GET["id"]=="กลุ่มทักษะด้านการจัดการและภาวะความเป็นผู้นำ"){
        $query = "SELECT * FROM post WHERE Group_subject = 'กลุ่มทักษะด้านการจัดการและภาวะความเป็นผู้นำ'";
    }
    elseif($_GET["id"]=="กลุ่มทักษะด้านภาษาและการสื่อสาร"){
        $query = "SELECT * FROM post WHERE Group_subject = 'กลุ่มทักษะด้านภาษาและการสื่อสาร'";
    }
    else{
        $query = "SELECT * FROM post";
    }
    
    $result = mysqli_query($connect, $query);
    while($row =  mysqli_fetch_assoc($result)){
        $x = $row['ID_post'];
		$findCA = "SELECT COUNT(ID_comment) FROM comment WHERE from_post='$x'";
		$y = mysqli_query($connect, $findCA);
        $z = $row['create_by'];
        $queryU = "SELECT * FROM users WHERE ID = '$z'";
        $ua = mysqli_query($connect, $queryU);
        $rowUser = mysqli_fetch_assoc($ua);
        $name = (empty($rowUser['name'])) ? 'ไม่ระบุ' : $rowUser["name"];
        
		if($n =  mysqli_fetch_assoc($y)){
            echo '<a href="post.php?id='.$row['ID_post'].'" class="Content">';
            echo '    <div class="post_btn">';
            echo '        <div class="A_left">';
            echo '            <i class="icon_next fas fa-chevron-circle-right"></i>';
            echo '            <h4 class="textC" name="Post">'.$row['title_post'].'</h4>';
            echo '            <h6 class="textS" name="subject">'.$row['Group_subject'].' : '.$row['ID_subject'].'</h6>';
            echo '            <br><p class="Timestamp">User:'.$name.' Time:'.$row['time_post'].'</p>';
            echo '        </div>';
            echo '        <div  class="A_right">';
            echo '            <i class="iconcomment far fa-comment-dots"></i>';
            echo '            <h5 class="commentN">'.$n['COUNT(ID_comment)'].'</h5>';
            echo '        </div>';
            echo '    </div>';
            echo '</a>';
        }
    }
    ?>
    </div>
</section>

<script src="javascript/category.js"></script>
<?php else: ?>
<?php include "logout.php"; ?>
<?php endif ?>