<?php 
	session_start();
	include_once 'header.php';
?>

		<section class="maincontent">
		<hr>
		Part-37 (Sessions)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
		$_SESSION['user'] = "Syed Zaman Mostafiz.";
		$_SESSION['password'] = "123";
		
		echo "User Name is ".$_SESSION['user']."<br />";
		echo "Password is ".$_SESSION['password']."<br />";
		session_destroy();
		
		
		
		?>
		
		<br /><a href="Part-38 (Cookie).php">Part-38 (Cookie)</a>
		</section>
<?php include_once 'footer.php';?>
