<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		 Part-20 (array_replace)03
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$color_one = array("red","green");
			$color_two = array("blue","yellow");
			$color_three = array("orange","skyblue");
			$result = array_replace($color_one, $color_two, $color_three);
			
			print("<pre>");
			print_r($result);
			print("</pre>");			
		?>
				
				
		<br /><a href="Part-21 (array_reverse).php">Part-21 (array_reverse)</a>
		</section>
<?php include_once 'footer.php';?>
