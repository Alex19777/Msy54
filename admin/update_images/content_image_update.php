<?php
	
	$file_path = "../../images/";
	$file_name='kottedzh.jpg';
	move_uploaded_file($_FILES["Photo"]["tmp_name"], $file_path.$file_name);
	header('Location: ../admin_home.php');

?>