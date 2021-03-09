<?php
require "vendor/autoload.php";
require "mail_info.php";

$from = $mail['from'];
$to = $mail['to'];
$content = $mail['content'];
$subject = $mail['subject'];

$mail = new Nette\Mail\Message;
$mail->setFrom($from)
    ->addTo($to)
    ->setSubject($subject)
    ->setHtmlBody($content);


$mailer = new Nette\Mail\SendmailMailer;
$mailer->send($mail);

print "Mail send";
