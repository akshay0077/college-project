<?php
	include("include/header.php");
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Admin</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary"> add new Admin</h6>
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
		<form action="admin1_process.php" method="post">
			
			
			<div class="form-group">
				<label>Admin Name</label>
				<input type="text" name="fnm" class="form-control">
			</div>
			<div class="form-group">
				<label>password</label>
				<input type="password" name="pwd" class="form-control">
			</div>
			
			<div class="form-group">
			   <label>gender: </label>
				<div>
				<input type="radio" name="gender" class="form-control" value="male"/> Male
				<input type="radio" name="gender" class="form-control" value="female"/>Female
				</div>
				
			</div>
			
			<div class="form-group">
				<label>Birth Date:</label>
				<input type="text" name="bd" class="form-control">
			</div>
			
			<div class="form-group">
				<label>mobile no:</label>
				<input type="text" name="mno" class="form-control">
			</div>
			
			<div class="form-group">
				<label>email</label>
				<input type="text" name="email" class="form-control">
			</div>
			
			<input type="submit" class="btn btn-success" value="Submit">
		</form>
	</div>
  </div>

</div>
<!-- /.container-fluid -->
<?php
	include("include/footer.php");
?>