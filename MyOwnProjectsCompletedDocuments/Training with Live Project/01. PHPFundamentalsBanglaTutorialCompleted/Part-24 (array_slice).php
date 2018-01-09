<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		 Part-24 (array_slice)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$color_one = array("red","green","blue","yellow", "skyblue");
			$result = array_slice($color_one,-3,3);
			
			
			print("<pre>");
			print_r($result);
			print("</pre>");
			
		?>
				
				
		<br /><a href="Part-25 (array_sum).php">Part-25 (array_sum)</a>
		</section>
<?php include_once 'footer.php';?>
