<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		Part-34 (key,krsort,ksort)02
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$coder = array(
				"Delowar"=>"30",
				"Akbor"=>"35",
				"Mamun"=>"32"
				);
			//krsort($coder);
			ksort($coder);
			foreach($coder as $key=>$value)
			{
				echo "Name: ".$key.", Age: ".$value."<br />";
			}
			
		?>	
				
		<br /><a href="Part-35 (shuffle).php">Part-35 (shuffle)</a>
		</section>
<?php include_once 'footer.php';?>
