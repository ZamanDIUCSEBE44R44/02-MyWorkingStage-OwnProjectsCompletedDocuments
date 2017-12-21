<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		 Part-17 (array_pad)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$arr = array("red", "green");
			//$result = array_pad($arr,5,"blue");
			//$result = array_pad($arr,10,"blue");
			$result = array_pad($arr,-5,"blue");
			print("<pre>");
			print_r($result);
			print("</pre>");
			
			
		?>
				
				
		<br /><a href="Part-18 (array_pop & array_push).php">Part-18 (array_pop & array_push)</a>
		</section>
<?php include_once 'footer.php';?>
