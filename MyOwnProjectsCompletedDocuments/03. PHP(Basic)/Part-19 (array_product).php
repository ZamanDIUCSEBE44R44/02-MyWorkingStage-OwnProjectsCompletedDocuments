<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		 Part-19 (array_product)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$arr = array(5,5,2,10);
			echo (array_product($arr));
			/*
			print("<pre>");
			print_r($arr);
			print("</pre>");
			*/
			
			
		?>
				
				
		<br /><a href="Part-20 (array_replace).php">Part-20 (array_replace)</a>
		</section>
<?php include_once 'footer.php';?>
