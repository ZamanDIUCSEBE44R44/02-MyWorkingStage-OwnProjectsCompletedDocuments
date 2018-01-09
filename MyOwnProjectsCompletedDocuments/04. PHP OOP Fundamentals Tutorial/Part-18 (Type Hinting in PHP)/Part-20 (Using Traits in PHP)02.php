<?php include_once 'inc/header.php';?>
	<hr>Part-20 (Using Traits in PHP)02
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
/*
		spl_autoload_register(function($class_name){
			include "classes/".$class_name.".php";
		});
*/
		trait Java
		{
			public function javaCoder()
			{
				echo "I Love Java.<br/>";
			}
		}
	

		class CoderOne
		{
			use Java;
			public function javaCoder()
			{
				echo "I Love Java and PHP.<br/>";
			}
		}
		
		
		$c1 = new CoderOne;
		echo $c1->javaCoder();		
		
	?>
	<br /><a href="../Part-21 (__CLASS__ and get_class)/Part-21 (__CLASS__ and get_class).php">Part-21 (__CLASS__ and get_class)</a>
<?php include_once 'inc/footer.php';?>