<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		Part-33 (in_array)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$coder = array("Delowar", "Mamun", "Akbor", "kader");
			if(isset($_POST['username']))
			{
				$txt = $_POST['username'];
				if(in_array($txt, $coder))
				{
					echo "$txt Exist.";
				}
				else
				{
					echo "$txt not Exist.";
				}
			}
		?>
		<form action="Part-33 (in_array).php" method="post">
			<input type="text" name="username" />
			<input type="submit" value="Submit" />
		</form>
				
				
		<br /><a href="Part-34 (key,krsort,ksort).php">Part-34 (key,krsort,ksort)</a>
		</section>
<?php include_once 'footer.php';?>
