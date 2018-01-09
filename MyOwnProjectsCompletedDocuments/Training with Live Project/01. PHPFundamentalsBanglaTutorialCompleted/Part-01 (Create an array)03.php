<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		Part-01 (Multidimensional Array)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$car = array(
				array("Volvo","100","90"),
				array("BMW","40","30"),
				array("Toyota","120","100")
			);
			echo $car[2][0];
		?>
				
				
		<br /><a href="Part-02 (array_change_key_case).php">Part-02 (array_change_key_case)</a>
		</section>
<?php include_once 'footer.php';?>
