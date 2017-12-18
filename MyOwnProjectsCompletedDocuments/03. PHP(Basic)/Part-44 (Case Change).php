<?php 
	session_start();
	include_once 'header.php';
	//setcookie("Visited", "", time()-3600);
?>

		<section class="maincontent">
		<hr>
		Part-44 (Case Change)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		
				<?php
					if(isset($_POST['text']))
					{
						global $txt; 
						$txt = $_POST['text'];
						//echo strtoupper($txt);
						//echo strtolower($txt);						
						//echo ucfirst($txt);						
						echo ucwords($txt);						
					}
								
				?>
				<form action="Part-44 (Case Change).php" method="post">
					<input type="text" name="text" Value="<?php global $txt; echo $txt; ?>" />
					<input type="submit" Value="Submit" />
				</form>
	
				
		<br /><a href="Part-45 (Strip whiltespaceOrCharacters).php">Part-45 (Strip whiltespace/Characters)</a>
		</section>
<?php include_once 'footer.php';?>
