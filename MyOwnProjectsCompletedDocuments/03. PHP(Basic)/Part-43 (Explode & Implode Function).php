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
				$mystr = "We are Learning PHP.";
				//print_r(explode(" ", $mystr));
				$str = (explode(" ", $mystr));
				echo $str[0];
				?>
	
				
		<br /><a href="Part-43 (Explode & Implode Function)02.php">Part-43 (Explode & Implode Function)02</a>
		</section>
<?php include_once 'footer.php';?>
