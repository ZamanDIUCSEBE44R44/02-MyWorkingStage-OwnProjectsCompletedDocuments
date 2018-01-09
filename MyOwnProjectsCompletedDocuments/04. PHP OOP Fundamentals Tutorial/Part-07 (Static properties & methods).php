<?php include_once 'inc/header.php';?>
	<hr>Part-07 (Static properties & methods)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
		class UserData{
			public $user;
			public $userId;
			const NAME = "Syed Zaman Mostafiz";
			public static $age = "28";
			public function __construct($user, $userId)
			{
				$this->user = $user;
				$this->userId = $userId;
				echo "Username is {$this->user} and UserID is {$this->userId}";
			}
			public static function display()
			{
				echo "Full name is ".UserData::NAME."<br />";
				echo "Age is ".self::$age;
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
		UserData::display();
	?>
	<br /><a href="Part-08 (Inheritance).php">Part-08 (Inheritance)</a>
<?php include_once 'inc/footer.php';?>