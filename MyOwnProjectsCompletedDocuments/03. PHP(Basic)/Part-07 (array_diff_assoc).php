<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		Part-07 (array_diff_assoc)
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
				"c"=>"blue"
			);
			$array_three = array(
				"h"=>"red",
				"b"=>"green",
				"g"=>"blue"
			);
			$differ = array_diff_assoc($array_one, $array_two, $array_three);
			
			print("<pre>");
			print_r($differ);
			print("</pre>");
		?>
				
				
		<br /><a href="Part-08 (array_diff_key).php">Part-08 (array_diff_key)</a>
		</section>
<?php include_once 'footer.php';?>
