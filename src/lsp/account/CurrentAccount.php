<?php

namespace app\lsp\account;

class CurrentAccount extends Account
{
    public function printBalance(): void
    {
        echo 'Saldo da conta (CLASSE FILHA): R$ ' . $this->balance;
    }
}