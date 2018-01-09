<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		Part-04 (array_combine)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$name = array("Akbor","Mamun","Delwoar");
			//$department = array("Computer Science","Maths","Physics");
			$age = array("28","29","30");
			$combile = array_combine($name, $age);
			
			print("<pre>");
			print_r($combile);
			print("</pre>");
		?>
				
				
		<br /><a href="Part-05 (array_count_values).php">Part-05 (array_count_values)</a>
		</section>
<?php include_once 'footer.php';?>
