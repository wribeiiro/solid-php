<?php

use app\srp\wrong\EmailSender;
use app\srp\wrong\BirthdayLayout;

require_once './vendor/autoload.php';

$emailSender = new EmailSender(new BirthdayLayout());
$emailSender->sendMails();