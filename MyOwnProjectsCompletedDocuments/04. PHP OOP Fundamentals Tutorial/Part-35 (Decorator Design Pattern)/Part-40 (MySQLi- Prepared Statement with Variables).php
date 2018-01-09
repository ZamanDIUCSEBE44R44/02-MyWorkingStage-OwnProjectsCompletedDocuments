<?php 
	include_once 'inc/header.php';
?>
	<hr>Part-40 (MySQLi- Prepared Statement with Variables)
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
	$sql  = "insert into tbl_user(name, username, email) values(?,?,?)";
	$stmt = $db->prepare($sql);
	$stmt->bind_param("sss", $name, $username, $email);
	$name = "Syed Zaman Mostafiz";
	$username = "SyedZaman";
	$email = "zaman@gmail.com";
	$stmt->execute();
	$stmt->close();
	$db->close();



?>
		<br /><a href="Part-41 (BLOB With Prepared Statements).php">Part-41 (BLOB With Prepared Statements)</a>
<?php
	include_once 'inc/footer.php';
?>