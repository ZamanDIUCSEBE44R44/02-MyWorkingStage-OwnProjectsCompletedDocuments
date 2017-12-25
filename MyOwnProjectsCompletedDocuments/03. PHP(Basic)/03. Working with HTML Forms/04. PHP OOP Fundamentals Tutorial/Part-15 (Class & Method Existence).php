<?php include_once 'inc/header.php'; include_once 'Student.php';?>
	<hr>Part-15 (Class & Method Existence)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
	if(class_exists("Student"))
	{
		$st = new Student();
		if(method_exists($st, 'describe'))
		{
			$st->describe();			
		}
		else
		{
			echo "Method not found.";
		}
		
	}
	else
	{
		echo "Class not found.";
	}
	
	?>
	<br /><a href="Part-16 (Autoloading Classes).php">Part-16 (Autoloading Classes)</a>
<?php include_once 'inc/footer.php';?>