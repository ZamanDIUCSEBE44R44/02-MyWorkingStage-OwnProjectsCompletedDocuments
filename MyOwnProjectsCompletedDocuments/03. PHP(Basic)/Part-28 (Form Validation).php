<?php 
$font = "verdana";
$bgcolor = "#444";//E06C1D
$fontcolor = "#fff"; 
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
	<style type="text/css">
	body{font-family:<?php echo $font;?>}
	.phpcoding{width:900px; margin:0 auto; background:<?php echo "#ddd";?>; }
	.headeroption, .footeroption{background:<?php echo $bgcolor;?>; color:<?php echo $fontcolor;?>;text-align:center; padding:20px;}
	.headeroption h2, .footeroption h2{margin:0px}
	.maincontent{min-height:400px; padding:20px}
	</style>
</head>
<body>
	<div class="phpcoding">
		<section class="headeroption">
			<h2><?php echo "PHP Fundamental Training";?></h2>
		</section>
		<section class="maincontent">
		<h1>PHP Form Validation</h1>
		<hr />
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
				<table>
					<tr>
						<td>Name : </td>
						<td><input type="text" name="name" required /></td>
					</tr>
					<tr>
						<td>E-mail : </td>
						<td><input type="email" name="email" required /></td>
					</tr>
					<tr>
						<td>Website : </td>
						<td><input type="text" name="website" required /></td>
					</tr>
					<tr>
						<td>Comment : </td>
						<td><textarea name="comment" id="" cols="30" rows="10"></textarea></td>
					</tr>
					<tr>
						<td>Gender : </td>
						<td>
							<input type="radio" name="gender" value="male" required />Male
							<input type="radio" name="gender" value="female" required />Female
						</td>					
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Submit" /></td>
					</tr>
				</table>
			</form>
			<?php 
			$name = $email = $website = $comment = $gender = "";
				if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					$name = validate($_POST['name']);
					$email = validate($_POST['email']);
					$website = validate($_POST['website']);
					$comment = validate($_POST['comment']);
					$gender = validate($_POST['gender']);
					
					echo "Name : ".$name."<br />";
					echo "E-mail : ".$email."<br />";
					echo "Website : ".$website."<br />";
					echo "Comment : ".$comment."<br />";
					echo "Gender : ".$gender."<br />";
				}
				function validate($data)
				{
					$data = trim($data);
					$data = stripcslashes($data);
					$data = htmlspecialchars($data);
					return $data;
				}				
			?>
		
		<br /><a href="Part-29 (Form Required).php">Part-29 (Form Required)</a>
		</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section>		
	</div>
</body>
</html>