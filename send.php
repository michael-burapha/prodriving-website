<?php
require __DIR__ . '/phpmailer/Exception.php';
require __DIR__ . '/phpmailer/PHPMailer.php';
require __DIR__ . '/phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'method_not_allowed']);
    exit;
}

$navn    = trim(str_replace(["\r", "\n"], '', $_POST['navn'] ?? ''));
$telefon = trim(str_replace(["\r", "\n"], '', $_POST['telefon'] ?? ''));
$email   = trim(str_replace(["\r", "\n"], '', $_POST['email'] ?? ''));
$besked  = trim($_POST['besked'] ?? '');

if ($navn === '' || $telefon === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'invalid_input']);
    exit;
}

$config = require __DIR__ . '/mail-config.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = $config['smtp_host'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $config['smtp_user'];
    $mail->Password   = $config['smtp_pass'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = $config['smtp_port'];
    $mail->CharSet    = 'UTF-8';

    $mail->setFrom($config['smtp_user'], 'ProDriving.dk');
    $mail->addAddress($config['to_email'], $config['to_name']);
    $mail->addReplyTo($email, $navn);

    $mail->Subject = 'Ny besked via prodriving.dk fra ' . $navn;
    $mail->Body =
        "Navn: {$navn}\n" .
        "Telefon: {$telefon}\n" .
        "E-mail: {$email}\n\n" .
        "Besked:\n{$besked}";

    $mail->send();

    echo json_encode(['ok' => true]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'send_failed']);
}
