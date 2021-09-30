<?php session_start();
		
		if(! empty ($_POST))
		{
			extract($_POST);
		    $error=array();
		
			if(empty($fnm))
			{
			   $error[]="Please Enter Candidate Name";
			}
			
			if(empty($bd))
			{
			   $error[]="Please Enter Birthdate ";
			}
			
			if(empty($mno))
			{
			   $error[]="Please Enter Mobile Number";
			}
			
			if(empty($email))
			{
			   $error[]="Please Enter Email Address";
			}
			
			if(! empty ($error))
			{
				$_SESSION['error']=$error;
				header("location:candidate.php");
			}
			
			else 
			{
				$t=time();
				include("../include/config.php");
				
				$q="insert into candidate
					(c_fnm,c_gender,c_bd,c_mno,c_email,c_cource,c_committee,c_time)
					values('$fnm','$gender','$bd','$mno','$email','$cource','$committee','$t')";
					
					mysqli_query($link,$q);

					$_SESSION['done']="done successfully candidate added";
					
					header("location:candidate.php");
			}
		}
		else
		{
			header("location:candidate.php");
		}

?>