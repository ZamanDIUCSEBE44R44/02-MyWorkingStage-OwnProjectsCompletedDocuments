<?php 
	include_once 'inc/header.php';
?>
	<hr>Part-45 (Select Data With PDO-Prepared Statements)02
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

	$id = 14;
	$sql = "select * from tbl_user where id=? ";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array($id));
	while ($data = $stmt->fetch()) 
	{
		echo "Name : ".$data['name']."<br/>";
		echo "Skill : ".$data['skill']."<br/>";
	}



?>
	<br /><a href="Part-46 (Update, Delete Data With PDO-Prepared Statements).php">Part-46 (Update, Delete Data With PDO-Prepared Statements)</a>
<?php
	include_once 'inc/footer.php';
?>