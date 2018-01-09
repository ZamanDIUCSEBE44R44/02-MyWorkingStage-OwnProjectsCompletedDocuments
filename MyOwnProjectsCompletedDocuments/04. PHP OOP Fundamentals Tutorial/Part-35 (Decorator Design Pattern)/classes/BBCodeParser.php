<?php
	class BBCodeParser
	{
		private $post;

		function __construct($object)
		{
			$this->post = $object;
		}
		public function getContent()
		{
			$post->filter();
			$content = $this->parselBBCode($post->getContent());
			return $content;
		}
		public function parselBBCode($content)
		{
			//Your Coding Process will be go here
		}
	}
?>