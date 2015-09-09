<?php
	$to = 'RMSalimhanov@gmail.com@gmail.com';
	$subject= 'Получено сообщение с вебсайта';
	$message = 'Добрый день, меня зовут ' . $_GET['name'] . "\n" . "Мой email" . $_GET['email'] . "\n" . $_GET['message'];
	
	$headers = 'Content-Type: text/plain; charset=utf-8';
	$mailSent = mail($to, $subject, $message, $headers);
	
	if($mailSent) {?>
		<script>
			alert('Ваше сообщение отправлено');
		</script>
	<?}
	else {?>
		<script>
			alert('Ваше сообщение отправлено');
		</script>
	<?}?>
	
	<script>
		window.location = "../contacts.html";
	</script>