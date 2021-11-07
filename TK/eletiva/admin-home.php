<title>Eletiva | Admin Page</title>
<?php
require "dbconnect.php";

include "header.php";
?>
<?php if(isset($_SESSION['status']) && !empty($_SESSION['status']) && $_SESSION['status'] == 3) : ?>
<body>
    <section>
        <div class="report">
            <i class="fas fa-file-alt"></i>
            <p>รายงาน</p>
        </div>
        <div class="postList">
            <i class="fas fa-chevron-circle-right"></i>
            <a href="#">Post1โพส</a>
            <h1>วิชาเลือกกลุ่ม....</h1>
            <p style="">User:??? Time:???</p>
            <div class="comment">
                <i class="fas fa-comment-dots"></i>
                <h3>num</h3>
            </div>
        </div>
        <div class="postList">
            <i class="fas fa-chevron-circle-right"></i>
            <a href="#">Post2โพส</a>
            <h1>วิชาเลือกกลุ่ม....</h1>
            <p style="">User:??? Time:???</p>
            <div class="comment">
                <i class="fas fa-comment-dots"></i>
                <h3>num</h3>
            </div>
        </div>
        <div class="postList">
            <i class="fas fa-chevron-circle-right"></i>
            <a href="#">Post3โพส</a>
            <h1>วิชาเลือกกลุ่ม....</h1>
            <p style="">User:??? Time:???</p>
            <div class="comment">
                <i class="fas fa-comment-dots"></i>
                <h3>num</h3>
            </div>
        </div>
        <div class="postList" style="margin-bottom:100px;">
            <i class="fas fa-chevron-circle-right"></i>
            <a href="#">Post4โพส</a>
            <h1>วิชาเลือกกลุ่ม....</h1>
            <p style="">User:??? Time:???</p>
            <div class="comment">
                <i class="fas fa-comment-dots"></i>
                <h3>num</h3>
            </div>
        </div>
    </section>
</body>
<?php else: ?>
<?php include "logout.php"; ?>
<?php endif ?>