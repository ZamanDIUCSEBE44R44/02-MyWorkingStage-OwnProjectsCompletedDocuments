<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		 Part-25 (array_sum)02
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$num = array(
				"a"=>"50",
				"b"=>"10",
				"c"=>"20"
			);
			$result = array_sum($num);
			echo "Total = ".$result;
			
			/*
			print("<pre>");
			print_r($result);
			print("</pre>");
			*/
			
		?>
				
				
		<br /><a href="Part-26 (array_unique).php">Part-26 (array_unique)</a>
		</section>
<?php include_once 'footer.php';?>
