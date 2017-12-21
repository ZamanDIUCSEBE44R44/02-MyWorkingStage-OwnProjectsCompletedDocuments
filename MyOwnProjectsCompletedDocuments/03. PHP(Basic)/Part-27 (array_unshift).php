<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		 Part-27 (array_unshift)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$color = array(
				"0"=>"red",
				"1"=>"green",
				"2"=>"yellow",
			);
			
			print("<pre>");
			print_r($color);
			print("</pre>");
			
			array_unshift($color, "blue");
			
			print("<pre>");
			print_r($color);
			print("</pre>");
			
			
		?>
				
				
		<br /><a href="Part-28 (array_values).php">Part-28 (array_values)</a>
		</section>
<?php include_once 'footer.php';?>
