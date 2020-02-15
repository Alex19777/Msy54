<?php 
	SetCookie("Password", "", time()-3600);
	header('Location: admin.php');
?>