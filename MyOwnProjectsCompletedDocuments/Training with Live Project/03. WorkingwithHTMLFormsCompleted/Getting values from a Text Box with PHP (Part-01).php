<?php include_once 'header.php'; ?>
	<hr>
		Getting values from a Text Box with PHP (Part-01)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
	<hr />
		<?php
			if(isset($_POST['username']))
			{
				$name = $_POST['username'];
				echo "Username is : ".$name;
			}
		?>
		<form action="" method="post" name="myform" id="myform">
			<table>
				<tr>
					<td>Username: </td>
					<td><input type="text" name="username" required="1" /></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="Submit" />
						<input type="reset" value="Clear" />
					</td>
				</tr>
			</table>
		</form>		
		<br /><a href="Getting values from a Text Box with JavaScript (Part-02).php">Getting values from a Text Box with JavaScript (Part-02)</a>
	
<?php include_once 'footer.php';?>
