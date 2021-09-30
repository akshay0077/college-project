<?php

	@session_start();
	
	if(! isset($_SESSION['client']['status']))
	{
		header("location:index.php");
	}
	
	include("include/header.php");
?>

<div id="featured">
			<div class="title">
				<h1>	
				<img src="images/givevote.png" height="250px" width="400px"/>
				</h1>
				
				
			</div>	
			<ul class="style1">
			<form action="vote_process.php" method="post" class="form">

<?php
		
		include("include/config.php");

		$c_q="select * from candidate";
						
		$c_res=mysqli_query($link,$c_q);
		while($link=mysqli_fetch_array($c_res))
		{
				$c_id=$link[0];
				$c_fnm=$link[1];			
?>
	
	<tr>
		<td>
		<input type="radio" name="cid" value='<?php echo $c_id; ?>' /><?php echo $c_fnm; ?></br>
	</tr>
	<?php } ?>


<table>

<h1 align="center"></h1>
	<?php
	while($c_row=mysqli_fetch_assoc($c_res))
	 {
		echo "<tr><th>";
		echo $c_row["c_id"];
		echo "</th><td>";
		echo $c_row["c_fnm"];
		echo "</td></tr>";
	 }
	 ?>
		</br></br>
		<input type="submit" name="submit" class="btn-submit" value="submit" />
</table>
		
	 </div>
	
	 </form>
	 </ul>
		<?php
		include("include/footer.php");
	?>