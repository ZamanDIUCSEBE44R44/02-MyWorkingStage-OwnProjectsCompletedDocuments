<?php
	abstract class Php
		{
			public function framework()
			{
				echo "Base Class Constant and class name-> ".__CLASS__." <br />";
				echo "Base Class Function and class name-> ".get_class($this)."<br/>";
			

			}
		

		}
?>