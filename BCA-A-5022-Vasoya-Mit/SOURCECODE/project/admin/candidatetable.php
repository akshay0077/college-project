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
	  <h6 class="m-0 font-weight-bold text-primary">Candidate Tables</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
         <?php
		
		include("../include/config.php");

		$c_q="select * from candidate";
						
		$c_res=mysqli_query($link,$c_q);
						
?>

<center>

<h1 align="center"></h1>
<table border=1px #000>
<thead>
	<tr>
		<th>Id</th>
		<th>Candidate Name</th>
		<th>Gender</th>
		<th>Birth Date</th>
		<th>Mobile No</th>
		<th>Email</th>
		<th>Cource</th>
		<th>committee</th>
		<th>Date</th>
		<th>edit</th>
		<th>delete</th>


		
	</tr>
	</thead>
	<tbody>
	<?php
	
	while($c_row=mysqli_fetch_assoc($c_res))
	 {
		echo "<tr><th>";
		echo $c_row["c_id"];
		echo "</th><td>";
		echo $c_row["c_fnm"];
		echo "</td><td>";
		echo $c_row["c_gender"];
		echo "</td><td>";
		echo $c_row["c_bd"];
		echo "</td><td>";
		echo $c_row["c_mno"];
		echo "</td><td>";
		echo $c_row["c_email"];
		echo "</td><td>";
		echo $c_row["c_cource"];
		echo "</td><td>";
		echo $c_row["c_committee"];
		echo "</td><td>";
		echo $c_row["c_time"];
		echo "</td>";
		echo "<td> <a href='candidate_edit.php?c_id=".$c_row["c_id"]."'>Edit</a></td>";
		echo "<td> <a href='candidate_delete.php?c_id=".$c_row["c_id"]."'>Delete</a></td>";
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
<!-- /.container-fluid -- <center><center><img src=../images/edit.png height=45px width=40px></center><img src=../images/delete.jpg height=45px width=40px></center>>
<?php
	include("include/footer.php");
?>