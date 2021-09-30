<?php session_start();
	if ( !isset($_SESSION['client']) )
    {
	header("location:index.php");
   }
	else
			{
			$q="select * from vote where s_id='".$_SESSION['client']['id']."'";

			$res=mysqli_query($link,$q);
			
			$row=mysqli_fetch_assoc($res);

			//mysqli_query($res) or die(mysqli_error($res));
			if(!empty($row))
			{
				header("location:index.php");
			}
			}
		if(! empty ($_POST))
	   {
		//$error=array();
		extract($_POST);
		 	
		if(empty($cid))
		{
			echo "please select one candidate";		
		}
		 
		else
		{
			$t = time();
			
			include("include/config.php");
			
			$sid=$_SESSION['client']['id'];
			
			$q="insert into vote(s_id,c_id,vote_time)values
			('$sid','$cid','$t')";
			

			mysqli_query($link,$q) or die(mysqli_error($link));
			
			header("location:vote.php");
		}
	 }
		else
		{
			header("location:vote.php");
		}
?>

