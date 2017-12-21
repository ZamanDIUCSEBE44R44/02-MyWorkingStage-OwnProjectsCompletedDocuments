<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		Part-06 (array_diff)
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
				"f"=>"black",
				"g"=>"purple"
			);
			$array_three = array(
				"a"=>"red",
				"b"=>"black",
				"c"=>"yellow"
			);
			$differ = array_diff($array_one, $array_two, $array_three);
			
			print("<pre>");
			print_r($differ);
			print("</pre>");
		?>
				
				
		<br /><a href="Part-07 (array_diff_assoc).php">Part-07 (array_diff_assoc)</a>
		</section>
<?php include_once 'footer.php';?>
