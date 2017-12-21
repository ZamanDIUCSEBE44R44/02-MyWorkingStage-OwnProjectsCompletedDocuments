<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		 Part-30 (arsort).php
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
			arsort($num);
			foreach($num as $name=>$age)
			{
				echo "Name: ".$name.", Age: ".$age."<br />";
			}
			
			/*			
			$name = array(
				"Akbor"=>"Biology",
				"Mamun"=>"Maths",
				"Delowar"=>"Physics",
				"Hassan"=>"Bengali"
			);
			/*			
			print("<pre>");
			print_r($result);
			print("</pre>");
			*/
			
			
		?>
				
				
		<br /><a href="Part-30 (arsort & asort)02.php">Part-30 (arsort & asort)02</a>
		</section>
<?php include_once 'footer.php';?>
