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
					$url = "http://www.trainingwithliveproject.com/index.html?q=123";
					if(filter_var($url,FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED))
					{
						echo "This url is Valid.";
					}
					else{
						echo "It has not query String.";
					}
				?>
	
				
		<br /><a href="Part-41 (Error Reporting).php">Part-41 (Error Reporting)</a>
		</section>
<?php include_once 'footer.php';?>
