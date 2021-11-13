<title>Eletiva | Search</title>
<link rel="stylesheet" type="text/css" href="css/home_index.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<?php
require "dbconnect.php";

include "header.php";
?>
<?php if((isset($_SESSION['status']) && !empty($_SESSION['status']) && $_SESSION['status'] != 3) || empty($_SESSION['status'])) : ?>
<div class="inf">
    <div class="form_find">
    <form class="" action="/action_page.php"> 
    <i class="align_icon fa fa-search"></i>
    <input type="text" class="searchbox A_left" placeholder="Search...  [Subject ID, Subject Name]" name="search_text" id="search_text">
    <button class="btn_find " type="submit">ค้นหา</button>
    <!--<button class="btn_find " type="submit"><i class="icon_find fa fa-search"></i></button>-->
    </form>
</div>

<section>
    <!-- โพสล่าสุด -->
    <div class="inf">
        <br>
        <div class="posttext">
            <i class="fas fa-bookmark"></i>
            <p class="mainC">ผลการค้นหา</p>
        </div>
        <!-- -ข้อมูล -->
        <?php              
        echo '<a href="#Test1" class="Content">';
        echo '    <div class="post_btn">';
        echo '        <div class="A_left">';
        echo '            <i class="icon_next fas fa-chevron-circle-right"></i>';
        echo '            <h4 class="textC" name="Post">Post1โพส</h4>';
        echo '            <h6 class="textS" name="subject">วิชาเลือกกลุ่ม....</h6>';
        echo '            <br><p class="Timestamp">User:??? Time:???</p>';
        echo '        </div>';
        echo '        <div  class="A_right">';
        echo '            <i class="iconcomment far fa-comment-dots"></i>';
        echo '            <h5 class="commentN">num</h5>';
        echo '        </div>';
        echo '    </div>';
        echo '</a>';
        ?>
        <div id="result"></div>
		</div>
    </div>
</section>

<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>

<?php else: ?>
<?php include "logout.php"; ?>
<?php endif ?>
