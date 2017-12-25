<?php include_once 'inc/header.php';?>
	<hr>Part-13 (Abstract Class)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
	//Abstract Class
	abstract class Student
	{
		public $name;
		public $age;
		public function details()
		{
			echo $this->name." is ".$this->age." years old <br />";
		}
		abstract public function School();
	}
	class Boy extends Student
	{
		public function describe()
		{
			return parent::details()."I am a University Student.<br />";
		}
		public function School()
		{
			return "I like to read story book.";
		}
	}
	$s = new Boy();
	$s->name = "Syed Zaman Mostafiz";
	$s->age = "28";
	echo $s->describe();
	echo $s->School();
	
	?>
	<br /><a href="Part-14 (Magic Methods).php">Part-14 (Magic Methods)</a>
<?php include_once 'inc/footer.php';?>