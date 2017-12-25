<?php 
	include_once 'inc/header.php'; 
?>
	<hr>Part-03 (Constructor)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
		class Person{
			public $name;
			public $age;
			public function __construct($name, $age)
			{
				$this->name = $name;
				$this->age = $age;
			}
			public function personName(){
				echo "Person name is : ".$this->name."<br />";
			}
			public function personDetails(){
				echo "Person name is {$this->name} and Person age is {$this->age}";
			}
		}
		$personOne = new Person("Syed Zaman Mostafiz", "28");
		$personOne -> personDetails();
		
	?>
	<br /><a href="Part-04 (Destructor).php">PHP Part-04 (Destructor)</a>
<?php include_once 'inc/footer.php';?>