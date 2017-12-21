<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		 Part-29 (array_walk)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			function myfunction($department, $name)
			{
				echo "$name comes from $department department <br />";
			}
			$name = array(
				"Akbor"=>"Biology",
				"Mamun"=>"Maths",
				"Delowar"=>"Physics"
			);
			array_walk($name, "myfunction");
			/*			
			print("<pre>");
			print_r($result);
			print("</pre>");
			*/
			
			
		?>
				
				
		<br /><a href="Part-30 (arsort & asort).php">Part-30 (arsort & asort)</a>
		</section>
<?php include_once 'footer.php';?>
