<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		Part-01 (Create an array)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$car = array("Volvo", "BMW", "Toyota");
			//echo $car[0];
			$length = count($car);
			for($i=0; $i<$length; $i++)
			{
				echo $car[$i]."<br />";
			}
		?>
				
				
		<br /><a href="Part-01 (Create an array)02.php">Part-01 (Create an array)02</a>
		</section>
<?php include_once 'footer.php';?>
