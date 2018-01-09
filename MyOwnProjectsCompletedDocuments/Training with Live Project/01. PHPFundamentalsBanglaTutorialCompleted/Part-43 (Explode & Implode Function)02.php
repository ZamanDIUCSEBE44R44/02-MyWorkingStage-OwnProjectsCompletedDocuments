<?php 
	session_start();
	include_once 'header.php';
	//setcookie("Visited", "", time()-3600);
?>

		<section class="maincontent">
		<hr>
		Part-43 (Explode & Implode Function)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		
				<?php
				$mystr = array("We", "are", "Learning", "PHP.");
				echo implode(" ", $mystr);
				
				?>
	
				
		<br /><a href="Part-44 (Case Change).php">Part-44 (Case Change)</a>
		</section>
<?php include_once 'footer.php';?>
