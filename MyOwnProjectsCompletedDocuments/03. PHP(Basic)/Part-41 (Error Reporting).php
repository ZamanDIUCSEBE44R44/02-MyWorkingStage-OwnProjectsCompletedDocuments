<?php 
	session_start();
	include_once 'header.php';
	//setcookie("Visited", "", time()-3600);
?>

		<section class="maincontent">
		<hr>
		Part-41 (Error Reporting)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		
				<?php
					//phpinfo();
					error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
					$price = 45;
					if($pric==45)
					{
						print "The price is $price";
					}
					else
					{
						print "The price is not 45";
					}
					
				?>
	
				
		<br /><a href="Part-42 (PHP Exception).php">Part-42 (PHP Exception)</a>
		</section>
<?php include_once 'footer.php';?>
