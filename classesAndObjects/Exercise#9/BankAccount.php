<?php


class BankAccount
{
    public $name;
    private $balance = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw($amount)
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }

    public function show_user_name_and_balance()
    {
        $formatted_balance = sprintf('$%.2f', abs($this->balance));
        if ($this->balance < 0) {
            $formatted_balance = '-' . $formatted_balance;
        }
        return "$this->name, $formatted_balance";
    }
}


