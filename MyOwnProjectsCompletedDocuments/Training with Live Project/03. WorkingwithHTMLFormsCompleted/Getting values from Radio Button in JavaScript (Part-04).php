<?php include_once 'header.php'; ?>
	<hr>
		Getting values from Radio Button in JavaScript (Part-04)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
	<hr />
	<script type="text/javascript">
		function clickHere()
		{
			var genderleng = document.myform.gender.length;
			for(i=0; i<genderleng; i++)
			{
				var checkValue = document.myform.gender[i].checked;
				if(checkValue)
				{
					var checkResult = document.myform.gender.value;
				}
			}
			var showData = "Gender : "+checkResult;
			document.getElementById('show').innerHTML = showData;
		}
	</script>
	<p id="show"></p>

	<form action="" method="post" name="myform" id="myform" onsubmit="clickHere(); return false">
			<table>
				<tr>
					<td>Gender: </td>
					<td>
						<input type="radio" name="gender" value="Male" />Male
						<input type="radio" name="gender" value="Female" />Female
						<input type="radio" name="gender" value="Others" />Others
					</td>
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

		<br /><a href="Part-05.php">Get Multiple Checkbox Values in PHP (Part-05)</a>
	
<?php include_once 'footer.php';?>
