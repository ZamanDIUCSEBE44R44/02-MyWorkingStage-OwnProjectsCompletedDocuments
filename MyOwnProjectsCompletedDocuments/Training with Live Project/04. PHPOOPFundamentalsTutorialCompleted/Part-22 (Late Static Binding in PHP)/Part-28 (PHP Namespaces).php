<?php include_once 'inc/header.php';?>
	<hr>Part-29 (Strategy Design Pattern)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
		spl_autoload_register(function($class_name){
			include "classes/".$class_name.".php";
		});

		$user = new User();
		$msg = $user->getMsg();
		switch ($msg) {
			case 'email':
				$obj = new SendEmail();
				break;
			case 'sms':
				$obj = new SendSms();
				break;
			case 'fax':
				$obj = new SendFax();
				break;
			
			default:
				# code...
				break;
		}

	?>
	<br /><a href="Part-30 (Factory Design Pattern).php">Part-30 (Factory Design Pattern)</a>
<?php include_once 'inc/footer.php';?>