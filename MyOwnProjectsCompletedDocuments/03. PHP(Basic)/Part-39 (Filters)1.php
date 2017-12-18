<?php 
	session_start();
	include_once 'header.php';
	//setcookie("Visited", "", time()-3600);
?>

		<section class="maincontent">
		<hr>
		Part-39 (Filters)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		
				<?php
					$str = "<h2>I am Learning PHP.</h2>";
					$newstr = filter_var($str, FILTER_SANITIZE_STRING);
					echo $newstr;
				?>
	
				
		<br /><a href="Part-39 (Filters)2.php">Part-39 (Filters)2</a>
		</section>
<?php include_once 'footer.php';?>
