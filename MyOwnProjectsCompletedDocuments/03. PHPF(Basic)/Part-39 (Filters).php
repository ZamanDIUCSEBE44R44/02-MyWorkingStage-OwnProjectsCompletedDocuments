<?php 
	session_start();
	include_once 'header.php';
	//setcookie("Visited", "", time()-3600);
?>

		<section class="maincontent">
		<hr>
		Part-39 (Filters)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		<table>
			<tr>
				<td>Filter Name</td>
				<td>Filter ID</td>
				<?php
					foreach(filter_list() as $id =>$filter)
					{
						echo '<tr><td>'.$filter.'</td><td>'.filter_id($filter).'</td></tr>';
					}
				?>
			</tr>
		</table>
				
		<br /><a href="Part-39 (Filters)1.php">Part-39 (Filters)1</a>
		</section>
<?php include_once 'footer.php';?>
