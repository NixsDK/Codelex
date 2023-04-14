<?php


class Account
{
    private $name;
    private $balance;

    public function __construct($name, $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function withdrawal($amount)
    {
        $this->balance -= $amount;
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
    }

    public function balance()
    {
        return $this->balance;
    }

    public function __toString()
    {
        return $this->name . ": " . $this->balance . "\n";
    }
}
