<?php include_once 'inc/header.php';?>
	<hr>Part-17 (PHP Method Chaining)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
		spl_autoload_register(function($class_name){
			include "classes/".$class_name.".php";
		});
		$cal = new Calculation();
		echo "Result is = ".$cal->getValue(3,5)->getResult();
		
		
	?>
	<br /><a href="Part-18 (Type Hinting in PHP)/Part-18 (Type Hinting in PHP).php">Part-18 (Type Hinting in PHP)</a>
<?php include_once 'inc/footer.php';?>