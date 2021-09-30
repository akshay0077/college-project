<?php
	include("include/header.php");
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">candidate</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary"> add new candidate</h6>
	</div>
	<div class="card-body">
	
		<form action="candidate_edit_process.php" method="post">
			
			<div class="form-group">
				<label>id</label>
				<input type="text" name="id" class="form-control">
			</div>
			<div class="form-group">
				<label>Candidate Name</label>
				<input type="text" name="fnm" class="form-control">
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
			
			<div class="form-group">
			<label>cource: </label>
				<select name="cource" class="form-control">
					<option  value="BSCIT"> BSCIT </option>
					<option value="MCA">MCA</option>
				<option value="MSCIT">MSCIT</option>
				<option value="BCA">BCA</option>
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
			
			<input type="submit" class="btn btn-success" value="Submit">
		</form>
	</div>
  </div>

</div>
<!-- /.container-fluid -->
<?php
	include("include/footer.php");
?>