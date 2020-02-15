<?php 
	
	if (isset($_POST['auth'])) {
		$login = $_POST['login'];
		$pass = $_POST['pass'];

		if ($login == 'administrator' && $pass == 'administrator') {
			setcookie ("Password", md5($pass),time()+3600*24);
			header('Location: admin_home.php');
		}
		else {
			die("Что-то пошло не так =( <br> Вернитесь и проверьте правильность введённых данных. <br> <a href='admin.php'>Назад</a>");
		}
	}

?>