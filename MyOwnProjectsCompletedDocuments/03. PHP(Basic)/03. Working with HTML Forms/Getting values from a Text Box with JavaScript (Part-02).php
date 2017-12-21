<?php include_once 'header.php'; ?>
	<hr>
		Getting values from a Text Box with JavaScript (Part-02)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
	<hr />
	<script type="text/javascript">
		function formFunction()
		{
			var name = document.myform.username.value;
			var showData = "Username is : "+name;
			document.getElementById('output').innerHTML = showData;
		}
	</script>

	<form action="" method="post" name="myform" id="myform" onsubmit="formFunction(); return false" >
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
		<div id="output"></div>

		<br /><a href="Getting values from Radio Button in PHP (Part-03).php">Getting values from Radio Button in PHP (Part-03)</a>
	
<?php include_once 'footer.php';?>
