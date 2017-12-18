<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		Part-02 (array_change_key_case)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$name = array(
				"Zaman" => 28,
				"Kader" => 35,
				"Mamun" => 20,
				"Akbor" => 23
			);
			print("<pre>");
			//print_r(array_change_key_case($name, CASE_UPPER));
			print_r(array_change_key_case($name, CASE_LOWER));
			print("</pre>");
		?>
				
				
		<br /><a href="Part-03 (array_column).php">Part-03 (array_column)</a>
		</section>
<?php include_once 'footer.php';?>
