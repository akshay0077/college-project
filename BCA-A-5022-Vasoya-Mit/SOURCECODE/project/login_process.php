<?php session_start();
	if(!empty ($_POST))
	{
		extract ($_POST);
		
		if(empty($unm) || empty($pwd))
		{
			echo "please enter username & password";
		}
		else
		{
			include("include/config.php");
			
			$q="select * from studentdetail
			   where s_unm='".addslashes($unm)."' and s_pwd='".addslashes($pwd)."'";
			
			$res=mysqli_query($link,$q);
			
			$row=mysqli_fetch_assoc($res);
			
			if(empty($row))
			{
				echo "Wrong username or password";
			}
			else
			{
				$_SESSION['client']['fnm']=$row['s_fnm'];
				$_SESSION['client']['id']=$row['s_id'];
				$_SESSION['client']['status']=true;
				
				header("location:index.php");
			}
		}
	}
	else
	{
		header("location:login.php");
	}
?>