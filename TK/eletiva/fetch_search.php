<link rel="stylesheet" type="text/css" href="css/home_index.css">
<?php
require "dbconnect.php";

$output = '';
if(isset($_POST["queryS"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["queryS"]);
	$query = "
	SELECT * FROM post 
	WHERE Group_subject LIKE '%".$search."%'
	OR ID_subject LIKE '%".$search."%' 
	OR name_subject LIKE '%".$search."%' 
	OR title_post LIKE '%".$search."%' 
	OR create_by LIKE '%".$search."%' 
	ORDER BY ID_post DESC
	";
}
else
{
	$query = "SELECT * FROM post ORDER BY ID_post DESC";
}
$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_array($result))
	{
		$output .=  '<a href="post.php?id='.$row['ID_post'].'" class="Content">
					    <div class="post_btn">
					        <div class="A_left">
					            <i class="icon_next fas fa-chevron-circle-right"></i>
					            <h4 class="textC" name="Post">'.$row['title_post'].'</h4>
					            <h6 class="textS" name="subject">'.$row['Group_subject'].'</h6>
					            <br><p class="Timestamp">User:'.$row['create_by'].' Time:'.$row['time_post'].'</p>
					        </div>
					        <div  class="A_right">
					            <i class="iconcomment far fa-comment-dots"></i>
					            <h5 class="commentN">num</h5>
					        </div>
					    </div>
					</a>
					';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>