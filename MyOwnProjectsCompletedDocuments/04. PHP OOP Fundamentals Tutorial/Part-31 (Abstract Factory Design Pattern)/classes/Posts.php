<?php
	class Posts implements Iterator
	{
		public $var;
		private $posts = array();
		
		function __construct($posts)
		{
			if (is_array($posts)) 
			{
				$this->post = $posts;
			}			
		}
		public function rewind()
		{
			reset($this->post);
		}
		public function current()
		{
			return current($this->post);
		}
		public function key()
		{
			return key($this->var);
		}
		public function next()
		{
			return next($this->var);
		}
		public function valid()
		{
			return ($this->current()!== false)
		}
	}
?>