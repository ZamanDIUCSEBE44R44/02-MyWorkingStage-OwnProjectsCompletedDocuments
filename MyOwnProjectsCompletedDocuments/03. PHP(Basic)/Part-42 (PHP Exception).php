<?php 
	session_start();
	include_once 'header.php';
	//setcookie("Visited", "", time()-3600);
?>

		<section class="maincontent">
		<hr>
		Part-42 (PHP Exception)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		
				<?php
					function numCheck($num)
					{
						if($num>1)
						{
							throw new Exception("Value must be 1 or bellow.");
						}
						return true;
					}
					try
					{
						numCheck(2);
						echo "If you see this, the number is 1 or bellow.";
					}
					catch(Exception $e) 
					{
						echo "Message: ".$e->getMessage();
					}
				?>
	
				
		<br /><a href="Part-42 (PHP Exception)02.php">Part-42 (PHP Exception)02</a>
		</section>
<?php include_once 'footer.php';?>
