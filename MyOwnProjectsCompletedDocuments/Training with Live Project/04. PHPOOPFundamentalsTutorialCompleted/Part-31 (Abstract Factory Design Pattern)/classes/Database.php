<?php
	class Database
	{
		public static $instance;
				
		function __construct()
		{
			if (!self::$instance) 
			{
				self::$instance = $this;
				echo "Created New One. <br/>";
				return self::$instance;
			}
			else
			{
				echo "Created Old Instance. <br/>";
				return self::$instance;

			}
		}
	}

?>