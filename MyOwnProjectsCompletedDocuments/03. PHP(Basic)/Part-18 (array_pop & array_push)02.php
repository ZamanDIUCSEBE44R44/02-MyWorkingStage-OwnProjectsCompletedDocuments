<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		 Part-18 (array_pop & array_push)02
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$arr = array("a"=>"red", "b"=>"green");
			array_push($arr, "Yellow", "skyblue");
			print("<pre>");
			print_r($arr);
			print("</pre>");
			
			
		?>
				
				
		<br /><a href="Part-19 (array_product).php">Part-19 (array_product)</a>
		</section>
<?php include_once 'footer.php';?>
