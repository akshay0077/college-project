<?php session_start();

	if(! empty($_POST))
	{
		extract($_POST);
		$error=array();
		
		if(empty($cnm))
		{
			$error[]="please enter committee name";
		}
		
		if(! empty ($error))
		{
			$_SESSION['error']=$error;
			header("location:committee.php");
		}
			
		else
		{
			$t = time();
			include("../include/config.php");
			
			$q="insert into committee (com_no,com_cnm,com_img,com_desc,com_time) 
			values ('$no','$cnm','$img','$desc','$t')";
			 
			mysqli_query($link,$q) or die(mysqli_error($link));
			
			$_SESSION['done']="successfully committee inserted";
			header("location:committee.php");
		}
		
	}
	else
	{
		header("location:committee.php");
	}
?>