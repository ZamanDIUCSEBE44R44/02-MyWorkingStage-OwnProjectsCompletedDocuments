<?php 
	include_once 'inc/header.php';
?>
	<hr> Part-42 (PDO - PHP Data Objects)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />
<?php
	$dsn = "mysql:dbname=userdata; host=localhost";
	$user = "root";
	$pass = "";

	try {
		$pdo = new PDO($dsn, $user, $pass);		
	} catch (PDOException $e) {
		echo "Connection fails...".$e->getMessage();
	}

	$sql = "select * from tbl_user";
	$result = $pdo->query($sql);
	foreach ($result as $value) 
	{
		echo $value['skill']."<br/>";
	}
	




?>
		<br /><a href="Part-43 (Prepared Statements with PDO).php">Part-43 (Prepared Statements with PDO)</a>
<?php
	include_once 'inc/footer.php';
?>