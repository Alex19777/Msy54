<?php

$page_name = "Контакты";

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

		<div class="contacts">
			<div class="foot">
				<p>Связаться с нами:</p>
					<br>
						<img src="images/house.png" alt="Adress" align="middle" /> <span><?=$res[3]["champText"];?></span>
					<br>
						<img src="images/phone.png" alt="Phone" align="middle" /> <span><?=$res[4]["champText"];?></span>
					<br>
						<img src="images/phone1.png" alt="Phone" align="middle" /> <span><?=$res[5]["champText"];?></span>
					<br>
						<img src="images/mail.png" alt="Mail" align="middle" /> <span><?=$res[6]["champText"];?></span>
					<br>
					<div class="contacts_order">
						<div class="button_order" id="showHideContent1">
							Написать нам
						</div>
					</div>
			</div>
		</div>

		<div class="order_mobile">
			<form action="mail_mobile.php" method="post">
				<p>Написать нам</p>
				<input type="text" name="text" placeholder="Имя..."><br>
				<input type="text" name="phone" placeholder="Телефон..."><br>
				<textarea name="comment" placeholder="Комментарий..."></textarea><br>
				<button type="submit" name="submit_order" class="sub_mobile">Отправить</button>
			</form>
		</div>
		<?php include_once "footer.php"; ?>
		</div>
</body>
</html>
