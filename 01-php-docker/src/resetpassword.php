<?php

require_once 'vendor/autoload.php';

use Apsl\Session\Session;
use Apsl\Http\Request;
use Apsl\Http\Appl;
use Apsl\Inf03\Webdev\Application;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Mailer;

$session = new Session();

$hash = sha1("Some hash");
$session->setValue('hash', $hash); 

$request = new Request();
$email = $request->getValue('email', ''); 

$link = "http://localhost/new-password?hash=".$hash;

$transport = Transport::fromDsn("smtp://apsl-dev@gmx.com:apslDEV2023@mail.gmx.com:587");
$mailer = new Mailer($transport);

$msg = new Email();
$msg->to($email);
$msg->from('mr.saiapina@gmail.com');
$msg->subject('Resetting your password');
$msg->text("Link for resetting your password: " . $link);
// $mailer->send($msg);

echo "<br>Link: <a href=\"".$link."\">".$link."</a>";
 
