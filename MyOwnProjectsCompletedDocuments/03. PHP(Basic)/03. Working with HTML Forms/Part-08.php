<?php include_once 'header.php'; ?>
	<hr>
		Get Selected Option Value in JavaScript (Part-08)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
	<hr />
	<script type="text/javascript">
		function selectOption()
		{
			var index = document.myform.coder.selectedIndex;
			var value = document.myform.coder.options[index].value;
			var showData = "You are "+value+" coder";
			document.getElementById('show').innerHTML = showData;		
		}
	</script>
	<div id="show"></div>
	<form action="" method="post" name="myform" id="myform" onsubmit="selectOption(); return false;" >
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
		<br /><a href="Part-09.php">Get data from a data table in JavaScript (Part-09)</a>
	
<?php include_once 'footer.php';?>
