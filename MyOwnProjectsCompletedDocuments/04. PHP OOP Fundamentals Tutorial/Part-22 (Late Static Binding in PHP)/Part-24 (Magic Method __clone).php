<?php include_once 'inc/header.php';?>
	<hr>Part-24 (Magic Method __clone)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php

		spl_autoload_register(function($class_name){
			include "classes/".$class_name.".php";
		});
		$java = new Language();
		$java->setCat("OOP");
		$java->setFram("Spring");
		//echo $java->getCat();

		$php = clone $java;
		//$java->setCat("Structural");
		$php->setFram("CodeIgniter");
		
		echo $java->getCat()."<br/>";
		echo $java->getFram()."<br/>";

		echo $php->getCat()."<br/>";
		echo $php->getFram();



	
	
		
	?>
	<br /><a href="Part-25 (PHP ArrayObject).php">Part-25 (PHP ArrayObject)</a>
<?php include_once 'inc/footer.php';?>