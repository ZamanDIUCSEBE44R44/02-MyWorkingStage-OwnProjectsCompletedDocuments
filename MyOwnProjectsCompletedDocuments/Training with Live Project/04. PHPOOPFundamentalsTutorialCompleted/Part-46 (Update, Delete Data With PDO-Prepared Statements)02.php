<?php 
	include_once 'inc/header.php';
?>
	<hr>Part-46 (Update, Delete Data With PDO-Prepared Statements)02
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

	$id = 1;
	$skill = "PHP";
	$sql = "update tbl_user set skill=:skill where id=:id";
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(':skill', $skill);
	$stmt->bindValue(':id', $id);

	$stmt->execute();
	



?>
	<br /><a href="Part-46 (Update, Delete Data With PDO-Prepared Statements)Delete.php">Part-46 (Update, Delete Data With PDO-Prepared Statements)Delete</a>
<?php
	include_once 'inc/footer.php';
?>