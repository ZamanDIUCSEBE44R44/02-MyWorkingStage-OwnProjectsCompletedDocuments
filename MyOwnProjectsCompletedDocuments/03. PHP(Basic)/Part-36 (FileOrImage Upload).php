<?php include_once 'header.php';?>
		<section class="maincontent">
		<hr>
		Part-36 (File/Image Upload)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
			<form action="upload.php" method="POST" enctype="multipart/form-data">
				<input type="file" name="file" />
				<button type="submit" name="submit">Upload</button>
			</form>

		
		
		<br /><a href="Part-37 (Sessions).php">Part-37 (Sessions)</a>
		</section>
<?php include_once 'footer.php';?>
