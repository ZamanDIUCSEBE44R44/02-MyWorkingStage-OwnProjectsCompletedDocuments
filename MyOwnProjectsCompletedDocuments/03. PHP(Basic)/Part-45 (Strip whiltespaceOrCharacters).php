<?php 
	session_start();
	include_once 'header.php';
	//setcookie("Visited", "", time()-3600);
?>

		<section class="maincontent">
		<hr>
		Part-45 (Strip whiltespace/Characters)
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
						//echo trim($txt, " .");						
						//echo ltrim($txt, " .");						
						echo rtrim($txt, " .");						
					}
								
				?>
				<form action="Part-45 (Strip whiltespaceOrCharacters).php" method="post">
					<input type="text" name="text" Value="<?php global $txt; echo $txt; ?>" />
					<input type="submit" Value="Submit" />
				</form>
	
				
		<br /><a href="Part-46 (requireOrrequire_once).php">Part-46 (require/require_once)</a>
		</section>
<?php include_once 'footer.php';?>
