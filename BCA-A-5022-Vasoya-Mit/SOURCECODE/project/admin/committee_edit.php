<?php
	include("include/header.php");
?>
<form action="committee_edit_process.php" method="post">
 <?php 
$id=$_GET['com_id'];
$cq="select * from committee where com_id = $id";
$com_res=mysqli_query($link,$cq) or die(mysqli_error($link));
while ($com_row=mysqli_fetch_array($com_res))
{
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">committee</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary">Edit candidate</h6>
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
			<input type="hidden" name="id" value="<?php echo $res['id'];?>"  />

			<div class="form-group">
				<label>no</label>
				<input type="text" name="no" value="<?php echo $com_row['com_no']?>"class="form-control" required/>
			</div>
			
			<div class="form-group">
				<label>Committee Name</label>
				<input type="text" name="cnm" value="<?php echo $com_row['com_cnm']?>"class="form-control" required/>
			</div>
			
<div class="form-group">
				<label>picture</label>
				<input type="file" name="img" value="<?php echo $com_row['com_img']?>"class="form-control"/>
			</div>
			
			<div class="form-group">
				<label>description</label>
				<input type="text"name="desc" value="<?php echo $com_row['com_desc']?>"class="form-control"/>
			</div>
			
			<input type="submit" class="btn btn-success" value="edit Committee">
		</form>
	</div>
  </div>

</div>
<!-- /.container-fluid -->
<?php
}
	include("include/footer.php");
?>