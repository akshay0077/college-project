<?php
	include("../include/config.php");
	
	extract($_POST);
	$q="update committee
	set com_no='$no',
	com_cnm='$cnm',
	com_desc='$desc' 
	where com_id='$id'";
	$c_str=mysqli_query($link,$q)or die(mysql_error());

	if($str)
	{
		header("location:committeetable.php");
		
	}
	else
	{
		header("location:committee.php");
	}
	

?> 