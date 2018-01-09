<?php include_once 'inc/header.php';?>
	<hr>Part-21 (__CLASS__ and get_class)
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
			public function cms()
			{
				echo "Child Class Constant and class name-> ".__CLASS__." <br />";
				echo "Child Class Function and class name-> ".get_class($this)."<br/>";
			}
			public function ourMethod()
			{
				parent::framework();
			}
		}
		$php = new phpChild();
		$php->framework();
		echo "<hr/>";
		$php->cms();
		echo "<hr/>";
		$php->ourMethod();
	
		
	?>
	<br /><a href="../Part-22 (Late Static Binding in PHP)/Part-22 (Late Static Binding in PHP).php">Part-22 (Late Static Binding in PHP)</a>
<?php include_once 'inc/footer.php';?>