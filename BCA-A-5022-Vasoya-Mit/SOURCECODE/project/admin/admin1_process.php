<?php session_start();

	if(! empty($_POST))
	{
		extract($_POST);
		$error=array();
		
		if(empty($fnm))
		{
			$error[]="please enter committee name";
		}
		
		if(empty($pwd))
		{
			$error[]="please enter password";
		}
		
		if(empty($bd))
		{
			$error[]="please enter birthdate";
		}
		
		if(empty($mno))
		{
			$error[]="please enter mobile no";
		}
		
		if(empty($email))
		{
			$error[]="please enter email adderss";
		}
		
		if(! empty ($error))
		{
			$_SESSION['error']=$error;
			header("location:admin1.php");
		}
			
		else
		{
			$t = time();
			include("../include/config.php");
			
			$q="insert into admin1 (a_fnm,a_pwd,a_gender,a_bd,a_mno,a_email,a_time) 
			values ('$fnm','$pwd','$gender','$bd','$mno','$email','$t')";
			 
			mysqli_query($link,$q) or die(mysqli_error($link));
			
			$_SESSION['done']="successfully admin inserted";
			header("location:admin1.php");
		}
		
	}
	else
	{
		header("location:admin1.php");
	}
?>