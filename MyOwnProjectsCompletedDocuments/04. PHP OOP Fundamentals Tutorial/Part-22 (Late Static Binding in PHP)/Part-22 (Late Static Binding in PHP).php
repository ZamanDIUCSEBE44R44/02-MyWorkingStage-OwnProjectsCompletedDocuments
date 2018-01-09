<?php include_once 'inc/header.php';?>
	<hr>Part-22 (Late Static Binding in PHP).php
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php

		spl_autoload_register(function($class_name){
			include "classes/".$class_name.".php";
		});

		/**
		* 
		*/
		class phpChild extends Php
		{
			
			public function getClass()
			{
				return __CLASS__;
			}
		}
		$php = new Php;
		$php->framework();

		$childPhp = new phpChild();
		$childPhp->framework();
		
	?>
	<br /><a href="Part-23 (Object Cloning in PHP).php">Part-23 (Object Cloning in PHP)</a>
<?php include_once 'inc/footer.php';?>