<?php include_once 'inc/header.php';?>
	<hr>Part-27 (PHP Object Serialization)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
	
		spl_autoload_register(function($class_name){
			include "classes/".$class_name.".php";
		});
	
		$pro = new Programming();
		$ser = serialize($pro);
		/*
		file_put_contents('programming.txt', $ser);
		echo $ser;
		*/
		$getcont = file_get_contents("programming.txt");
		$unser = unserialize($getcont);
		echo "<pre>";
		print_r($unser);
		echo "</pre>";




	?>
	<br /><a href="Part-28 (PHP Namespaces).php">Part-28 (PHP Namespaces)</a>
<?php include_once 'inc/footer.php';?>