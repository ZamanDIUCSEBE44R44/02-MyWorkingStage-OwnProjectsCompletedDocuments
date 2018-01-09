<?php
	class Comment
	{
		
		private $date;
		private $content;
		public function filter()
		{
			$this->title = $filtered_title;
			$this->content = $filtered_content;
		}
		public function getContent()
		{
			return $this->content;
		}
	}
?>