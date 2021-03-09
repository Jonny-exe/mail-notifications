<?php
require "vendor/autoload.php";
require "mail_info.php";

$nginx_status = 'curl http://127.0.0.1/nginx_status';

$output = shell_exec($nginx_status);


$mail = new Nette\Mail\Message;
$mail->setFrom("RPI <" . $mail["from"] . ">")
    ->addTo($mail["to"])
    ->setSubject('Nginx status')
    ->setBody("This is your nginx status: " . $output);


$mailer = new Nette\Mail\SendmailMailer;
$mailer->send($mail);

print "Mail send";
