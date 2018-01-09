<?php include_once 'inc/header.php';?>
	<hr>Part-33 (Iterator Design Pattern)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
		spl_autoload_register(function($class_name){
			include "classes/".$class_name.".php";
		});
		$blogPost = getAllPost();
		for ($i=0; $i <count($posts) ; $i++) { 
			$title = getTitle($posts[$i]);
			echo $title;
			$author = getauthor($posts[$i]);
			$content = getcontent($posts[$i]);
			echo $content;
			$comments = getComments();
			for ($j=0; $j <count($comments) ; $j++) 
			{ 
				echo "commentAuthor";
				$com = getpostComments($comments[$j]);
				echo $com;
			}
		}
		


		

	







	?>
	<br /><a href="Part-34 (Observer Design Pattern).php">Part-34 (Observer Design Pattern)</a>
<?php include_once 'inc/footer.php';?>