<?php include_once 'inc/header.php';?>
	<hr>Part-19 (PHP Object Iteration)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
		spl_autoload_register(function($class_name){
			include "classes/".$class_name.".php";
		});
	$Person = new Person;
	foreach ($Person as $key => $value) {
		echo "<pre>";
		echo "$key=>$value";
		echo "</Pre>";
	}
	$Person->iteratorInner();
		
		
	?>
	<br /><a href="Part-20 (Using Traits in PHP).php">Part-20 (Using Traits in PHP)</a>
<?php include_once 'inc/footer.php';?>