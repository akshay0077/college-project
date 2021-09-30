<?php
	include("include/header.php");
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tables</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>no</th>
                      <th>committee name</th>
                      <th>date</th>
                      <th>action</th>     
`					 </tr>
                  </thead>
                  <tbody>
				  <?php 
						$com_q="select * from committee";
						
						$com_res="mysqli_query($link,com_q)";
						
						while($com_row= mysqli_fetch_assoc($com_res))
						{
							echo '<tr>
									<td>'.$com_row['com_id'].'</td>
									<td>'.$com_row['com_nm'].'</td>
									<td>'.date("d-M-Y",$com_row['com_time']).'</td>
									<td>
									<a href="#" class="btn btn-success btn-sm">Edit</a>
									<a href="#" class="btn btn-danger btn-sm">Delete</a>
									</td>
									</tr>';
						}
				  
				  ?>
                 
  
                  </tbody>
                </table>
              </div>
	</div>
  </div>

</div>
<!-- /.container-fluid -->
<?php
	include("include/footer.php");
?>