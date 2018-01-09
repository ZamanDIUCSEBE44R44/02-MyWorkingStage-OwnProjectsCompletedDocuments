<?php include_once 'inc/header.php';?>
	<hr>Part-34 (Observer Design Pattern)
		<span style="float:right"><?php date_default_timezone_set('Asia/Dhaka'); echo "Bangladesh Time is ".date("h:i:sa")."<br />";?></span>
	<hr />	
	<?php
		spl_autoload_register(function($class_name){
			include "classes/".$class_name.".php";
		});
	$post = new Post();
	$comment = new Comment();
	$post->filter();
	$comment->filter();
	if ($BBCodeEnable == false && $EmoticonEnable == false) 
	{
		$postContent = $post->getContent();
		$commentContent = $comment->getContent();
	} 
	elseif (($BBCodeEnable == true && $EmoticonEnable == false) 
	{
		$bb = new BBCodeParsel($post);
		$postContent = $bb->getContent();

		$bb = new BBCodeParsel($comment);
		$comContent = $bb->getContent();
	}
	elseif (($BBCodeEnable == false && $EmoticonEnable == true) 
	{
		$em = new Emoticon($post);
		$postContent = $em->getContent();

		$bb = new Emoticon($comment);
		$comContent = $bb->getContent();
	}
	



	?>
	<br /><a href="Part-36 (Facade Design Pattern).php">Part-36 (Facade Design Pattern)</a>
<?php include_once 'inc/footer.php';?>