<?php
	include("include/header.php");
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">committee</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary">Add new candidate</h6>
	</div>
	<div class="card-body">
	  <?php
			if(isset($_SESSION['done']))
			{
				echo '<font color="green">'.$_SESSION['done'].'</font>';
				unset($_SESSION['done']);
		    }
		
	   else if(! empty($_SESSION['error']))
		{
			foreach($_SESSION['error'] as $er)
			{
				echo '<font color="red">'.$er.'</font>';
			}
			unset($_SESSION['error']);
		}
	  ?>
		<form action="committee_process.php" method="post">
			
			<div class="form-group">
				<label>no</label>
				<input type="text" name="no" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Committee Name</label>
				<input type="text" name="cnm" class="form-control">
			</div>
			
			<div class="form-group">
				<label>picture</label>
				<input type="file" name="img" class="form-control">
			</div>
			
			<div class="form-group">
				<label>description</label>
				<textarea name="desc" class="form-control"></textarea>
			</div>
			
			<input type="submit" class="btn btn-success" value="Add Committee">
		</form>
	</div>
  </div>

</div>
<!-- /.container-fluid -->
<?php
	include("include/footer.php");
?>