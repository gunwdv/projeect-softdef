<title>Eletiva | </title>
<link rel="stylesheet " type="text/css " href="css/post-reveiw.css ">

<?php
require "dbconnect.php";

include "header.php";
if ($_GET['id']){
    //echo $_GET['id'];
    $x = $_GET['id'];
    $queryP = "SELECT * FROM post WHERE ID_post = '$x'";
    $resultpost = mysqli_query($connect, $queryP);
    $queryC = "SELECT * FROM comment WHERE from_post = '$x'";
    $resultcom = mysqli_query($connect, $queryC);
}
?>
<?php if((isset($_SESSION['status']) && !empty($_SESSION['status']) && $_SESSION['status'] != 3) || empty($_SESSION['status'])) : ?>
<body class="post">
    <div class="container-fluid mt-5">
        <!-- หน้าโพสต์รีวิว -->
        <div class="row">
            <div class="col-lg-3 col-sm-2"></div>

            <div class="col-lg-5 col-sm-8">
                <div class="post-review">
                    <div class="review-box">

                        <i class="fas fa-ellipsis-h " id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li> <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop">รายงานโพสต์</a></li>
                            <li><a class="dropdown-item" href="#">ลบโพสต์</a></li>
                        </ul>
                        <?php 
                        while($row = mysqli_fetch_assoc($resultpost)){
                            echo '<p class="title"><i class="fas fa-pen"></i>'.$row["title_post"].'
                            <br><span class="badge rounded-pill " id="code">'.$row["ID_subject"].'</span><span class="badge rounded-pill" id="category">'.$row["Group_subject"].'</span>
                            </p>';
                            echo '<p class="post-item">'.$row["msg_post"].'</p>';
                            echo '<div class="d-flex align-items-center ">';
                            echo '  <div class="d-inline ">';
                            echo '  <img src="images/avatar.jpg" alt="Avatar" class="avatar">';
                            echo '</div>';
                            echo '<div class="d-inline col-sm-6">';
                            echo '  <strong>'.$row["create_by"].'</strong>';
                            echo '  <span class="d-block" id="time">'.$row["time_post"].'></span>';
                            echo '</div>';
                            if(($_SESSION['status'] == 1) || ($_SESSION['status'] == 2)){
                            echo '<div class="d-grid col-lg-5 col-md-5 col-sm-4 float-end">';
                            echo '  <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">แสดงความคิดเห็น</button>';
                            echo '  <i class="fas fa-plus-circle" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>';
                            echo '</div>';
                            }
                            echo '</div>';
                        }                        
                        ?>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-sm-2"></div>
        </div>

        <!-- โพสต์ comment โพสต์รีวิว -->
        <?php 
        while($row = mysqli_fetch_assoc($resultcom)){
            echo '<div class="row ">';
            //echo '<div class="col-lg-4 col-sm-3"></div>'; //*
            echo '<div class="col-lg-3 col-sm-2"></div>';
            echo '<div class="col-lg-5 col-sm-8">'; //*
            //echo '<div class="col-lg-4 col-sm-7">';
            echo '<div class="comment-review">';
            echo '<div class="comment-box">';
            echo '<i class="fas fa-ellipsis-h " id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>';
            echo '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">';
            echo '<li>';
            echo '<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop">รายงานโพสต์</a></li>';
            echo '<li><a class="dropdown-item " href="#">ลบโพสต์</a></li>';
            echo '</ul>';
            echo'<div class="d-flex align-items-center ">';
            echo    '<div class="d-inline ">';
            echo        '<img src="images/avatar.jpg" alt="Avatar" class="avatar">';
            echo    '</div>';
            echo    '<div class="d-inline ">';
            echo        '<strong>'.$row["create_by"].'</strong>';
            echo        '<span class="d-block" id="time">'.$row["time_comment"].'</span>';
            echo    '</div>';
            echo'</div>';
            echo'<div class="d-block text-start ">';
            echo    '<p class="comment">'.$row["msg_comment"].'</p>';
            echo'</div>';
            echo '</div>';
            echo '<div class="col-lg-2 col-sm-2"></div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
        <!--
        <div class="star-review ">
            <span class="heading">คะแนน</span>
            <span class="fa fa-star checked "></span>
            <span class="fa fa-star checked "></span>
            <span class="fa fa-star checked "></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star "></span>
        </div>
        -->
        <!-- modal box -->
        <!-- modal comment รีวิว -->
        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content ">
                    <div class="modal-header ">
                        <h5 class="modal-title " id="exampleModalLabel">แสดงความคิดเห็น</h5>
                        <button type="button " class="btn-close btn-close-white " data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body ">

                        <textarea class="form-control form-control-sm " id="comment-item" placeholder=" " rows="5" required> </textarea>
                        <!--
                        <div class="review-choose float-end ">
                            <span class="heading">ให้คะแนน</span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                        </div>
                        -->
                    </div>
                    <div class="modal-footer ">
                        <button type="button">ส่งความคิดเห็น</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal รายงานโพสต์ -->
        <div class="modal fade " id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class=" modal-dialog modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-body ">
                        <p class="modal-title text-center mx-5 my-2 " id="staticBackdropLabel">เนื่องจากโพสต์ดังกล่าวมีการใช้ถ้อยคำที่ไม่สุภาพ และไม่ให้เกียรติซึ่งกันและกัน เพื่อรักษาบรรยากาศของเว็บไซต์ ข้าพเจ้าจึงขอให้มีการตรวจสอบโพสต์ดังกล่าว</p>
                        <p class="text-center">ต้องการรายงานโพสต์นี้ใช่หรือไม่</p>
                        <div class="row">
                            <div class=" col-lg-3 col-sm-3"></div>
                            <div class=" col-lg-6 col-sm-6">
                                <button type="button" class="btn text-center float-start" id="yes" data-bs-toggle="modal" data-bs-target="#need">ต้องการ</button>
                                <button type="button" class="btn text-center float-end " id="no" data-bs-dismiss="modal">ไม่ต้องการ</button>
                            </div>
                            <div class=" col-lg-3 col-sm-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal รายงานโพสต์แล้ว -->
        <div class="modal fade " id="need" data-bs-keyboard="false" tabindex="-1" aria-labelledby="needLabel" aria-hidden="true">
            <div class=" modal-dialog modal-dialog-centered ">
                <div class="modal-content ">
                    <div class="modal-body ">
                        <p class="modal-title text-center" id="needLabel">โพสต์นี้ถูกรายงานแล้ว</p>
                        <div class="row">
                            <div class=" col-lg-4 "></div>
                            <div class=" col-lg-4 ">
                                <button type="button" class="btn text-center ">กลับหน้าหลัก</button>
                            </div>
                            <div class=" col-lg-4 "></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php else: ?>
<?php include "logout.php"; ?>
<?php endif ?>