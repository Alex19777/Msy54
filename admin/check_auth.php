<?php 

	if ($_COOKIE['Password'] != md5('administrator')) {
		header('Location: admin.php');
	}

?>