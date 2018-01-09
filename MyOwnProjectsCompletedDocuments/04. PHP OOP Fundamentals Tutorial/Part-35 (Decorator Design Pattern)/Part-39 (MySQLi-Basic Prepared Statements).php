<?php 
	include_once 'inc/header.php';
?>
	<hr>Part-39 (MySQLi-Basic Prepared Statements)
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
		echo "Connection Successfull<br/>";
	}
	$sql  = "select name, username from tbl_user order by id";
	$stmt = $db->prepare($sql);
	$stmt->execute();
	$stmt->bind_result($name, $username);
	while ($stmt->fetch()) 
	{
		echo "$username<br/>";
	}


?>
		<br /><a href="Part-40 (MySQLi- Prepared Statement with Variables).php">Part-40 (MySQLi- Prepared Statement with Variables)</a>
<?php
	include_once 'inc/footer.php';
?>