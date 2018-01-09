<?php include_once 'header.php'; ?>
	<hr>
		Get Multiple Checkbox Values in PHP (Part-05)
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
				$coder = $_POST['coder'];
				echo "You have selected : ";
				foreach($coder as $lang=>$value)
				{
					echo $value.", ";
				}
			}
		?>
	<form action="" method="post" name="myform" id="myform">
			<table>
				<tr>
					<td>Language: </td>
					<td>
						<input type="checkbox" name="coder[]" value="PHP" />PHP
						<input type="checkbox" name="coder[]" value="JAVA" />JAVA
						<input type="checkbox" name="coder[]" value="C#" />C#
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

		<br /><a href="Part-06.php">Get Multiple Checkbox Values in JavaScript (Part-06)</a>
	
<?php include_once 'footer.php';?>
