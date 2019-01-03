<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Статус отправки письма:</title>
</head>
<body>
	<?php
		if (isset($_POST['imya'])) {$name = $_POST['imya']; echo $name."";}
		if (isset($_POST['email'])) {$email = $_POST['email']; echo $email."";}
		if (isset($_POST['theme'])) {$tema = $_POST['theme']; echo $tema."";}
		if (isset($_POST['message'])) {$text = $_POST['message']; echo $text."";}


		$to = "armx55@mail.ru"; 
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$headers .= "From: \"".$name."\" <".$email.">\r\n";
		$subject = $tema;
		$message = "<b>Имя отрправителя:</b> $name <br>
					<b>E-mail отрправителя:</b> $email <br>
					<b>Сообщение:</b> $text";

		$send = mail ($to, $subject, $message, $headers);
		 
		 if ($send == 'true')
		 {
			 echo "Гуд! :)";
		 }
		 else
		 {
			 echo "Упс...";
		 }
	?>
</body>
</html>