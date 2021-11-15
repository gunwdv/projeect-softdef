<?php/*
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
                            echo "</select>";*/
                        ?>

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
                                /*
                                action="<?php echo $_SERVER['$PHP_SELF']; ?>"
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
}*/