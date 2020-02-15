<?php

	$id = $_GET["id"];
	include_once "../db.php";

	$text = $_POST["text"];

	$db = new db();

	$db -> sqlQuery("UPDATE Home SET champText = '{$text}' WHERE id = {$id}");

	header('Location: admin_prices.php');

?>
