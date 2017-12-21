<?php include_once 'header.php'; ?>
	<hr>
		Get Selected Option Value in PHP (Part-07)
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
				echo "You are ".$coder." Coder";
			}
		?>
	<form action="" method="post" name="myform" id="myform" >
			<table>
				<tr>
					<td>Language: </td>
					<td>
						<select name="coder" id="">
							<option>Select One</option>
							<option value="JAVA">JAVA</option>
							<option value="PHP">PHP</option>
							<option value="C#">C#</option>
							<option value="C++">C++</option>
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
		<br /><a href="Part-08.php">Get Selected Option Value in JavaScript (Part-08)</a>
	
<?php include_once 'footer.php';?>
