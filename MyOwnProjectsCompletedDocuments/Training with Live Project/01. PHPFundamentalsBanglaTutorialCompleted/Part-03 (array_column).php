<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		Part-03 (array_column)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$name = array(
				array(
					'id'=>'200',
					'first_name'=>'Abdullah',
					'last_name'=>'Mamun'
				),
				array(
					'id'=>'201',
					'first_name'=>'Akbor',
					'last_name'=>'Hosian'
				),
				array(
					'id'=>'203',
					'first_name'=>'Delwoar',
					'last_name'=>'Imran'
				)
			);
			$first_name = array_column($name, 'first_name', 'id');
			print("<pre>");
			print_r($first_name);
			print("</pre>");
		?>
				
				
		<br /><a href="Part-04 (array_combine).php">Part-04 (array_combine)</a>
		</section>
<?php include_once 'footer.php';?>
