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
	<form method="post" action="edit_prices_text.php?id=3">
		<textarea id="editor1" name="text" cols="100" rows="20"><?=$res[2]["champText"];?></textarea>
			<script type="text/javascript">
				CKEDITOR.replace('editor1');
			</script>
		<br>
		<input type="submit" name="rep" value="Обновить" class="rep">
	</form>
</body>
</html>
