<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		Part-11 (array_intersect_key)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$array_one = array(
				"a"=>"red",
				"b"=>"green",
				"c"=>"blue"
			);
			$array_two = array(
				"c"=>"yellow",
				"d"=>"black",
				"e"=>"brown"
			);
			$array_three = array(
				"f"=>"green",
				"c"=>"purple",
				"g"=>"red"
			);
		
		
			$result = array_intersect_key($array_one, $array_two, $array_three);
		
			
			print("<pre>");
			print_r($result);
			print("</pre>");
		?>
				
				
		<br /><a href="Part-12 (array_key_exists).php">Part-12 (array_key_exists)</a>
		</section>
<?php include_once 'footer.php';?>
