<?php 
	include_once "check_auth.php";
	include_once "../db.php";

	$db = new db();

	$res = $db -> loadArrayData("SELECT * FROM Home");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Панель администратора</title>
	<link rel="stylesheet" type="text/css" href="style_admin.css">
	<script type="text/javascript" src="scripts/ckeditor/ckeditor.js"></script>
</head>
<body>
	<?php include_once "header.php"; ?>
	<form method="post" action="edit_home_text.php?id=1">
		<textarea id="editor1" name="text" cols="100" rows="20"><?=$res[0]["champText"];?></textarea>	
		<script type="text/javascript">
				CKEDITOR.replace('editor1');
		</script>
		<br>
		<input type="submit" name="rep" value="Обновить" class="rep">
	</form>
	<br>
	<form method="post" action="edit_home_text.php?id=2">
		<textarea id="editor2" name="text" cols="100" rows="20"><?=$res[1]["champText"];?></textarea>	
		<script type="text/javascript">
				CKEDITOR.replace('editor2');
		</script>
		<br>
		<input type="submit" name="rep" value="Обновить" class="rep">
	</form>
	<br>
	<img src="../images/apache.jpg">
	<br>
	<a href="update_images/header_image.php">
		<button class="rep">Изменить</button>
	</a>
	<br>
	<br>
	<img src="../images/logo.png">
	<br>
	<a href="update_images/logo_image.php">
		<button class="rep">Изменить</button>
	</a>
	<br>
	<br>
	<img src="../images/kottedzh.jpg">
	<br>
	<a href="update_images/content_image.php">
		<button class="rep">Изменить</button>
	</a>
	<br>
	<br>
</html>