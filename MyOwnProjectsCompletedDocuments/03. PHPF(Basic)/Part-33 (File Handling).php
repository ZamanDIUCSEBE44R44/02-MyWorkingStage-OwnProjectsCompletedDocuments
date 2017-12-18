<?php include_once 'header.php';?>
		<section class="maincontent">
		<hr>
		PHP File Handling
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			echo readfile("text.txt");
		?>	
		
		<br /><a href="Part-34 (File OpenReadClose).php">Part-34 (File Open/Read/Close)</a>
		</section>
<?php include_once 'footer.php';?>
