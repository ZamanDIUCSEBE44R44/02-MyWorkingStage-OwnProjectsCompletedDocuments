<?php include_once 'inc/header.php';?>
	<hr>Part-25 (PHP ArrayObject)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
	/*
		spl_autoload_register(function($class_name){
			include "classes/".$class_name.".php";
		});
	*/


		$arr = array("HTML","CSS","PHP","JavaScript");
		$coding = new ArrayObject($arr);
		$coding->append("JAVA");
		$iterator = $coding->getIterator();
		while ($iterator->valid()) {
			echo $iterator->current()."<br/>";
			$iterator->next();
		}





	
	
		
	?>
	<br /><a href="Part-26 (Standard PHP Library - SPL).php">Part-26 (Standard PHP Library - SPL)</a>
<?php include_once 'inc/footer.php';?>