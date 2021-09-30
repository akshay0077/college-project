<?php
	include("include/header.php");
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">RESULT</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary">candidate result</h6>
	</div>
	<div class="card-body">
		<form action="" method="">
			
			
			
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
			
			
		</form>
	</div>
  </div>

</div>
<!-- /.container-fluid -->
<?php
	include("include/footer.php");
?>