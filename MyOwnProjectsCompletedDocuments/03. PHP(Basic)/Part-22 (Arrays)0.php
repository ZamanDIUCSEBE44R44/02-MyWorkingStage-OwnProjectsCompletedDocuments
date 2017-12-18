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
			$x= array(1,2,3,4,5);
			$length= count($x);
			for($i=0;$i<$length;$i++)
			{
				echo $x[$i];
				echo "<br />";
			}
			/*
			$x[0]=1;
			$x[1]=2;
			$x[2]=3;
			$x[3]=4;
			$x[4]=5;
			$x[5]=6;
			
			echo $x[0]."<br />";
			echo count($x)."<br />";
			
			*/
			
			
			
		?>
		<br /><a href="Part-22 (Arrays)1.php">Part-22 (Arrays)1</a>
		</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section>
		
	</div>
	
</body>
</html>