<?php
if (isset($_POST['phone'])) {
	mail('Nina.Rechistova@ya.ru', 'Вас просят перезвонить с лендинга Домотопления', "Клиент оставил телефон: ({$_POST['phone']}).");
	header('location: /?popup=true');
	exit;
}

header('location: /');