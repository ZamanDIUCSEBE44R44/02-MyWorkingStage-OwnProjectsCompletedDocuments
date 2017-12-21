<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		 Part-15 (array_merge)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$arr_one = array(
				"a"=>"red",
				"b"=>"green"
			);
			$arr_two = array(
				"c"=>"blue",
				"b"=>"yellow"
			);
			$result = array_merge($arr_one, $arr_two);
			print("<pre>");
			print_r($result);
			print("</pre>");
			
			
		?>
				
				
		<br /><a href="Part-16 (array_multisort).php">Part-16 (array_multisort)</a>
		</section>
<?php include_once 'footer.php';?>
