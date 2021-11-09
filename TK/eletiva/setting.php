<title>Eletiva | Setting</title>
<?php
require "dbconnect.php";

include "header.php";
?>
<?php if((isset($_SESSION['status']) && !empty($_SESSION['status']) && (($_SESSION['status'] == 1) || $_SESSION['status'] == 2))) : ?>

<?php else: ?>
<?php include "logout.php"; ?>
<?php endif ?>