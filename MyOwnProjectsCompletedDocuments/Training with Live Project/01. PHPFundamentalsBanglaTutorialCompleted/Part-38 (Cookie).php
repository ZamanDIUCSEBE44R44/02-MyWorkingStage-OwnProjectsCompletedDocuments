<?php 
	session_start();
	include_once 'header.php';
	//setcookie("Visited", "", time()-3600);
?>

		<section class="maincontent">
		<hr>
		Part-38 (Cookie)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
		
		if(!isset($_COOKIE['Visited']))
		{
			setcookie("Visited", "1", time()+86400, "/") or die("Could not set cookie!!");
			echo "This is your first visited in this website.";
		}
		else
		{
			echo "You are our old visitor.";
		}
		
		/**/echo "Cookies Deleted.";
		
		?>
		
		<br /><a href="Part-39 (Filters).php">Part-39 (Filters)</a>
		</section>
<?php include_once 'footer.php';?>
