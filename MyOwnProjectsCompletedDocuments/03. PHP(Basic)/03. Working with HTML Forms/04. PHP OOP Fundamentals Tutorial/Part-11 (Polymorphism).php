<?php include_once 'inc/header.php';?>
	<hr>Part-11 (Polymorphism)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
	//public
	//private
	//protected
		class UserData{
			public $user;
			public $userId;
			public $age = "25";
			public function __construct($user, $userId)
			{
				$this->user = $user;
				$this->userId = $userId;	
			}
			public function display()
			{
				//echo "Username is {$this->user} and UserID is {$this->userId}";
				echo $this->age." (Inside Class)";
			}	
		}
		class Admin extends UserData{
			public $level;
			public function display()
			{
				echo "Username is {$this->user} and UserID is {$this->userId} and level is {$this->level}";
				echo $this->age." (In the sub Class)";
			}
			
		}
		$user = "Syed Zaman Mostafiz";
		$id = "44";
		$ur = new UserData($user, $id);
		$ur->display();
		echo "<br />";
		$admin = new Admin("Syed Zaman","28");
		$admin->display();
		echo "<br />";
		if($admin instanceof UserData)
		{
			echo "Inherited";
		}
	?>
	<br /><a href="Part-12 (Interface).php">Part-12 (Interface)</a>
<?php include_once 'inc/footer.php';?>