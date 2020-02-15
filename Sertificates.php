<?php
	include_once "db.php";

	$db = new db();

	$res = $db -> loadArrayData("SELECT * FROM Home");

	$page_name = "Сертификаты";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name='yandex-verification' content='5479b0d737374518' />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>MSY-54</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="images/house266.png" type="image/x-icon">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
</head>
<body>
	<div id="container">
		<?php include_once "header.php"; ?>
		<div class="content">
			
			<div class="about-text">
				<?=$res[0]["champText"];?>
				<?=$res[1]["champText"];?>
			</div>
		</div>
		<?php include_once "footer.php"; ?>
		</div>
</body>
</html>