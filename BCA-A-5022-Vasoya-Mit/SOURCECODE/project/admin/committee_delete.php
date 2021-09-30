<?php
	include("../include/config.php");
$id=$_GET['com_id'];
$q="delete from committee where com_id=$id";
$com_res=mysqli_query($link,$q) or die(mysqli_error($link));
echo "record deleted";
header("location:committeetable.php");
?>
