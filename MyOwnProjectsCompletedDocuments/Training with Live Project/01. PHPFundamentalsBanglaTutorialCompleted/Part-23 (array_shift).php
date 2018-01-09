<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		 Part-23 (array_shift)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$color_one = array(
				"0"=>"red",
				"1"=>"green",
				"2"=>"blue",
				"3"=>"yellow");
				array_shift($color_one);
			
			
			print("<pre>");
			print_r($color_one);
			print("</pre>");
			
		?>
				
				
		<br /><a href="Part-24 (array_slice).php">Part-24 (array_slice)</a>
		</section>
<?php include_once 'footer.php';?>
