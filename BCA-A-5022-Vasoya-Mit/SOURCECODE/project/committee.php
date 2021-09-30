<?php
	include("include/header.php");
?>
<div id="featured">
			<div class="title">
				<h2>
				<img src="images/Educationcomm.jpg" height="150px" width="500px"/>
				</h2>
			</div>
			<ul class="style1">
<?php
		
		include("include/config.php");

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
		echo "<img src='images/".$com_row['com_img']."' height=100 width=100>";
		echo "</td><td>";
		echo $com_row["com_desc"];
		echo "</td></tr>";
	}
	
	 ?>
	 </tbody>
	  </table>
	 </div>
	 </center>
				
				
			</ul>
		</div>
		<?php
		include("include/footer.php");
	?>