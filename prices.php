<?php

$page_name = "Цены";

include_once "db.php";

$db = new db();

$res = $db -> loadArrayData("SELECT * FROM Home");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>MSY-54</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="images/house266.png" type="image/x-icon">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/order.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
</head>

<div class="shadow_block">
	<div class="order_block">
		<div class="title_modal">Заполните форму</div>
		<div class="order_form">
			<form action="mail.php" method="post">
				<input type="text" name="text" placeholder="Имя..." required><br>
				<input type="text" name="phone" placeholder="Телефон..." required><br>
				<textarea name="comment" placeholder="Комментарий..."></textarea><br>
				<input type="submit" name="submit_order" value="Отправить" class="sub">
			</form>
		</div>
	</div>
	<div id="content"></div>
</div>

<body>
	<div id="container">
		<?php include_once "header.php"; ?>

		<div class="prices">
			<p class="text_price">
        <?=$res[2]["champText"];?> <a href="price.xls" title="Скачать прайс компании в формате MS Excel" class="link_price">price.xls</a> 
			</p>
		</div>

		<?php include_once "footer.php"; ?>
		</div>
</body>
</html>
