<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		Part-34 (key,krsort,ksort)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$coder = array("Delowar", "Mamun", "Akbor", "kader");
			next($coder);
			echo "The current position key is ".key($coder);
			
		?>	
				
		<br /><a href="Part-34 (key,krsort,ksort)02.php">Part-34 (key,krsort,ksort)02</a>
		</section>
<?php include_once 'footer.php';?>
