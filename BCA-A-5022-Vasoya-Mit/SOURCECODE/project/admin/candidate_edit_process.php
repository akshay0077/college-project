<?php
	include("../include/config.php");
	
	extract($_POST);
	$q="update candidate
	set c_id='$id',
	c_fnm='$fnm',
	c_bd='$bd',
	c_mno='$mno',
	c_email='$email',
	c_cource='$cource',
	c_committee='$committee'
	where c_id='$id'";
	$c_str=mysqli_query($link,$q)or die(mysqli_error());
	if($str)
	{
		header("location:candidatetable.php");
	}
	else
	{
		header("location:candidate.php");
	}
	

?> 