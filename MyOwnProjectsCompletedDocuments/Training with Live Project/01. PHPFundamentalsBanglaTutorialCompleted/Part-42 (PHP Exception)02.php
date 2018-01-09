<?php 
	session_start();
	include_once 'header.php';
	//setcookie("Visited", "", time()-3600);
?>

		<section class="maincontent">
		<hr>
		Part-42 (PHP Exception)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		
				<?php
					function numCheck($num)
					{
						if($num!=5)
						{
							throw new Exception("Number is not 5");
						}
						return true;
					}
					try
					{
						numCheck(5);
						echo "Yes you have done.";
					}
					catch(Exception $e) 
					{
						echo "Error: ".$e->getMessage();
					}
				?>
	
				
		<br /><a href="Part-43 (Explode & Implode Function).php">Part-43 (Explode & Implode Function)</a>
		</section>
<?php include_once 'footer.php';?>
