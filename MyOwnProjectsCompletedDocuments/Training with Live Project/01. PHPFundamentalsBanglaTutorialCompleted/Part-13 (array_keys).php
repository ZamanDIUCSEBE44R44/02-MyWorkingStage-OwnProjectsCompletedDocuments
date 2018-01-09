<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		 Part-13 (array_keys)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$car = array(
				"Volvo"=>"xc90",
				"BMW"=>"x5",
				"Toyota"=>"highlander"
			);
			$result = array_keys($car, "xc90");
			
			
			print("<pre>");
			print_r($result);
			print("</pre>");
			
		?>
				
				
		<br /><a href="Part-14 (array_map).php">Part-14 (array_map)</a>
		</section>
<?php include_once 'footer.php';?>
