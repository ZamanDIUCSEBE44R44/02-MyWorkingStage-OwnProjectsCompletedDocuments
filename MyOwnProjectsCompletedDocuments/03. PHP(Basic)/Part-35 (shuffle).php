<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		Part-35 (shuffle)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$color = array("Red","Green","Purple","Blue","Yellow","Pink");
			
			print("<pre>");
			print_r($color);
			print("</pre>");
			
			shuffle($color);
			
			
			print("<pre>");
			print_r($color);
			print("</pre>");
		?>	
				
		<br /><a href="03. Working with HTML Forms/Getting values from a Text Box with PHP (Part-01).php">Getting values from a Text Box with PHP (Part-01)</a>
		</section>
<?php include_once 'footer.php';?>
