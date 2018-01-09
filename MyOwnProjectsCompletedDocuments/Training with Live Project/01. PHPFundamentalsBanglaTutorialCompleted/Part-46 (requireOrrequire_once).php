<?php 
	session_start();
	include_once 'header.php';
	//setcookie("Visited", "", time()-3600);
?>

		<section class="maincontent">
		<hr>
		Part-46 (require/require_once)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		
				<?php
					require "new.php";
					require_once "new.php";
				?>
				
				
		<br /><a href="Part-01 (Create an array).php">Part-01 (Create an array)</a>
		</section>
<?php include_once 'footer.php';?>
