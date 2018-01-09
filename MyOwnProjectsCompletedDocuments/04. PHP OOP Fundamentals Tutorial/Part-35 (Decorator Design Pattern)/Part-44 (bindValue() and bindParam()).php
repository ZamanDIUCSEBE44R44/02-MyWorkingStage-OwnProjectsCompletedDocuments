<?php 
	include_once 'inc/header.php';
?>
	<hr>Part-44 (bindValue() and bindParam())
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
	$name = "Inav Habib Pro";
	$mail = "ivan@gmail.com";
	$skill = "Blogger";
	$age = 30;

	
	$sql = "insert into tbl_user(name, email, skill, age) values(:name, :email, :skill, :age)";
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(':name', $name);
	$stmt->bindValue(':email', $mail);
	$stmt->bindValue(':skill', $skill);
	$stmt->bindValue(':age', 30);
	$stmt->execute();
	



?>
		<br /><a href="Part-45 (Select Data With PDO-Prepared Statements).php">Part-45 (Select Data With PDO-Prepared Statements)</a>
<?php
	include_once 'inc/footer.php';
?>