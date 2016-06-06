<?php 
	require("inc.php");

	$db->prepare("update `todo` set `date`=:date,`time`=:time,`topic`=:topic,`text`=:text
		where `id`=:id")->execute($_POST);
	

	 copy($_FILES["image"]["tmp_name"],"images/".$_POST["id"]);


	header("location:todo_list.php");
 ?>