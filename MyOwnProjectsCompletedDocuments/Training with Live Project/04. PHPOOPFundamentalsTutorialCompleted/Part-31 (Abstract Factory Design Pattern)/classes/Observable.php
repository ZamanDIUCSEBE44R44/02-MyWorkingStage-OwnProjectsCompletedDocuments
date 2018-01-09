<?php
	class Observable
	{
		private $observer =array();
		public function register($object)
		{
			if ($object instanceof Observer) {
				$this->observer[]=$object;
			} else {
				echo "Object should be implements observer interface.....<br/>";
			}			
		}
		public function stateChange()
		{
			foreach ($this->observer as $overver) 
			{
				$overver->message();
			}
		}
	}
?>