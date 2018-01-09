<?php include_once 'inc/header.php';?>
	<hr>Part-20 (Using Traits in PHP)
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
		trait Php
		{
			public function phpCoder()
			{
				echo "I Love Php.<br/>";
			}
		}
		trait JavaPhp
		{
			use Java, Php;
		}
		class CoderOne
		{
			use JavaPhp;
		}
		
		
		$c1 = new CoderOne;
		echo $c1->javaCoder();
		echo $c1->phpCoder();
		
		
	?>
	<br /><a href="Part-20 (Using Traits in PHP)02.php">Part-20 (Using Traits in PHP)02</a>
<?php include_once 'inc/footer.php';?>