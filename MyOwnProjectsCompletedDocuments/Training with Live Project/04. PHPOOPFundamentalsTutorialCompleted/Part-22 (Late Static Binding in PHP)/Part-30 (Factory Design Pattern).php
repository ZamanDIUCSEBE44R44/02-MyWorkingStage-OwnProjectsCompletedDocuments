<?php include_once 'inc/header.php';?>
	<hr>Part-30 (Factory Design Pattern)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
		spl_autoload_register(function($class_name){
			include "classes/".$class_name.".php";
		});

		$db = new Database();
		$db->setDriver("mysql");
		$db->connect("host","user","db","pass");

		

	







	?>
	<br /><a href="Part-31 (Abstract Factory Design Pattern).php">Part-31 (Abstract Factory Design Pattern)</a>
<?php include_once 'inc/footer.php';?>