<?php

header('Content-type: application/json');
$success = false;

if (isset($_POST['phone'])) {
	mail('info@hotklimat.ru', 'Вас просят перезвонить с лендинга Домотопления', "Клиент оставил телефон: {$_POST['phone']}.");
	$success = true;
}

echo json_encode(array('success' => $success));