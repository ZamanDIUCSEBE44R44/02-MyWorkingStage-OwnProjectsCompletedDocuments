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
					$int = 50;
					if(filter_var($int, FILTER_VALIDATE_INT))
					{
						echo "It is integer value.";
					}
					else
					{
						echo "It is NOT integer value.";
					}
				?>
	
				
		<br /><a href="Part-39 (Filters)3.php">Part-39 (Filters)3</a>
		</section>
<?php include_once 'footer.php';?>
