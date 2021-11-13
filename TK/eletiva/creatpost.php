<title>Eletiva | Creat Post</title>
<link rel="stylesheet " type="text/css " href="css/creatpost.css ">

<?php
//For Student
require "dbconnect.php";

include "header.php";

//DB : subject
?>
<?php if(isset($_SESSION['status']) && !empty($_SESSION['status']) && $_SESSION['status'] == 1) : ?>
<body>
    <div class="container-fluid  pt-5">
        <div class="row">

            <div class="col-lg-2 col-sm-1 "></div>

            <div class="col-lg-8 col-sm-10 ">
                <div class="box-post">
                    <h2>เขียนโพสต์</h2>
                    <form action="creatpost.php" method="POST"> <!-- controllerPostPollData.php -->
                        <label for="Category" class="form-label" onChange="showState(this);" id="category">หมวดหมู่</label>
                        <?php
                            //$selected = "-- เลือกหมวดหมู่ --";
                            $options = array('-- เลือกหมวดหมู่ --','กลุ่มวิชาภาษา', 'กลุ่มวิชามนุษย์ศาสตร์', 'กลุ่มวิชาสังคมศาสตร์', 'กลุ่มวิชาวิทยาศาสตร์กับคณิตศาสตร์', 'วิชาเลือกเสรี',                             'กลุ่มคุณค่าแห่งชีวิต','กลุ่มวิถีแห่งสังคม','กลุ่มศาสตร์แห่งการคิด','กลุ่มภาษาและการสื่อสาร','กลุ่มศิลปแห่งการจัดการ','กลุ่มทักษะที่จำเป็นในศตวรรษที่ 21','กลุ่มทักษะด้านบุคคลและทักษะส่งเสริมวิชาชีพ','กลุ่มทักษะด้านการจัดการและภาวะความเป็นผู้นำ','กลุ่มทักษะด้านภาษาและการสื่อสาร');
                            echo "<select>";
                            foreach($options as $option){
                                if($selected == $option) {
                                    echo "<option selected='selected' value='$option'>$option</option>";
                                }
                                else {
                                    echo "<option value='$option'>$option</option>";
                                }
                            }
                            echo "</select>";
                        ?>
                        <!--
                        <select class="form-select form-select-sm" name="category" onclick="function()">
                            <option selected value="">-- เลือกหมวดหมู่ --</option>
                            <option value='$row["กลุ่มวิชาภาษา"]'>กลุ่มวิชาภาษา</option>
                            <option value='$row["กลุ่มวิชามนุษย์ศาสตร์"]'>กลุ่มวิชามนุษย์ศาสตร์</option>
                            <option value='$row["กลุ่มวิชาสังคมศาสตร์"]'>กลุ่มวิชาสังคมศาสตร์</option>
                            <option value='$row["กลุ่มวิชาวิทยาศาสตร์กับคณิตศาสตร์"]'>กลุ่มวิชาวิทยาศาสตร์กับคณิตศาสตร์</option>
                            <option value='$row["วิชาเลือกเสรี"]'>วิชาเลือกเสรี</option>
                            <option value='$row["กลุ่มคุณค่าแห่งชีวิต"]'>กลุ่มคุณค่าแห่งชีวิต</option>
                            <option value='$row["กลุ่มวิถีแห่งสังคม"]'>กลุ่มวิถีแห่งสังคม</option>
                            <option value='$row["กลุ่มศาสตร์แห่งการคิด"]'>กลุ่มศาสตร์แห่งการคิด</option>
                            <option value='$row["กลุ่มภาษาและการสื่อสาร"]'>กลุ่มภาษาและการสื่อสาร</option>
                            <option value='$row["กลุ่มศิลปแห่งการจัดการ"]'>กลุ่มศิลปแห่งการจัดการ</option>
                            <option value='$row["กลุ่มทักษะที่จำเป็นในศตวรรษที่ 21"]'>กลุ่มทักษะที่จำเป็นในศตวรรษที่ 21</option>
                            <option value='$row["กลุ่มทักษะด้านบุคคลและทักษะส่งเสริมวิชาชีพ"]'>กลุ่มทักษะด้านบุคคลและทักษะส่งเสริมวิชาชีพ</option>
                            <option value='$row["กลุ่มทักษะด้านการจัดการและภาวะความเป็นผู้นำ"]'>กลุ่มทักษะด้านการจัดการและภาวะความเป็นผู้นำ</option>
                            <option value='$row["กลุ่มทักษะด้านภาษาและการสื่อสาร"]'>กลุ่มทักษะด้านภาษาและการสื่อสาร</option>
                        </select>
                            -->
                        <div class="row ">
                            <?php
                            /*
                            if($option != '-- เลือกหมวดหมู่ --'){
                                $sqlsub = "SELECT 'ID_subject' FROM 'subject' WHERE 'Group_subject' = '$option'";
                            }
                            else{
                                $sqlsub = "SELECT 'ID_subject' FROM 'subject' WHERE 1";
                            }
                            $sqlsub = "SELECT 'ID_subject' FROM 'subject' WHERE 1";
                            $result = $connect->query($sqlsub);
                            */
                            ?>
                            <div class="col-lg-6 ">
                                <label for="subjectecode " class="form-label ">รหัสวิชา</label>
                                <input class="form-control form-control-sm " list="codes" type="text" id="code" placeholder="subject ID" name="subject_ID" required>
                                <?php while($row =  mysqli_fetch_assoc($result)): ?>
                                <datalist id="codes">
                                    <option value="<?php echo $row['ID_subject']; ?>"></option>
                                </datalist>
                                <?php endwhile ?>
                            </div>
                            
                            <?php 
                            echo $row['ID_subject'];
                            $subject_ID = $row['ID_subject'];
                            $namesubject = "SELECT Name_subject FROM subject WHERE ID_subject = $subject_ID";
                            ?>
                            <div class="col-lg-6 ">
                                <label for="subjectename " class="form-label ">ชื่อวิชา</label>
                                <input class="form-control form-control-sm " type="text" id="subject " placeholder="subject name" name="subject_Name" value="<?php echo $row['namesubject'] ?>" readonly>
                            </div>

                            </div>
                            <div class="post-check">
                            <label class="form-check-label" for="radio0">ประเภทโพสต์</label>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="inlineRadio1">
                                <input class="form-check-input " type="radio" checked="checked"name="post_type" id="inlineRadio1" value="1"> โพสต์ธรรมดา
                                </label>
                            </div>
                            <div class="form-check form-check-inline"><label class="form-check-label" for="inlineRadio2">
                                <input class="form-check-input" type="radio" name="post_type" id="inlineRadio2" value="2"> โพสต์รีวิว
                                </label>
                            </div>
                            </div>
                            <div class="row g-2 align-items-center">
                            <div class="col-lg-auto">
                                <label for="instructor" class="form-label">ชื่อเรื่อง</label>
                            </div>
                            <div class="col-lg-10">
                                <input class="form-control form-control-sm " type="text" id="instructor" name="post_topic" placeholder="topic" required>
                            </div>
                            </div>
                            <div class="details">
                                <label for="details" class="form-label ">รายละเอียด:</label>
                                <textarea class="form-control form-control-sm " id="details" name="post_details" placeholder="" rows="4" required></textarea>
                            </div>
                            <div class="d-grid col-lg-6 mx-auto ">
                                <input class="form-control button " type="submit" value="สร้างโพสต์" name="creat_post">
                            </div>
                        </div>
                </form>
            </div>

        </div>

        <div class="col-lg-2 col-sm-1"></div>
    </div>

</body>
<?php else: ?>
<?php include "logout.php"; ?>
<?php endif ?>
<script>
function showState(sel) {
    var country_id = sel.options[sel.selectedIndex].value;  
    $("#category").html( "" );
    if (ID_subject.length > 0 ) { 
     $.ajax({
            type: "POST",
            url: "creatpost.php",
            data: "ID_subject="+ID_subject,
            cache: false,
            beforeSend: function () { 
                $('#category').html('<img src="loader.gif" alt="" width="24" height="24">');
            },
            success: function(html) {    
                $("#category").html( html );
            }
        });
    } 
}
</script>