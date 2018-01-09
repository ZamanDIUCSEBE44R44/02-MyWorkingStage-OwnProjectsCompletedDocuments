<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		 Part-18 (array_pop & array_push)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$arr = array("red", "green", "blue");
			//array_pop($arr);
			array_push($arr, "Yellow", "skyblue");
			print("<pre>");
			print_r($arr);
			print("</pre>");
			
			
		?>
				
				
		<br /><a href="Part-18 (array_pop & array_push)02.php">Part-18 (array_pop & array_push)02</a>
		</section>
<?php include_once 'footer.php';?>
