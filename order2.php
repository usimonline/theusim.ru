<?php

$body = "
		<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
		Контакты заказчика: ".$_POST['tel']." <br>
		</body>
</html>
		";

					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
					$headers .= 'From: '.$email. "\r\n" . 'Reply-To: wix.minsk@mail.ru';
					$subject = "Письмо от клиента с контактом ".$_POST['tel'];

					mail($email, $subject, $body, $headers);
					$emailSent = true;