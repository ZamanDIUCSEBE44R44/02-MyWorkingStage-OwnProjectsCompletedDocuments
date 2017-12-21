<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		 Part-30 (asort)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$name = "Delowar";
			$dep = "Physics";
			$coder = "JAVA";
			$result = compact("name", "dep", "coder");
			
			print("<pre>");
			print_r($result);
			print("</pre>");
			
		?>
				
				
		<br /><a href="Part-32 (current).php">Part-32 (current)</a>
		</section>
<?php include_once 'footer.php';?>
