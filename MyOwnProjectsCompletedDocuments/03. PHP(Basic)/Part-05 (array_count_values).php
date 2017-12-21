<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		Part-05 (array_count_values)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$name = array("Akbor","Mamun","Delwoar","Akbor","Mamun","Delwoar","Akbor","Mamun","Delwoar");
			$age = array("28","29","30","28","29","30","28","29","30","28","29","30");
			
			print("<pre>");
			//print_r(array_count_values($name));
			print_r(array_count_values($age));
			print("</pre>");
		?>
				
				
		<br /><a href="Part-06 (array_diff).php">Part-06 (array_diff)</a>
		</section>
<?php include_once 'footer.php';?>
