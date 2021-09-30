<?php session_start();

		if(! empty($_POST) )
		{
			extract($_POST);
			
			if(empty($fnm)||empty($pwd))
			{
				echo "please Enter username and password";
			}
			else
			{
				include("../include/config.php");
				
				$q="select * from admin1 where a_fnm='".addslashes($fnm)."'
				and a_pwd='".addslashes($pwd)."'";
				
				$res=mysqli_query($link,$q);
				
				$row=mysqli_fetch_assoc($res);
				
				if(empty($row))
				{
					echo "wrong usernameor password";
				}
				else
				{
					$_SESSION['client']['fnm']=$row['a_fnm'];
					
					$_SESSION['client']['uid']=$row['a_id'];
					
					$_SESSION['client']['status']=true;
					
					header("location:index1.php");
				}
			}
		}
		else
		{
			header("location:index.php");
		}
?>
			

				