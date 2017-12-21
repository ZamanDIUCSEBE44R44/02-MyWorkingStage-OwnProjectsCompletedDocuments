<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		Part-09 (array_intersect)
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
				"e"=>"red",
				"f"=>"green",
				"g"=>"blue"
			);
			$array_three = array(
				"a"=>"red",
				"b"=>"green",
				"h"=>"blue"
			);
			$result = array_intersect($array_one, $array_two, $array_three);
		
			
			print("<pre>");
			print_r($result);
			print("</pre>");
		?>
				
				
		<br /><a href="Part-10 (array_intersect_assoc).php">Part-10 (array_intersect_assoc)</a>
		</section>
<?php include_once 'footer.php';?>
