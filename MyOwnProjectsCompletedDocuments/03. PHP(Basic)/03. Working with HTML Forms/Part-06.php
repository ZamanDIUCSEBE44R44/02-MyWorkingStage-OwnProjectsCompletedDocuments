<?php include_once 'header.php'; ?>
	<hr>
		Get Multiple Checkbox Values in JavaScript (Part-06)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
	<hr />
	<script>
		function multiCheck()
		{
			var length =document.myform.coder.length;
			var $result = "";
			for(i=0; i<length; i++)
			{
				var checkedVal = document.myform.coder[i].checked;
				if(checkedVal)
				{
					$result += document.myform.coder[i].value + ", ";				
				}			
			}
			var showData = "You selected : "+$result;
			document.getElementById('state').innerHTML = showData;
		}
	</script>
	<div id="state"></div>
	<form action="" method="post" name="myform" id="myform" onsubmit="multiCheck(); return false;">
			<table>
				<tr>
					<td>Language: </td>
					<td>
						<input type="checkbox" name="coder" value="PHP" />PHP
						<input type="checkbox" name="coder" value="JAVA" />JAVA
						<input type="checkbox" name="coder" value="C#" />C#
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

		<br /><a href="Part-07.php">Get Selected Option Value in PHP (Part-07)</a>
	
<?php include_once 'footer.php';?>
