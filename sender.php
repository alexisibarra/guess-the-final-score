<?php
require_once dirname(__FILE__).'/vendor/swiftmailer/swiftmailer/lib/swift_required.php';

// Redirect website
$redirect_website = 'http://example.com/myOtherPage.php';

// Transport Info
$receiver_address = 'cambiar@gmail.com';
$receiver_name = 'Nombre del emisor';

$sender_address = 'cambiar@gmail.com';
$sender_name = 'Nombre del emisor';
$sender_password = 'password';
$server_dir = 'smtp.gmail.com';
$server_port  = 465;
$server_protocol  = 'ssl';

// Email info
$email_subject = "Guess the final score";
$email_body = '<h1>Alguien ha respondido la encuesta "Guess the final score", sus datos son:</h1>' .
      '<p><b>Home: </b>'. $_POST['home'] .'</p>'.
      '<p><b>Visitor: </b>'. $_POST['visitor'] .'</p>'.
      '<p><b>Marcador (Home/Visitor): </b>'. $_POST['home-marker'] . '/' . $_POST['visitor-marker'] .'</p>'.
      '<p><b>Name: </b>'. $_POST['name'] .'</p>'.
      '<p><b>Email: </b>'. $_POST['email'] .'</p>'.
      '<p><b>Marker: </b>'. $_POST['marker'] .'</p>';

$transporter = Swift_SmtpTransport::newInstance($server_dir, $server_port, $server_protocol)
  ->setUsername($sender_address)
  ->setPassword($sender_password);

$mailer = Swift_Mailer::newInstance($transporter);

$message = Swift_Message::newInstance($email_subject)
  ->setFrom(array($sender_address => $sender_name))
  ->setTo(array($receiver_address => $receiver_name))
  ->setBody($email_body)
;

$message->setContentType("text/html");

$result = $mailer->send($message);

echo $result;

if ($result > 0) {
  header("Location: " . $redirect_website);
  die();
}
