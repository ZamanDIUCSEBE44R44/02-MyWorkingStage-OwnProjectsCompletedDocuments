<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		Part-12 (array_key_exists)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$arr = array(
				"name"=>"Rahim",
				"age"=>"35"
			);
			if(array_key_exists("name", $arr))
			{
				echo "Key already exits";
			}
			else
			{
				echo "Key does not exits";
			}
			/*
			print("<pre>");
			print_r($result);
			print("</pre>");
			*/
		?>
				
				
		<br /><a href="Part-12 (array_key_exists)02.php">Part-12 (array_key_exists)02</a>
		</section>
<?php include_once 'footer.php';?>
