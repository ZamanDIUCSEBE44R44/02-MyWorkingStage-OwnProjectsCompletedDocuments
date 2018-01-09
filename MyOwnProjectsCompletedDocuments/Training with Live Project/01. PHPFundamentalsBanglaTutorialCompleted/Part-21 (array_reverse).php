<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		 Part-21 (array_reverse)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$color_one = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
			$result = array_reverse($color_one);
			
			print("<pre>");
			print_r($color_one);
			print("</pre>");
			
			print("<pre>");
			print_r($result);
			print("</pre>");			
		?>
				
				
		<br /><a href="Part-22 (array_search).php">Part-22 (array_search)</a>
		</section>
<?php include_once 'footer.php';?>
