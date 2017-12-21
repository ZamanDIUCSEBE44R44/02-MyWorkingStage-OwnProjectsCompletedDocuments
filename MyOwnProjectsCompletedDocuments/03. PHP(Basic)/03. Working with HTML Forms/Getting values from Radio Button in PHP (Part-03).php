<?php include_once 'header.php'; ?>
	<hr>
		Getting values from Radio Button in PHP (Part-03)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
	<hr />
		<?php
			if(isset($_POST['gender']))
			{
				$gen = $_POST['gender'];
				if($gen == "Male")
				{
					echo "You are a Male";
				}elseif($gen == "Female")
				{
					echo "You are a Female";
				}else
				{
					echo "Others";
				}
			}
		?>

	<form action="" method="post" name="myform" id="myform">
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

		<br /><a href="Getting values from Radio Button in JavaScript (Part-04).php">Getting values from Radio Button in JavaScript (Part-04)</a>
	
<?php include_once 'footer.php';?>
