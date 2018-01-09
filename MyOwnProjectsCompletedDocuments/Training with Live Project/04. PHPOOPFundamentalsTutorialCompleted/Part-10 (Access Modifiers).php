<?php include_once 'inc/header.php';?>
	<hr>Part-10 (Access Modifiers)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
	//public
	//private
	//protected
		class UserData{
			public $user;
			public $userId;
			protected $age = "25";
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
				//echo "Username is {$this->user} and UserID is {$this->userId} and level is {$this->level}";
				echo $this->age." (In the sub Class)";
			}
			
		}
		$user = "Syed Zaman Mostafiz";
		$id = "44";
		$ur = new UserData($user, $id);
		$ur->display();
		echo "<br />";
		//echo $ur->age;
		$user = "Admin";
		$id = "1";
		$ad = new Admin($user, $id);
		$ad->level="Administrator";
		$ad->display();
	?>
	<br /><a href="Part-11 (Polymorphism).php">Part-11 (Polymorphism)</a>
<?php include_once 'inc/footer.php';?>