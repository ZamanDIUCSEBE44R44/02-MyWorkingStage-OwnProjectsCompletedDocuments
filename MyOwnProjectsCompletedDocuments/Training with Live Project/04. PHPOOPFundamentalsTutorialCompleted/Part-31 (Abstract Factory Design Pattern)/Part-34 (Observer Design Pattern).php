<?php include_once 'inc/header.php';?>
	<hr>Part-34 (Observer Design Pattern)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
		spl_autoload_register(function($class_name){
			include "classes/".$class_name.".php";
		});
		$obj = new Observable();
		$sk = new Skype();
		$gt = new Gtalk();
		$s = new stdClass();
		$obj->register($sk);
		$obj->register($gt);
		$obj->register($s);
		$obj->stateChange();


	?>
	<br /><a href="Part-35 (Decorator Design Pattern).php">Part-35 (Decorator Design Pattern)</a>
<?php include_once 'inc/footer.php';?>