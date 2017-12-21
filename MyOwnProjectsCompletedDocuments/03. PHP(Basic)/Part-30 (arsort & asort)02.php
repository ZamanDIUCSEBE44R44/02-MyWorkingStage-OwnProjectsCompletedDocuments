<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		 Part-30 (asort)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$num = array(
				"Akbor"=>"35",
				"Mamun"=>"40",
				"Delowar"=>"30",
				"Hassan"=>"20"
			);
			asort($num);
			foreach($num as $name=>$age)
			{
				echo "Name: ".$name.", Age: ".$age."<br />";
			}
			
			
		?>
				
				
		<br /><a href="Part-31 (compact).php">Part-31 (compact)</a>
		</section>
<?php include_once 'footer.php';?>
