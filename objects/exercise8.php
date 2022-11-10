<?php

class SavingAccount
{
    private int $startBalance;

    public function __construct(int $startBalance)
    {
        $this->startBalance = $startBalance;
    }
    public function subtractWithdrawal($subtractAmount)
    {
        $this->startBalance -= $subtractAmount;
    }
    public function addMoney($depositAmount)
    {
        $this->startBalance += $depositAmount;
    }
    public function monthlyInterest($interestRate)
    {
         return $this->startBalance += ($interestRate / 12) * $this->startBalance;
    }
    public function getBalance(): int
    {
        return $this->startBalance;
    }
}