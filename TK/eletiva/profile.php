<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">

    <!-- add icon link -->
    <link rel="icon" href="images/icon.jpg" type="image/x-icon">
    <!-- specifying a webpage icon for web clip -->
    <link rel="apple-touch-icon" href="images/icon.jpg" />

</head>
<?php
session_start();
require "dbconnect.php";
$email = $_SESSION["email"];

$query = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
$name = $row["name"];
$faculty = $row["faculty"];
$major = $row["major"];
$img = (empty($row['picture'])) ? 'test.jpg' : $row["picture"];
$introduce = $row["introduce"];

?>
<div class="mainPro">
    <div class="maindivi">หน้าของฉัน</div>
    <form action="editprofile.php" method="post" id="form" enctype="multipart/form-data">
    <div class="Prodivi">
        <div class="LdiP">
            <img src="myfile/<?php echo $img; ?>" width="200" height="200"></center></td><br>
            <label for="img">Select image:</label>
            <input type="file" id="filUpload" name="filUpload"><br>
            <input type="hidden" name="hdnOldFile" value="<?php echo $img; ?>">
        </div>
        <div class="RdiP">
            <label>เมล</label><input type="email" value="<?php echo $email ?>" readonly>
            <p><a href="new-password.php">changed password</a></p>
            <label>ชื่อ</label><input type="text" placeholder="ชื่อ" name="name" value="<?php echo $name ?>"><br>
            <label>คณะ</label><input type="text" placeholder="คณะ" name="faculty" value="<?php echo $faculty ?>"><br>
            <label>สาขา</label><input type="text" placeholder="สาขา" name="major" value="<?php echo $major ?>"><br>
            <label>แนะนำตัว</label><br>
            <textarea rows="4" cols="50" placeholder="แนะนำตัว" name="introduce" value="<?php echo $introduce ?>"></textarea><br>
        </div>
        <br>
        <button input type="submit" class="Probtn" name="change_info">บันทึกข้อมูล</button>
    </div>
    </form>
    <br><br>
    <div class="maindivi">หมวดหมู่ที่สนใจ</div>
    <form action="editprofile.php" method="post" id="form" enctype="multipart/form-data">
    <div class="Prodivi">
        <div class="LdiP">
            <label class="container">กลุ่มวิชาภาษา<input type="checkbox" name="elective_eng1"><span class="checkmark"></span></label>
            <label class="container">กลุ่มวิชามนุษย์ศาสตร์<input type="checkbox" name="elective_hu"><span class="checkmark"></span></label>
            <label class="container">กลุ่มวิชาสังคมศาสตร์<input type="checkbox" name="elective_so1"><span class="checkmark"></span></label>
            <label class="container">กลุ่มวิชาวิทยาศาสตร์กับคณิตศาสตร์<input type="checkbox" name="elective_sci"><span class="checkmark"></span></label>
            <label class="container">วิชาเลือกเสรี<input type="checkbox" name="elective_free"><span class="checkmark"></span></label>
            <label class="container">กลุ่มคุณค่าแห่งชีวิต<input type="checkbox" name="elective_life"><span class="checkmark"></span></label>
            <label class="container">กลุ่มวิถีแห่งสังคม<input type="checkbox" name="elective_so2"><span class="checkmark"></span></label>
        </div>
        <div class="RdiP">
            <label class="container">กลุ่มศาสตร์แห่งการคิด<input type="checkbox" name="elective_think"><span class="checkmark"></span></label>
            <label class="container">กลุ่มภาษาและการสื่อสาร<input type="checkbox" name="elective_eng2"><span class="checkmark"></span></label>
            <label class="container">กลุ่มศิลปแห่งการจัดการ<input type="checkbox" name="elective_manage"><span class="checkmark"></span></label>
            <label class="container">กลุ่มทักษะที่จำเป็นในศตวรรษที่ 21<input type="checkbox" name="elective_21"><span class="checkmark"></span></label>
            <label class="container">กลุ่มทักษะด้านบุคคลและทักษะส่งเสริมวิชาชีพ<input type="checkbox" name="elective_carrer"><span class="checkmark"></span></label>
            <label class="container">กลุ่มทักษะด้านการจัดการและภาวะความเป็นผู้นำ<input type="checkbox" name="elective_leader"><span class="checkmark"></span></label>
            <label class="container">กลุ่มทักษะด้านภาษาและการสื่อสาร<input type="checkbox" name="elective_eng3"><span class="checkmark"></span></label>
        </div>
        <br>
        <button input type="submit" class="Probtn" name="change_sub">บันทึกข้อมูล</button>
    </div>
    </form>
</div>
<?php  
 
if($_GET['error']==1){
    echo '<script type="text/javascript">';
    echo ' alert("Change Complete!!"); ';  //not showing an alert box.
    echo '</script>';
}
else if ($_GET['error']==2){
    echo '<script type="text/javascript">';
    echo ' alert("Change Fail!!"); ';  //not showing an alert box.
    echo '</script>';
}

?>