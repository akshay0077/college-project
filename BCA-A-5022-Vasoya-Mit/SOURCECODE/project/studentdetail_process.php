<?php
	if(! empty ($_POST))
	{
		$error=array();
		extract($_POST);
		
		if(empty($fnm))
		{
			$error[]="please Enter Full Name";
		}
		
		if(empty($unm))
		{
			$error[]="please Enter user Name";
		}
		
		if(empty($mno))
		{
			$error[]="please Enter mobile no";
		}
		
		if(empty($pwd) || empty($cpwd))
		{
			$error[]="please Enter password";
		}
		else if($pwd != $cpwd)
		{
			$error[]="don't match password";
		}
		else if(strlen($pwd) > 5)
		{
			$error[]="please Enter 5 digit password";
		}
		
		if(empty($mno))
		{
			$error[]="please Enter mobile number";
		}
		else if(! is_numeric($mno) )
		{
			$error[]="please Enter valid mobile number";
		}		
		
		if(! empty($error))
		{
			foreach($error as $er)
			{
				echo '<font color="red">'.$er.'</font></br>';
			}
		}
		else
		{
			$t = time();
			
			include("include/config.php");
			
			$q="insert into studentdetail(s_fnm,s_unm,s_gender,s_mno,s_pwd,s_email,s_cource,s_time)values
			('$fnm','$unm','$gender','$mno','$pwd','$email','$cource','$t')";
			
			mysqli_query($link,$q);
			$_SESSION['done']="successfully admin inserted";

			header("location:studentdetail.php");
		}
	}
		else
		{
			header("location:studentdetail.php");
		}

?>