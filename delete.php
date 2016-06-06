<?php 
	$db=new pdo("mysql:host=localhost;port=8889","root","root");
	$db->query("set names 'utf8'");
	$db->query("use todo_list");

	$db->prepare("delete from `todo` where id=:id")->execute($_GET);

	if(file_exists("images/".$_GET["id"])==true){
		unlink("images/".$_GET["id"]);
	}


	header("location:todo_list.php");

 ?>