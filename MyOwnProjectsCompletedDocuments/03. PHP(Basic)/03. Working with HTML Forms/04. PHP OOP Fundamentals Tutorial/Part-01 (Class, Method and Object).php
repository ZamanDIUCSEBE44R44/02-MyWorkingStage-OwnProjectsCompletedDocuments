<?php include_once 'inc/header.php'; ?>
	<hr>Object Oriented PHP Part-01 (Class, Method and Object)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />
	
	<?php
		class Person{
			public $name;
			public $age;
			public function personName(){
				echo "Person name is : ".$this->name."<br />";
			}
			public function personAge($value){
				echo "Person age is : ".$this->age=$value;
			}
		}
		$personOne = new Person;
		$personOne->name="Syed Zaman Mostafiz";
		$personOne->personName();
		$personOne->personAge("18");
	?>

	<br /><a href="Part-02 (Work with Method and Object).php">Part-02 (Work with Method and Object)</a>
<?php include_once 'inc/footer.php';?>