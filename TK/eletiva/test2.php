<h2>My First Web Page</h2>
<p>My First Paragraph.</p>

    <?php
    require "dbconnect.php";

    $query = "SELECT * FROM subject";
    $result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
   // echo $row['Name_subject'];
    while($row =  mysqli_fetch_assoc($result)){
        echo $row['Name_subject'];
        echo "<br>";
    }
    $test = "gdsgdf";
    
    ?>
<script>

    document.write('<?php echo $test; ?>');
var fs = "ddgsgs";

document.write(fs);


</script>