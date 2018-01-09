<?php include_once 'inc/header.php';?>
	<hr>Part-30 (Factory Design Pattern)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
		spl_autoload_register(function($class_name){
			include "classes/".$class_name.".php";
		});

		new Database();
		new Database();
		new Database();
		new Database();
		


		

	







	?>
	<br /><a href="Part-33 (Iterator Design Pattern).php">Part-33 (Iterator Design Pattern)</a>
<?php include_once 'inc/footer.php';?>