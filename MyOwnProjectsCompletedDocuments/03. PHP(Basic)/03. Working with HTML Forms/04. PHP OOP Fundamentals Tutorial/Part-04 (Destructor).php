<?php include_once 'inc/header.php';?>
	<hr>PHP Part-04 (Destructor)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
		class Person{
			public $name;
			public $age;
			public $id;
			public function __construct($name, $age)
			{
				$this->name = $name;
				$this->age = $age;
			}
			public function personName(){
				echo "Person name is : ".$this->name."<br />";
			}
			public function setId($id)
			{
				$this->id = $id;
			}
			public function __destruct()
			{
				if(! empty($this->id))
				{
					echo "Saving Person";
				}
			}
			
		}
		$personOne = new Person("Syed Zaman Mostafiz", "28");
		$personOne -> setId(12);
		unset($personOne);
		
	?>
	<br /><a href="Part-05 (constructors & destructors).php">Part 05 (constructors & destructors)</a>
<?php include_once 'inc/footer.php';?>