<?php

namespace app\lsp\account;

class Account
{
    protected int $number;
    protected float $balance;

    public function __construct(int $number, float $balance)
    {
        $this->number = $number;
        $this->balance = $balance;
    }

    public function printBalance(): void
    {
        echo 'Saldo da conta (CLASSE PAI): R$ ' . $this->balance;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return Account
     */
    public function setNumber(int $number): Account
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @param float $balance
     * @return Account
     */
    public function setBalance(float $balance): Account
    {
        $this->balance = $balance;
        return $this;
    }
}