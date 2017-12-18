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
	 body{font-family:<?php echo $font;?>; background:url(images/bg1.png) repeat fixed 0 0 #fff;}
	.phpcoding{width:900px; margin:0 auto; background:<?php echo "#ddd";?>; }
	.headeroption, .footeroption{background:<?php echo $bgcolor;?>; color:<?php echo $fontcolor;?>;text-align:center; padding:20px;}
	.headeroption h2, .footeroption h2{margin:0px}
	.maincontent{min-height:400px; padding:20px}
	p{margin:0}
	</style>
</head>
<body>
	<div class="phpcoding">
		<section class="headeroption">
			<h2><?php echo "PHP Fundamental Training";?></h2>
		</section>
		<section class="maincontent">
		<hr>
		PHP Date and Time
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			//date(format, timestamp)
			//echo date("Y/m/d");
			echo "Today is ".date("d/m/Y")."<br />";
			echo "Today is ".date("d/m/y")."<br />";
			echo "Today is ".date("l")."<br />";
			echo "Default Time is ".date("h:i:sa")."<br />";
			echo date_default_timezone_get('Asia/Dhaka');
			
		?>	
		
		<br /><a href="Part-32 (Include & Require).php">Part-32 (Include & Require)</a>
		</section>
		<section class="footeroption">
			<p>&copy; <?php echo date("Y");?> Training With Live Project</p>
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section>		
	</div>
</body>
</html>