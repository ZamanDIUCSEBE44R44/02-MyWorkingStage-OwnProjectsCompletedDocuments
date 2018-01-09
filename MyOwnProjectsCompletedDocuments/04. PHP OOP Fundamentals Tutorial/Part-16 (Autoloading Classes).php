<?php include_once 'inc/header.php';?>
	<hr>Part-16 (Autoloading Classes)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
		spl_autoload_register(function($class_name){
			include "classes/".$class_name.".php";
		});
		/*
		function __autoload($class_name)
		{
			echo "$class_name<br/>";
			
		}
		*/
		
		$ruby = new Ruby;
		$java = new Java;
		$php = new Php;
	?>
	<br /><a href="Part-17 (PHP Method Chaining).php">Part-17 (PHP Method Chaining)</a>
<?php include_once 'inc/footer.php';?>