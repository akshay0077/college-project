<?php
	include("include/header.php");
?>
<div id="featured">
			<div class="title">
			<h2>
				<img src="images/student_icon1.png" height="200px" width="400px"/>
			</h2>
			</div>
			<ul class="style1">
			   <form action="login_process.php" method="post" class="form">
				
				<label> UserName :</label>
				<input type="text" name="unm" class="control" />
				</br></br>
				
				<label> password :</label>
				<input type="password" name="pwd" class="control" />
				</br></br>
				
				<input type="submit" value="login" class="btn-submit"/>
				
				</form>
				
			</ul>
		</div>
		<?php
		include("include/footer.php");
	?>