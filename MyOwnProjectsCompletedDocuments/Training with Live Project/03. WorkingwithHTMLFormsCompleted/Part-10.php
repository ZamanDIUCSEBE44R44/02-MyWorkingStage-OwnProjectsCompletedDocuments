<?php include_once 'header.php'; ?>
	<hr>
		92/92 Get data from a data table in PHP (Part-10)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
	<hr />
		<?php
			if(isset($_POST['submit']))
			{
				$name = $_POST['name'];
				$gender = $_POST['gender'];
				$dep = $_POST['dep'];
				$coder = $_POST['coder'];
			
		?>
		
	
		<table class="tblone">
		<tr>
			<td colspan="2" align="center">Output</td>
		</tr>
		<tr>
			<td>Name</td>
			<td><?php echo $name?></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><?php echo $gender?></td>
		</tr>
		<tr>
			<td>Department</td>
			<td><?php echo $dep?></td>
		</tr>
		<tr>
			<td>Coder</td>
			<td><?php echo $coder?></td>
		</tr>
		</table>
		<?php } ?>

	<form action="" method="post" name="myform" id="myform">
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" required="" /></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
						<input type="radio" name="gender" value="Male" />Male
						<input type="radio" name="gender" value="Female" />Female
					</td>
				</tr>
				<tr>
					<td>Department</td>
					<td>
						<input type="checkbox" name="dep" value="CSE" />CSE
						<input type="checkbox" name="dep" value="Physics" />Physics
						<input type="checkbox" name="dep" value="Maths" />Maths
					</td>
				</tr>
				<tr>
					<td>Coder</td>
					<td>
						<select name="coder" id="">
							<option value="">Select One</option>
							<option value="JAVA">JAVA</option>
							<option value="PHP">PHP</option>
							<option value="C#">C#</option>
						</select>
					</td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Submit" />
						<input type="reset" value="Clear" />
					</td>
				</tr>
			</table>
		</form>
	<br /><a href="04. PHP OOP Fundamentals Tutorial/Part-01 (Class, Method and Object).php">Bangla Object Oriented PHP Part-01 (Class, Method and Object)</a>
<?php include_once 'footer.php';?>