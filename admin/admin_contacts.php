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
	<form method="post" action="edit_contacts_text.php?id=4">
		<h2>Адрес</h2>
		<textarea name="text" cols="50" rows="5"><?=$res[3]["champText"];?></textarea>
		<br>
		<input type="submit" name="rep" value="Обновить" class="rep">
	</form>
	<br>
	<form method="post" action="edit_contacts_text.php?id=5">
		<h2>Мобильный телефон</h2>
		<textarea name="text" cols="50" rows="5"><?=$res[4]["champText"];?></textarea>
		<br>
		<input type="submit" name="rep" value="Обновить" class="rep">
	</form>
	<br>
	<form method="post" action="edit_contacts_text.php?id=6">
		<h2>Стационарный телефон</h2>
		<textarea name="text" cols="50" rows="5"><?=$res[5]["champText"];?></textarea>
		<br>
		<input type="submit" name="rep" value="Обновить" class="rep">
	</form>
	<br>
	<form method="post" action="edit_contacts_text.php?id=7">
		<h2>Почтовый ящик</h2>
		<textarea name="text" cols="50" rows="5"><?=$res[6]["champText"];?></textarea>
		<br>
		<input type="submit" name="rep" value="Обновить" class="rep">
	</form>
</body>
</html>
