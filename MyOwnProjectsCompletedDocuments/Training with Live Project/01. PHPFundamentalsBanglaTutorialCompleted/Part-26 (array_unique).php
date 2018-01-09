<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		 Part-26 (array_unique)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$color = array(
				"a"=>"red",
				"b"=>"green",
				"c"=>"yellow",
				"d"=>"purple",
				"e"=>"green",
				"f"=>"red",
				"g"=>"purple"
			);
			$result = array_unique($color);
			
			print("<pre>");
			print_r($result);
			print("</pre>");
			
			
		?>
				
				
		<br /><a href="Part-27 (array_unshift).php">Part-27 (array_unshift)</a>
		</section>
<?php include_once 'footer.php';?>
