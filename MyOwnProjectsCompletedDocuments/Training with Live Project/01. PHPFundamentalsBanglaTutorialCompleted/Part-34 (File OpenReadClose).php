<?php include_once 'header.php';?>
		<section class="maincontent">
		<hr>
		PHP File Open/Read/Close
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<?php
			$ourfile = fopen("text.txt", "r") or die("File not found!!");
			//echo fread($ourfile, filesize("text.txt"))."<br />";
			//echo fgets($ourfile, filesize("text.txt"));
			//echo fgetc($ourfile);
			/*while(!feof($ourfile))
			{
				echo fgets($ourfile )."<br />";
			}*/
			while(!feof($ourfile))
			{
				echo fgetc($ourfile )."<br />";
			}
			fclose($ourfile);
		?>	
		
		<br /><a href="Part-35 (File Create & Write).php">Part-35 (File Create & Write)</a>
		</section>
<?php include_once 'footer.php';?>
