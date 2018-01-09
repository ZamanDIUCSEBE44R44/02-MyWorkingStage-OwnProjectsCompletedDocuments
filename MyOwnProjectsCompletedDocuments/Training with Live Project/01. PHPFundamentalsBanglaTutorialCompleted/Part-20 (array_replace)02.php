<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		 Part-20 (array_replace)02
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$color_one = array("a"=>"red","b"=>"green");
			$color_two = array("a"=>"blue","yellow");
			$result = array_replace($color_one, $color_two);
			
			print("<pre>");
			print_r($result);
			print("</pre>");			
		?>
				
				
		<br /><a href="Part-20 (array_replace)03.php">Part-20 (array_replace)03</a>
		</section>
<?php include_once 'footer.php';?>
