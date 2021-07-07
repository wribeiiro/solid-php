<?php

use app\lsp\account\CurrentAccount;

require_once './vendor/autoload.php';

$account = new CurrentAccount(20, 4656);
$account->printBalance();