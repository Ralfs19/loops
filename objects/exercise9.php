<?php

class BankAccount
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {

        $this->name = $name;
        $this->balance = $balance;
    }
    public function show_user_name_and_balance(): string
    {

        if ($this->balance < 0) {
            $balance = $this->balance = - $this->balance;
            return "{$this->name}," . ' $'. number_format($balance, 2);
        }
        return "{$this->name}, " . "$" . number_format($this->balance, 2);
    }
}

$ben = new BankAccount("Benson", 17.50);
echo $ben->show_user_name_and_balance();