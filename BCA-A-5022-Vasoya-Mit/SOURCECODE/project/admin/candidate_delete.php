<?php
	include("../include/config.php");
$id=$_GET['c_id'];
$q="delete from candidate where c_id=$id";
$c_res=mysqli_query($link,$q) or die(mysqli_error($link));
echo "record deleted";
header("location:candidatetable.php");
?>
