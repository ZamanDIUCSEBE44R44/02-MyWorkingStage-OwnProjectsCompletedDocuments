<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		 Part-28 (array_values)
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
				"e"=>"blue",
				"f"=>"skyblue"
			);
			
			
			$result = array_values($color);
			
			print("<pre>");
			print_r($result);
			print("</pre>");
			
			
		?>
				
				
		<br /><a href="Part-29 (array_walk).php">Part-29 (array_walk)</a>
		</section>
<?php include_once 'footer.php';?>
