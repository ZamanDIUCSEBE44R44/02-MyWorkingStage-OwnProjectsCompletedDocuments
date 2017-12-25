<?php 
	include_once 'inc/header.php'; 
	include_once 'functions.php'; 
?>
	<hr>Part-02 (Work with Method and Object)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<form action="" method="post">
		<table>
			<tr>
				<td>Enter the first Number : </td>
				<td><input type="number" name="num1" /></td>
			</tr>
			<tr>
				<td>Enter the second Number</td>
				<td><input type="number" name="num2" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="calculation" value="Calculate" /></td>
			</tr>
		</table>
	</form>
	<?php
		if(isset($_POST['calculation']))
		{
			$numOne = $_POST['num1'];
			$numTwo = $_POST['num2'];
			if(empty($numOne) or empty($numTwo))
			{
				echo "<span style='color:green'>Field must not be empty.</span><br />";
			}else{
				echo "First number is = ".$numOne." Second number is = ".$numTwo."<br />";
			$cal = new Calculation;
			$cal->add($numOne,$numTwo);
			$cal->sub($numOne,$numTwo);
			$cal->mul($numOne,$numTwo);
			$cal->div($numOne,$numTwo);
			}
		}
	?>
	<br /><a href="Part-03 (Constructor).php">Part-03 (Constructor)</a>
<?php include_once 'inc/footer.php';?>