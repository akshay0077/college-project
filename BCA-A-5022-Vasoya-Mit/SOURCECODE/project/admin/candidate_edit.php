<?php
	include("include/header.php");
?>
<form action="candidate_edit_process.php" method="post">
 <?php 
$id=$_GET['c_id'];
echo $cq="select * from candidate where c_id = $id";
$c_res=mysqli_query($link,$cq) or die(mysqli_error($link));
while ($c_row=mysqli_fetch_array($c_res))
{
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">candidate</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary"> Edit candidate</h6>
	</div>
	<div class="card-body">
	
		<form action="candidate_edit_process.php" method="post">
			<input type="hidden" name="id" value="<?php echo $res['id'];?>"  />

			<div class="form-group">
				<label>Candidate Name</label>
				<input type="text" name="fnm" value="<?php echo $c_row['c_fnm']?>"class="form-control" required/>
			</div>
			
			<div class="form-group">
			   <label>gender: </label>
				<div>
				<input type="radio" name="gender" value="Male"<?php if($c_row['gender']=='Male'){echo "checked";} ?>>Male
				<input type="radio" name="gender" value="Female"<?php if($c_row['gender']=='Female'){echo "checked";} ?>>Female
				</div>
				
			</div>
			
			<div class="form-group">
				<label>Birth Date:</label>
				<input type="text" name="bd" value="<?php echo $c_row['c_bd']?>"class="form-control" required/>
			</div>
			
			<div class="form-group">
				<label>mobile no:</label>
				<input type="text" name="mno" value="<?php echo $c_row['c_mno']?>"class="form-control" required/>
			</div>
			
			<div class="form-group">
				<label>email</label>
				<input type="text" name="email" value="<?php echo $c_row['c_email']?>"class="form-control" required/>
			</div>
			
			<div class="form-group">
			<label>cource: </label>
				<select name="cource" class="form-control">
					<option <?php if($c_row['course']=="BSCIT"){echo "selected";} ?> value="BSCIT"> BSCIT </option>
					<option <?php if($c_row['course']=="MCA"){echo "selected";} ?>value="MCA">MCA</option>
				<option <?php if($c_row['course']=="MSCIT"){echo "selected";} ?>value="MSCIT">MSCIT</option>
				<option <?php if($c_row['course']=="BCA"){echo "selected";} ?>value="BCA">BCA</option>
				</select>
		        <br/> <br/>
			</div>
			
			
			<div class="form-group">
				<label>committee: </label>
				<select name="committee" class="form-control">
				<?php
						$com_q="select * from committee";
						
						$com_res=mysqli_query($link,$com_q);
						
						while($com_row=mysqli_fetch_assoc($com_res))
						{
						    echo '<option>'.$com_row[com_cnm].'</option>';
							'<td>'.date("d-M-Y",$com_row[com_time]).'</td>';
						}
				?>
				</select>
		        <br/> <br/>
			</div>
			
			<input type="submit" class="btn btn-success" value="Edit Candidate">
		</form>
	</div>
  </div>

</div>
<!-- /.container-fluid -->
<?php
}
	include("include/footer.php");
?>