<?php
//Connect to Database
$connection=mysqli_connect("localhost","root","","data");
	if(!$connection)
	{
		die("database connection error");
	}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Data insert form</title>
	<link rel="stylesheet" href="css/style.css" />
	<style type="text/css">
	.phpcoding{ width:900px; margin: 0 auto; background:<?php echo "#ddd";?>;  min-height:400px; }
	.headeroption, .footeroption{background:#444; color:#ffff; text-align:center;padding:20px}
	.headeroption h2, .footeroption h2{margin:0}
	.maincontent{min-height: 400px; padding:20px;}
	</style>	
</head>
	<body>
		<div class="phpcoding">
			<Section class="headeroption">
				<h2><?php echo "Data Insert Form";?></h2>
			</section>
			<section class="maincontent">
				<form action="" method="post">
					<table>
						<tr>
							<td><p>ID</p><input type="id" name="id" id="" /></td>
							<td><p>Name</p><input type="text" name="name" id="" /></td>
							<td><p>Email</p><input type="email" name="email" id="" /></td>
						</tr>			
						<tr>
							<td><input type="submit" value="submit" name="submit"/></td>
						</tr>			
						</table>
				</form>
					
		<?php 
		//Insert Form Data Into MYSQL Database Using PHP
		if(isset($_POST['submit'])){
			
				$id= $_POST['id'];
				$name= $_POST['name'];
				$email= $_POST['email'];
				$insert="insert into collect(id,name,email)values('".$id."','".$name."','".$email."')";
				// Message show on web page to conform
					$query=mysqli_query($connection, $insert);
						if($query)
							{
								echo "Data Send Successfully";
							}
						else
							{
								echo "Data Not Send !";
							}
		}
		?>
	
			</section>
			<section class="footeroption">
				<h2><?php echo "Thanks for watching"?></h2>
			</section>
		</div>	
	</body>
</html>
