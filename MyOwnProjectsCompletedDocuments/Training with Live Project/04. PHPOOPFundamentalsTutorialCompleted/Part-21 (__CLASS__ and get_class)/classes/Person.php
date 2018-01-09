<?php 
	class Person
	{
		
		public $name = "Ariful";
		public $Age = "18";
		public $Skill = "Blogging";

		private $Email = "ariful@gmail.com";
		protected $Password = "12345"; 

		public function iteratorInner()
		{
			echo "Inside Class <br/>";
			foreach ($this as $key => $value) 
			{
			echo "<pre>";
			echo "$key=>$value";
			echo "</Pre>";
			}
		}


	
	}

?>