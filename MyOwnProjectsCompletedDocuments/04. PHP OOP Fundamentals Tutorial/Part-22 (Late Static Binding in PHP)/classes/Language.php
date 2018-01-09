<?php 
	/**
	* 
	*/
	class Language
	{
		private $category;
		private $framework;

		function setCat($a)
		{
			$this->category = $a;
		}
		function getCat()
		{
			return $this->category;
		}
		function setFram($b)
		{
			$this->framework = $b;
		}
		function getFram()
		{
			return $this->framework;
		}

		public function __clone()
		{
			$lang = new Language();
			$lang->setFram($this->framework);
			return $lang;
		}
		
		
		
	}
?>