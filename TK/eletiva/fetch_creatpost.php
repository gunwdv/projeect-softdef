<?php
error_reporting(0);
$connect = mysqli_connect("localhost", "root", "", "db_eletiva");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM post 
	WHERE ID_subject LIKE '%".$search."%'
	";
}

$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_array($result))
	{
		$output .= 	$row["name_subject"];
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>