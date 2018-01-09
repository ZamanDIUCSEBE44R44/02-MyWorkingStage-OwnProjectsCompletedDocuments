<?php include_once 'header.php';?>
		<section class="maincontent">
		<hr>
		PHP File Create & Write
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$createfile = fopen("new.txt", "w") or die("File not found!!");
			$one = "Syed Zaman Mostafiz.\n";
			fwrite($createfile,$one);
			/**/
			$two = "Delwar j Imran";
			fwrite($createfile,$two);
			
			fclose($createfile);
		?>	
		
		<br /><a href="Part-36 (FileOrImage Upload).php">Part-36 (File/Image Upload)</a>
		</section>
<?php include_once 'footer.php';?>
