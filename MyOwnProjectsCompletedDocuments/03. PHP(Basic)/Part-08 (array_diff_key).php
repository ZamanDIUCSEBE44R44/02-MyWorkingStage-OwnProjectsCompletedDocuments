<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		Part-08 (array_diff_key)
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
				"c"=>"red",
				"d"=>"black",
				"e"=>"brown"
			);
			$array_three = array(
				"f"=>"green",
				"c"=>"purple",
				"g"=>"red"
			);
			$differ = array_diff_key($array_one, $array_two,$array_three);
			
			print("<pre>");
			print_r($differ);
			print("</pre>");
		?>
				
				
		<br /><a href="Part-09 (array_intersect).php">Part-09 (array_intersect)</a>
		</section>
<?php include_once 'footer.php';?>
