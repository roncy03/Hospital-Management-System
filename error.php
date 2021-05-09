<?php
require("include/dbinfo.php");
$link=mysqli_connect($server,$user,$pass)or die(errorReport(mysqli_error($link)));
mysqli_select_db($link, $db)or die(errorReport(mysqli_error($link)));
mysqli_query($link, "delete from Session");
?>