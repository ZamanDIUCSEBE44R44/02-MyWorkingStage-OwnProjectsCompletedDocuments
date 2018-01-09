<?php 
	session_start();
	include_once 'header.php';
	//setcookie("Visited", "", time()-3600);
?>

		<section class="maincontent">
		<hr>
		Part-40 (Filters Advanced)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		
				<?php
					$intnum = 300;
					$min = 1;
					$max = 200;
					if(filter_var($intnum, FILTER_VALIDATE_INT, array("options"=>array("min_range"=>$min,"max_range"=>$max)))===false)
					{
						echo "it is Not Valid Range.";
					}
					else
					{
						echo "It is Valid Range.";
					}
				?>
	
				
		<br /><a href="Part-40 (Filters Advanced)01.php">Part-40 (Filters Advanced)01</a>
		</section>
<?php include_once 'footer.php';?>
