<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Вход в панель администратора</title>
		<link rel="stylesheet" type="text/css" href="style_admin.css">
		<link rel="icon" href="../images/house266.png" type="image/x-icon">
	</head>
	<body>
		<div id="authorization">
			<form action="admin_auth.php" method="POST" name="form">
				<input type="text" name="login" placeholder="Логин..." required><br>
				<input type="password" name="pass" placeholder="Пароль..." required><br>
				<input type="submit" name="auth" value="Войти" class="sub">
			</form>
			<br>
			<a href="/">Перейти на сайт</a>
		</div>
	</body>
</html>