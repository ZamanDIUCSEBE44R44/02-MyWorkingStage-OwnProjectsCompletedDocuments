<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		Part-01 (Associative Array)  
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$age = array(
				"Abdullah" => "30",
				"Mamun" => "32",
				"Jamal" => "28",
				"Habib" => "25"			
			);
			foreach($age as $key=>$value)
			{
				echo "Name= ".$key.", Value= ".$value;
				echo "<br />";
			}
			?>
				
				
		<br /><a href="Part-01 (Create an array)03.php">Part-01 (Create an array)03</a>
		</section>
<?php include_once 'footer.php';?>
