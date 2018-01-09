<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		Part-10 (array_intersect_assoc)
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
				"c"=>"blue",
				"d"=>"yellow"
			);
			$array_two = array(
				"a"=>"red",
				"b"=>"green",
				"c"=>"blue",
				"d"=>"yellow"
			);
			$array_three = array(
				"a"=>"red",
				"b"=>"green",
				"g"=>"blue",
				"d"=>"yellow"
			);
		
			$result = array_intersect_assoc($array_one, $array_two, $array_three);
		
			
			print("<pre>");
			print_r($result);
			print("</pre>");
		?>
				
				
		<br /><a href="Part-11 (array_intersect_key).php">Part-11 (array_intersect_key)</a>
		</section>
<?php include_once 'footer.php';?>
