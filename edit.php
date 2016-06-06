<?php 
	require("inc.php");
	$d=$db->query("select * from `todo` where `id`='$_GET[id]'")->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="todo.css">
	<title>To Do List</title>
	<style>
		img{
			width:400px;
		}

	</style>
</head>
<body>
	<div id="skin">
		<div id="title">
			<span>My Todo List</sapn>
		</div>
		<form action="update.php" method="post" enctype="multipart/form-data">
		<div id="date_day">
			<input type="hidden" name="id" value="<?php echo $d["id"]; ?>">
			<span>日期：</span><input id="date" type="date" name="date" value="<?php echo $d["date"]; ?>">	
			<span>時間：</span><input id="time" type="time" name="time" value="<?php echo $d["time"]; ?>">  
		</div>

		<div id="text">
			<textarea id="topic" name="topic"><?php echo $d["topic"]; ?></textarea><br>
			<textarea id="todo_text" name="text"><?php echo $d["text"]; ?></textarea><br>			
			照片:<input id="file" type="file" name="image"><br>
		</div>
		<div id="summit">
			<input class="button1" type="submit" value="新增" onclick="textSubmit()">
		</div>
		<div style="clear:both;"></div>
		
		</form>
		<?php if(file_exists("images/".$value["id"])==true){ ?>
			<img src="images/<?php echo $d["id"];?>?<?php echo time();?>">
		<?php } ?>

	</div>
	
</body>
</html>