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
					$ip = "127.0.0.1";
					if(filter_var($ip, FILTER_VALIDATE_IP))
					{
						echo "$ip is Valid IP Address.";
					}
					else
					{
						echo "$ip is NOT Valid IP Address.";
					}
				?>
	
				
		<br /><a href="Part-39 (Filters)4.php">Part-39 (Filters)4</a>
		</section>
<?php include_once 'footer.php';?>
