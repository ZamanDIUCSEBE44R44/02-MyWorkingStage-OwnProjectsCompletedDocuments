<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		Part-32 (current)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$name = array("Jamal", "Mamun", "Delowar", "Akbor");
			
			print("<pre>");
			print_r($name);
			print("</pre>");

			echo "Current Value: ".current($name)."<br />";
			echo "Next Value: ".next($name)."<br />";
			echo "Current Value: ".current($name)."<br />";
			echo "Previous Value: ".prev($name)."<br />";
			echo "Last Value: ".end($name)."<br />";
			
			
		?>
				
				
		<br /><a href="Part-33 (in_array).php">Part-33 (in_array)</a>
		</section>
<?php include_once 'footer.php';?>
