<?php
	include("include/header.php");
?>
<div id="featured">
			<div class="title">
				<h2>
				<img src="images/candidates-image.jpg" height="150px" width="400px"/>
				</h2>
			</div>
			<ul class="style1">
<?php
		
		include("include/config.php");

		$c_q="select * from candidate";
						
		$c_res=mysqli_query($link,$c_q);
						
?>



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
		echo "</td></tr>";

	}
	
	 ?>
	 </tbody>
	  </table>
	 </div>
	

	
			</ul>
		</div>
		<?php
		include("include/footer.php");
	?>