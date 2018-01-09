<?php 
	include_once 'inc/header.php';
?>
	<hr>Part-41 (BLOB With Prepared Statements)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />
<?php	
	$db = new mysqli("localhost", "root", "", "test");
	if (mysqli_connect_errno()) 
	{
		echo "Connection fails.......";
		exit();
	}
	
	$sql  = "select image from images where id=?";
	$stmt = $db->prepare($sql);
	$stmt->bind_param('i', $id);
	$id = 1;
	$stmt->execute();
	$stmt->bind_result($image);
	$stmt->fetch();
	header("content-type: png");
	echo '<img src="data/image/png; base64, '.base64_encode($image).'">';



	

	/*	
	$sql  = "insert into images(image) values(?)";
	$stmt = $db->prepare($sql);
	$stmt->bind_param("b", $image);
	$image = file_get_contents("me.png");
	$stmt->send_long_data(0, $image);
	$stmt->execute();
	*/

	




?>
		<br /><a href=" Part-42 (PDO - PHP Data Objects).php"> Part-42 (PDO - PHP Data Objects)</a>
<?php
	include_once 'inc/footer.php';
?>