<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		 Part-14 (array_map)02
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			function myfunction($value)
			{
				$v = strtoupper($value);
				return $v;
			}
			$arr = array(
				"Animal"=>"cow",
				"Type"=>"mammal"
			);
			
			$result = array_map("myfunction", $arr);
						
			print("<pre>");
			print_r($result);
			print("</pre>");
			
			
		?>
				
				
		<br /><a href="Part-15 (array_merge).php">Part-15 (array_merge)</a>
		</section>
<?php include_once 'footer.php';?>
