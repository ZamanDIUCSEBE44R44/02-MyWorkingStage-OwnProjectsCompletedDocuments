<?php include_once 'inc/header.php';?>
	<hr>Part-06 (Class Constants)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
		class UserData{
			public $user;
			public $userId;
			const NAME = "Syed Zaman Mostafiz";
			public function __construct($user, $userId)
			{
				$this->user = $user;
				$this->userId = $userId;
				echo "Username is {$this->user} and UserID is {$this->userId}";
			}
			public function display()
			{
				echo "Full name is ".UserData::NAME;
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
		echo "<br />";
		$ur->display();
	?>
	<br /><a href="Part-07 (Static properties & methods).php">Part-07 (Static properties & methods)</a>
<?php include_once 'inc/footer.php';?>