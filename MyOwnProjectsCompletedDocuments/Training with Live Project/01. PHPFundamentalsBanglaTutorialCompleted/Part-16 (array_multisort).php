<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		 Part-16 (array_multisort)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$arr_one = array("Dog", "Cat");
			$arr_two = array("Lion", "Tiger");
			
			array_multisort($arr_one,SORT_ASC, $arr_two, SORT_DESC);
			
			print("<pre>");
			print_r($arr_one);
			print("</pre>");
			
			print("<pre>");
			print_r($arr_two);
			print("</pre>");
			
			
		?>
				
				
		<br /><a href="Part-17 (array_pad).php">Part-17 (array_pad)</a>
		</section>
<?php include_once 'footer.php';?>
