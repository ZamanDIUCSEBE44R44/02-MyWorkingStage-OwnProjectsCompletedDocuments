<?php include_once 'inc/header.php';?>
	<hr>Part-26 (Standard PHP Library - SPL)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
	/*
		spl_autoload_register(function($class_name){
			include "classes/".$class_name.".php";
		});
	*/


		$arr = array("HTML","CSS","PHP","JavaScript", "JAVA");
		$ai = new ArrayIterator($arr);
		$ci = new CachingIterator($ai);

		/*
		$limit = new LimitIterator($ai, 0, 2);
		*/
		foreach ($ci as $value) {
			echo $value;
			if ($ci->hasNext()) {
				echo ", ";
			}
			else
			{
				echo ".";
			}
		}
		/*
		echo $ai->current()."<br/>";
		$ai->next();
		echo $ai->current()."<br/>";
		*/
	?>
	<br /><a href="Part-27 (PHP Object Serialization).php">Part-27 (PHP Object Serialization)</a>
<?php include_once 'inc/footer.php';?>