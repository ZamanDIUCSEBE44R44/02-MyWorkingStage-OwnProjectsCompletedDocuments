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
					$mail = "zamancsediue44@gmail.com";
					if(filter_var($mail, FILTER_VALIDATE_EMAIL))
					{
						echo "$mail is Valid Email Address.";
					}
					else
					{
						echo "$mail is NOT Valid Email Address.";
					}
					
					echo "<br />";
					
					$url = "http://www.trainingwithliveproject.com";
					if(filter_var($url, FILTER_VALIDATE_URL))
					{
						echo "$url is Valid Website Address.";
					}
					else
					{
						echo "$mail is NOT Valid Website Address.";
					}
				?>
	
				
		<br /><a href="Part-40 (Filters Advanced).php">Part-40 (Filters Advanced)</a>
		</section>
<?php include_once 'footer.php';?>
