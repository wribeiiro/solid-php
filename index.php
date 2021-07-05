<?php

use app\srp\right\EmailSender;
use app\srp\right\BirthdayLayout;
use app\srp\right\parser\ClientXML;
use app\srp\right\parser\ClientJSON;

require_once './vendor/autoload.php';

$emailSender = new EmailSender(new BirthdayLayout(), new ClientJSON());
$emailSender->sendMails();