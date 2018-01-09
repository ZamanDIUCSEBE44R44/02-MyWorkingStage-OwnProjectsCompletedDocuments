<?php 
	include_once 'inc/header.php';
?>
	<hr>Part-37 (MySQL-Connect OO Way)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />
<?php	
	$db = new mysqli("localhost", "root", "", "db_lr");
	if (mysqli_connect_errno()) 
	{
		echo "Connection fails.......";
		exit();
	} else 
	{
		echo "Connection Successfull";
	}
?>
		<br /><a href="Part-38 (MySQLi-SelectUpdate Data OO Way).php">Part-38 (MySQLi-Select/Update Data OO Way)</a>
<?php
	include_once 'inc/footer.php';
?>