<?php
	class Emoticon
	{
		private $post;

		function __construct($object)
		{
			$this->post = $object;
		}
		public function getContent()
		{
			$post->filter();
			$content = $this->parseEmoticon($post->getContent());
			return $content;
		}
		public function parseEmoticon($content)
		{
			//Your Coding Process will be go here
		}

	}
?>