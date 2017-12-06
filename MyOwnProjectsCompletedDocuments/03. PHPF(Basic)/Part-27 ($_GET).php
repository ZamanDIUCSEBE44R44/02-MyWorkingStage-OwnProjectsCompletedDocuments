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
		<h1>PHP Superglobals [$_GET]</h1>
		<hr />
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			Username: <input type="text" name="username" />
			<input type="submit" value="Submit" />
		</form>
			<a href="text.php?msg=Good&txt=Bye">Sent Data</a>
		<?php
		
		?>
		<br /><a href="Part-28 (Form Validation).php">Part-28 (Form Validation)</a>
		</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section>		
	</div>
</body>
</html>