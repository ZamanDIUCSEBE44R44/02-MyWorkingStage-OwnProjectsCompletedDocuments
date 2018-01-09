<?php include_once 'inc/header.php';?>
	<hr>Part-18 (Type Hinting in PHP)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
		spl_autoload_register(function($class_name){
			include "classes/".$class_name.".php";
		});
		
		$cal = new Calculation();
		$nums = array(
			array('Number One',10, 10),
			array('Number Two',20, 20)
		);
		$cal->getValue($nums);
		/**/
		
		new Java(new Php);
		
		
	?>
	<br /><a href="Part-19 (PHP Object Iteration).php">Part-19 (PHP Object Iteration)</a>
<?php include_once 'inc/footer.php';?>