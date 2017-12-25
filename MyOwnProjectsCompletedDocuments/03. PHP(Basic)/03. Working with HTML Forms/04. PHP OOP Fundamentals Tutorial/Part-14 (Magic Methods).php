<?php include_once 'inc/header.php';?>
	<hr>Part-14 (Magic Methods)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
	//Magic Methods
	class Student
	{
		public $name;
		public function describe()
		{
			echo "I am Student.<br />";
		}
		public function __get($pm)
		{
			echo "$pm does not exits.<br /> ";
		}
		public function __set($pm, $value)
		{
			echo "We set $pm->$value.<br />";
		}
		public function __call($pm, $value)
		{
			echo "There is no <b>".$pm."</b> method and Arguments: ".implode(", ", $value);
		}
	}
	$st = new Student();
	$st->describe();
	$st->Hasan;
	$st->age = 15;
	$st->notExistMethod('2', '8', '5');
	
	?>
	<br /><a href="Part-15 (Class & Method Existence).php">Part-15 (Class & Method Existence)</a>
<?php include_once 'inc/footer.php';?>