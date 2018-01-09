<?php include_once 'inc/header.php';?>
	<hr>Part-36 (Facade Design Pattern)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
		spl_autoload_register(function($class_name){
			include "classes/".$class_name.".php";
		});
	$fa = new Facade();
	$fa->findApartments("Jatrabari, Dhaka","mapdiv");



	?>
	<br /><a href="Part-37 (MySQL-Connect OO Way).php">Part-37 (MySQL-Connect OO Way)</a>
<?php include_once 'inc/footer.php';?>