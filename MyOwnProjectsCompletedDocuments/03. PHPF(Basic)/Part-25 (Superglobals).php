<?php 
$font = "verdana";
$bgcolor = "#444";//E06C1D
$fontcolor = "#fff"; 
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
	<style type="text/css">
	body{font-family:<?php echo $font;?>}
	.phpcoding{width:900px; margin:0 auto; background:<?php echo "#ddd";?>; }
	.headeroption, .footeroption{background:<?php echo $bgcolor;?>; color:<?php echo $fontcolor;?>;text-align:center; padding:20px;}
	.headeroption h2, .footeroption h2{margin:0px}
	.maincontent{min-height:400px; padding:20px}
	</style>
</head>
<body>
	<div class="phpcoding">
		<section class="headeroption">
			<h2><?php echo "PHP Fundamental Training";?></h2>
		</section>
		<section class="maincontent">
		<h1>PHP Superglobals [$GLOBALS & $_SERVER]</h1>
		<hr />
		<?php
			$x=5;
			$y=10;
			function sum()
			{
				$GLOBALS['z']=$GLOBALS['x'] + $GLOBALS['y'];
			}
			sum();
			echo $z."<br />";
			echo $_SERVER['PHP_SELF']."<br />";
			echo $_SERVER['SERVER_NAME']."<br />";
			echo $_SERVER['SCRIPT_NAME']."<br />";
			echo $_SERVER['HTTP_USER_AGENT']."<br />";
			echo $_SERVER['SERVER_ADDR']."<br />";	
		?>
		<br /><a href="Part-26 ($_REQUEST & $_POST).php">Part-26 ($_REQUEST & $_POST)</a>
		</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section>
		
	</div>
	
</body>
</html>