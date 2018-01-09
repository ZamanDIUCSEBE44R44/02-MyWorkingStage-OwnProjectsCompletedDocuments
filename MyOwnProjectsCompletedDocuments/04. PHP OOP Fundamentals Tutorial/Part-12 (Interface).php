<?php include_once 'inc/header.php';?>
	<hr>Part-12 (Interface)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
	//interface
	interface School
	{
		public function mySchool(); 
	}
	interface College
	{
		public function myCollege(); 
	}
	interface Varsity
	{
		public function myVarsity(); 
	}
	class Teacher implements School, College, Varsity
	{
		public function __construct()
		{
			$this->mySchool();
			$this->myCollege();
			$this->myVarsity();
		}
		public function mySchool()
		{
			echo "I am a School Teacher.<br />";
		
		}
		public function myCollege()
		{
			echo "I am a College Teacher.<br />";
		}
		
		public function myVarsity()
		{
			echo "I am a Varsity Teacher.<br />";
		}
	}
	class Student implements School, College, Varsity
	{
		public function __construct()
		{
			$this->mySchool();
			$this->myCollege();
			$this->myVarsity();
		}
		public function mySchool()
		{
			echo "I am a School Student.<br />";
		
		}
		public function myCollege()
		{
			echo "I am a College Student.<br />";
		}
		
		public function myVarsity()
		{
			echo "I am a Varsity Student";
		}
	}
	$Teacher = new Teacher();
	$Student = new Student();
	?>
	<br /><a href="Part-13 (Abstract Class).php">Part-13 (Abstract Class)</a>
<?php include_once 'inc/footer.php';?>