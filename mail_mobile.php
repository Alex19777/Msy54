<?php
header("Content-Type: text/html; charset=utf-8");

$text = $_POST['text'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];

$REMOTE_ADDR = $_POST['REMOTE_ADDR'];

if (isset ($text))
{
$text = substr($text,0,20); //Не может быть более 20 символов
if (empty($text))
{
echo "<center><b>Не указано имя!!!<p>";
echo "<a href='contacts.php'>Вернуться и правильно заполнить форму.</a>";
exit;
}
}
else
{
$text = "не указано";
}

if (isset ($phone))
{
$phone = substr($phone,0,50); //Не может быть более 20 символов
if (empty($phone))
{
echo "<center><b>Не указан телефон!!!<p>";
echo "<a href='contacts.php'>Вернуться и правильно заполнить форму.</a>";
exit;
}
}
else
{
$phone = "не указано";
}

if (isset ($comment))
{
$comment = substr($comment,0,1000); //Не может быть более 1000 символов
if (empty($comment))
{
echo "<center><b>Сообщение не написано!!!<p>";
echo "<a href='contacts.php'>Вернуться и правильно заполнить форму.</a>";
exit;
}
}
else
{
$comment = "не указано";
}

$i = "не указано";
if ($text == $i AND $phone == $i AND $comment == $i)
{
echo "Внимание! Произошла ошибка! Вы не заполнили поля сообщения!";
exit;
}

$reg_text = "/^\D*$/";
$reg_phone = "/^\+[0-9]{10,17}$/";

if(preg_match($reg_text, $_POST["text"]) && preg_match($reg_phone, $_POST["phone"])){
$to = "msy-54@mail.ru";
$subject = "Сообщение с сайта http://msy54.by/";
$message = "Имя пославшего письмо: $text .\nТелефон: $phone\nЗаказ: $comment .\nIP-адрес: $_SERVER[REMOTE_ADDR]";
mail ($to,$subject,$message,"Content-type:text/plain; charset = UTF-8") or print "Не могу отправить письмо!!!";
echo "<center><b>Спасибо за отправку Вашего сообщения. <br><br> Для нас это очень важно! <br><br> В ближайшее время мы обязательно свяжемся с Вами!<br/><a href='index.php'>Вернуться на главную</a>";
exit;
} else{
	if (!preg_match($reg_text, $_POST["text"] && !preg_match($reg_phone, $_POST["phone"]))) {
		echo "Ошибка заполнения! Не корректные данные!";
	}
}
?>
