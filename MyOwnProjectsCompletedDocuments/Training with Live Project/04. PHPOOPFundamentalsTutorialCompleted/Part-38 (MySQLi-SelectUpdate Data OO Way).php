<?php 
	include_once 'inc/header.php';
?>
	<hr>Part-38 (MySQLi-Select/Update Data OO Way)
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
	/*
	$sql = "select * from tbl_user";
	$result = $db->query($sql);
	while ($data = $result->fetch_object()) 
	{
		echo "<pre>";
		echo $data->name;
		echo "</pre>";

	}
	*/
	$sql = "Update tbl_user SET name='Syed Zaman Mostafiz' where id=2 ";
	$result = $db->query($sql);

?>
		<br /><a href="Part-39 (MySQLi-Basic Prepared Statements).php">Part-39 (MySQLi-Basic Prepared Statements)</a>
<?php
	include_once 'inc/footer.php';
?>