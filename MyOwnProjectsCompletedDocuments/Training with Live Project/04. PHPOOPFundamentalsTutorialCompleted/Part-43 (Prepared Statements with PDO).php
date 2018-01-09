<?php 
	include_once 'inc/header.php';
?>
	<hr>Part-43 (Prepared Statements with PDO)
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
	$name = "Hamid Khan";
	$mail = "hamid@gmail.com";
	$skill = "PHP";
	$age = 30;



	$sql = "insert into tbl_user(name, email, skill, age) values(:name, :email, :skill, :age)";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':name', $name, PDO::PARAM_STR);
	$stmt->bindParam(':email', $mail, PDO::PARAM_STR);
	$stmt->bindParam(':skill', $skill, PDO::PARAM_STR);
	$stmt->bindParam(':age', $age, PDO::PARAM_INT);
	$stmt->execute();




?>
		<br /><a href="Part-43 (Prepared Statements with PDO)02.php">Part-43 (Prepared Statements with PDO)02</a>
<?php
	include_once 'inc/footer.php';
?>