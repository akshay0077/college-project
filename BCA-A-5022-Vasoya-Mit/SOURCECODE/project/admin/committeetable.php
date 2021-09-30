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
	  <h6 class="m-0 font-weight-bold text-primary">Committee Tables</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<?php
		
		include("../include/config.php");

		$com_q="select * from committee";
						
		$com_res=mysqli_query($link,$com_q);
						
?>

<center>

<h1 align="center"></h1>
<table border=1px #000>

<thead>
	<tr>
		<th>no</th>
		<th>Committee Name</th>
		<th>Image</th>
		<th>Description</th>
		<th>Edit</th>
		<th>Delete</th>
		
	</tr>
	</thead>
	<tbody>
	<?php
	
	while($com_row=mysqli_fetch_assoc($com_res))
	 {
		echo "<tr><th>";
		echo $com_row["com_no"];
		echo "</th><td>";
		echo $com_row["com_cnm"];
		echo "</td><td>";
		echo "<img src='../images/".$com_row['com_img']."' height=100 width=100>";
		echo "</td><td>";
		echo $com_row["com_desc"];
		echo "</td>";
		echo "<td> <a href='committee_edit.php?com_id=".$com_row["com_id"]."'>Edit</a></td>";
		echo "<td> <a href='committee_delete.php?com_id=".$com_row["com_id"]."'>Delete</a></td>";
		echo "</tr>";
	}
	
	 ?>
	 </tbody>
	  </table>
	 </div>
	 </center>
			         
			</div>
	</div>
  </div>

</div>
<!-- /.container-fluid --   		echo "<img src=$com_row[com_img] height=100 width=100>";
>
<?php
	include("include/footer.php");
?>