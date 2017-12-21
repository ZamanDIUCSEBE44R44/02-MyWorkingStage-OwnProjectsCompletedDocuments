<?php
	include_once 'header.php';
?>
		<section class="maincontent">
		<hr>
		 Part-22 (array_search)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$color_one = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
			if(isset($_POST['text']))
			{
				global $txt;
				$txt = $_POST['text'];
				$result = array_search($txt, $color_one);
				echo "You have searched by-> $txt and your key is-> $result";
				
			}
			/*
			print("<pre>");
			print_r($result);
			print("</pre>");
			*/
		?>
		<form action="Part-22 (array_search).php" method="post">
			<input type="text" name="text" Value="<?php global $txt; echo $txt; ?>" />
			<input type="submit" Value="Submit" />
		</form>
				
				
		<br /><a href="Part-23 (array_shift).php">Part-23 (array_shift)</a>
		</section>
<?php include_once 'footer.php';?>
