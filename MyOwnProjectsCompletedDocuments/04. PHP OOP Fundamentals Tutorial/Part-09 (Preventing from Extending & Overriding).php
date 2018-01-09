<?php include_once 'inc/header.php';?>
	<hr>Part-09 (Preventing from Extending & Overriding)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
	//final
		 class UserData{
			public $user;
			public $userId;	
			public function __construct($user, $userId)
			{
				$this->user = $user;
				$this->userId = $userId;	
			}
			public function display()
			{
				echo "Username is {$this->user} and UserID is {$this->userId}";
			}	
		}
		class Admin extends UserData{
			public $level;
			public function display()
			{
				echo "Username is {$this->user} and UserID is {$this->userId} and level is {$this->level}";
			}
		}
		$user = "Syed Zaman Mostafiz";
		$id = "44";
		$ur = new UserData($user, $id);
		$ur->display();
		echo "<br />";		
		$user = "Admin";
		$id = "1";
		$ad = new Admin($user, $id);
		$ad->level="Administrator";
		$ad->display();
	?>
	<br /><a href="Part-10 (Access Modifiers).php">Part-10 (Access Modifiers)</a>
<?php include_once 'inc/footer.php';?>