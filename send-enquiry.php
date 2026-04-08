<?php
/**
 * AJAX/POST handler — sends enquiry to ENQUIRY_TO_EMAIL via SMTP
 */
declare(strict_types=1);

header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'message' => 'Method not allowed']);
    exit;
}

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name = trim((string) ($_POST['name'] ?? ''));
$phone = trim((string) ($_POST['phone'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$service = trim((string) ($_POST['service'] ?? ''));
$datetime = trim((string) ($_POST['datetime'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));
$form_type = trim((string) ($_POST['form_type'] ?? 'book'));
$subject_in = trim((string) ($_POST['subject'] ?? ''));

if ($name === '' || $phone === '') {
    http_response_code(400);
    echo json_encode(['ok' => false, 'message' => 'Name and phone are required.']);
    exit;
}

if ($form_type === 'contact') {
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(['ok' => false, 'message' => 'Valid email is required.']);
        exit;
    }
    if ($message === '') {
        http_response_code(400);
        echo json_encode(['ok' => false, 'message' => 'Message is required.']);
        exit;
    }
}

$safe_name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$safe_phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$safe_email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$safe_service = htmlspecialchars($service, ENT_QUOTES, 'UTF-8');
$safe_datetime = htmlspecialchars($datetime, ENT_QUOTES, 'UTF-8');
$safe_message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
$safe_subject = htmlspecialchars($subject_in, ENT_QUOTES, 'UTF-8');

if ($form_type === 'contact') {
    $subj = 'Contact Form: ' . ($subject_in !== '' ? $subject_in : 'Website enquiry');
    $body = "<h2>Contact form — " . SITE_NAME . "</h2>";
    $body .= "<p><strong>Name:</strong> {$safe_name}<br>";
    $body .= "<strong>Phone:</strong> {$safe_phone}<br>";
    $body .= "<strong>Email:</strong> {$safe_email}<br>";
    if ($safe_subject !== '') {
        $body .= "<strong>Subject:</strong> {$safe_subject}<br>";
    }
    $body .= "</p><p><strong>Message:</strong><br>" . nl2br($safe_message) . "</p>";
} else {
    $subj = 'Book Now — ' . SITE_NAME_SHORT;
    $body = "<h2>Booking enquiry — " . SITE_NAME . "</h2>";
    $body .= "<p><strong>Name:</strong> {$safe_name}<br>";
    $body .= "<strong>Phone:</strong> {$safe_phone}<br>";
    if ($safe_email !== '') {
        $body .= "<strong>Email:</strong> {$safe_email}<br>";
    }
    if ($safe_service !== '') {
        $body .= "<strong>Service / vehicle:</strong> {$safe_service}<br>";
    }
    if ($safe_datetime !== '') {
        $body .= "<strong>Preferred date & time:</strong> {$safe_datetime}<br>";
    }
    $body .= "</p>";
    if ($safe_message !== '') {
        $body .= "<p><strong>Message:</strong><br>" . nl2br($safe_message) . "</p>";
    }
}
$body .= "<hr><p><small>Sent from website form (" . htmlspecialchars($form_type, ENT_QUOTES, 'UTF-8') . ")</small></p>";

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = SMTP_HOST;
    $mail->SMTPAuth = true;
    $mail->Username = SMTP_USER;
    $mail->Password = SMTP_PASS;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = SMTP_PORT;
    $mail->CharSet = 'UTF-8';

    $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
    $mail->addAddress(ENQUIRY_TO_EMAIL);
    if ($email !== '' && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mail->addReplyTo($email, $name);
    }

    $mail->isHTML(true);
    $mail->Subject = $subj;
    $mail->Body = $body;
    $mail->AltBody = strip_tags(str_replace(['<br>', '<br/>', '<br />'], "\n", $body));

    $mail->send();
    echo json_encode(['ok' => true, 'message' => 'Thank you — we will contact you shortly.']);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'ok' => false,
        'message' => 'Could not send email. Please call us or try again later.',
    ]);
}
