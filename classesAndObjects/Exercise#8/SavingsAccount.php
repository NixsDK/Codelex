<?php

class SavingsAccount
{
    private float $balance;
    private float $annual_interest_rate;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
        $this->annual_interest_rate = 0;
    }

    public function set_annual_interest_rate(float $rate): void
    {
        $this->annual_interest_rate = $rate;
    }

    public function withdraw(float $amount): void
    {
        $this->balance -= $amount;
    }

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }

    public function add_monthly_interest(): float
    {
        $monthly_interest_rate = $this->annual_interest_rate / 12;
        $interest = $this->balance * $monthly_interest_rate;
        $this->balance += $interest;
        return $interest;
    }

    public function get_balance(): float
    {
        return $this->balance;
    }
}
