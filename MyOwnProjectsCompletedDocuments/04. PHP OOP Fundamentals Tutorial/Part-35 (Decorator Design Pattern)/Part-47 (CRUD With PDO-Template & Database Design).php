<?php 
	include_once 'inc/header.php';
?>
	<hr>Part-47 (CRUD With PDO-Template & Database Design)
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

	$id = 13;
	
	$sql = "delete from tbl_user where id=?";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam('1', $id);

	$stmt->execute();
	



?>
	<br /><a href="Part-47 (CRUD With PDO-Template & Database Design).php">Part-47 (CRUD With PDO-Template & Database Design)</a>
<?php
	include_once 'inc/footer.php';
?>