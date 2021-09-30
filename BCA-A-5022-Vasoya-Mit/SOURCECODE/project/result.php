<?php
	include("include/header.php");
?>
<div id="featured">
			<div class="title">
				<h2>result</h2>
			</div>
			<ul class="style1">
				<?php
					include("include/config.php");
					$c_q= "select * from candidate";
					
					$c_res = mysqli_query($link,$c_q);
					
					while($crow = mysqli_fetch_assoc($c_res))
					{
						echo $crow['c_fnm'];
						
						$countq="select count(*) from vote
							where c_id = ".$crow['c_id'];
							
						$countres = mysqli_query($link,$countq);
						
						$countrow = mysqli_fetch_assoc($countres);
						echo $countrow['count(*)'];
						
						echo '<br />';
					}
				?>
			</ul>
		</div>
		<?php
		include("include/footer.php");
	?>