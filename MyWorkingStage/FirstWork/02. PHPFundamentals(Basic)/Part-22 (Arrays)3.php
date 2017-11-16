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
		Arrays		
		<hr />
		<?php
			$cars= array(
				array("BMW", 15, 50),
				array("volvo", 20, 5),
				array("Saab", 25, 30),
				array("Audi", 25, 30)
			);
			for($row=0;$row<4;$row++)
			{
				echo "<p>Row number $row</p>";
				echo "<ul>";
				for($col=0;$col<3;$col++)
				{
					echo "<li>".$cars[$row][$col]."</li>";
				}
				echo "</ul>";
			}
			
			
		?>
		<br /><a href="Part-23 (Sorting Arrays).php">Part-23 (Sorting Arrays)</a>
		</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section>
		
	</div>
	
</body>
</html>