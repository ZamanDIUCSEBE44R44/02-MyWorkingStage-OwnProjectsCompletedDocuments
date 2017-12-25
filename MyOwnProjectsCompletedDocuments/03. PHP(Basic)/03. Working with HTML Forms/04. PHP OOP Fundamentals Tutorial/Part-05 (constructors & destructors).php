<?php include_once 'inc/header.php';?>
	<hr>Part 05 (constructors & destructors)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
		class UserData{
			public $user;
			public $userId;
			public function __construct($user, $userId)
			{
				$this->user = $user;
				$this->userId = $userId;
				echo "Username is {$this->user} and UserID is {$this->userId}";
			}
			public function __destruct()
			{
				unset($this->user);
				unset($this->userId);
			}
		}
		$user = "Syed Zaman Mostafiz";
		$id = "44";
		$ur = new UserData($user, $id);
	?>
	<br /><a href="Part-06 (Class Constants).php">Part-06 (Class Constants)</a>
<?php include_once 'inc/footer.php';?>