<?php 
	$font = "verdana";
	$bgcolor = "#444";//E06C1D
	$fontcolor = "#fff";
	$errname = $erremail = $errweb = $errgender = "";
	
	$name = $email = $website = $comment = $gender = "";
				if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					if(empty($_POST['name']))
					{
						$errname = "<span style='color:green'>Name is Required</span>";
					}
					else
					{
						$name = validate($_POST['name']);
					}
					if(empty($_POST['email']))
					{
						$erremail = "<span style='color:green'>E-mail is Required</span>";
					}
					else
					{
						$email = validate($_POST['email']);
					}
					if(empty($_POST['website']))
					{
						$errweb = "<span style='color:green'>Website is Required</span>";
					}
					else
					{
					$website = validate($_POST['website']);
					}
					if(empty($_POST['gender']))
					{
						$errgender = "<span style='color:green'>Gender is Required</span>";
					}
					else
					{
						$gender = validate($_POST['gender']);
					}
					$comment = validate($_POST['comment']);

					
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
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
	<style type="text/css">
	 body{font-family:<?php echo $font;?>; background:url(images/bg1.png) repeat fixed 0 0 #fff;}
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
		<h1>PHP Form Required</h1>
		<hr />
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
				<table>
				<p style="color:green">* Required field</p>
					<tr>
						<td>Name : </td>
						<td><input type="text" name="name"  />*<?php echo $errname ?></td>
					</tr>
					<tr>
						<td>E-mail : </td>
						<td><input type="email" name="email"  />*<?php echo $erremail ?></td>
					</tr>
					<tr>
						<td>Website : </td>
						<td><input type="text" name="website"  />*<?php echo $errweb ?></td>
					</tr>
					<tr>
						<td>Comment : </td>
						<td><textarea name="comment" id="" cols="30" rows="10"></textarea></td>
					</tr>
					<tr>
						<td>Gender : </td>
						<td>
							<input type="radio" name="gender" value="male"  />Male
							<input type="radio" name="gender" value="female"  />Female
							*<?php echo $errgender ?>
						</td>					
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Submit" /></td>
					</tr>
				</table>
			</form>
			
		
		<br /><a href="Part-30 (URLandE-mail Validation).php">Part-30 (URLandE-mail Validation)</a>
		</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section>		
	</div>
</body>
</html>