<?php
	include("include/header.php");
?>
<div id="featured">
			<div class="title">
				<h2>
				<img src="images/studentinfo.gif" height="230px" width="400px"/>
					</h2>
			</div>
			<ul class="style1">
			<form action ="studentdetail_process.php" method ="post" class="form">
				
				<label>full name: </label>
				<input type="text" name="fnm" class="control"/>
				<br /><br />
			
				<label> username: </label>
				<input type="text" name="unm" class="control"/>
				<br /><br />
				
				<label>gender: </label>
				<div>
				   <input type="radio" name="gender" class="control" value="male"/> Male</br>
					<input type="radio" name="gender" class="control" value="female"/>Female
				</div>
				<br />
				
				<label>mobile no: </label>
				<input type="text" name="mno" class="control"/>
				<br /><br />
				
				<label>password: </label>
				<input type="password" name="pwd" class="control"/>
				<br /><br />
				
				<label>confirm password: </label>
				<input type="password" name="cpwd" class="control"/>
				<br /><br />
				
				<label>email: </label>
				<input type="text" name="email" class="control"/>
				<br /><br />
				
				<label>cource:</label>
		
				<select name="cource" class="controls">
					<option value="bscit">bscit</option>
					<option value="MCA">MCA</option>
					<option value="MSCIT">MSCIT</option>
					<option value="BCA">BCA</option>
					</select>
				<br/> <br/>
				
						<input type="submit" class="btn-submit" value="sign up" />
				
		</form>	
				
			</ul>
		</div>
		<?php
		include("include/footer.php");
	?>
	
	
	