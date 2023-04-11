<?php
require_once('Account.php');

class BankAccount extends Account {
    private $fee;

    public function __construct($name, $balance, $fee) {
        parent::__construct($name, $balance);
        $this->fee = $fee;
    }

    public function applyFee() {
        $this->withdrawal($this->fee);
    }

    public function __toString() {
        return parent::__toString() . ', $' . number_format($this->fee, 2) . ' fee';
    }

    public function show_user_name_and_balance() {
        $balance_str = number_format(abs($this->balance()), 2, '.', '');
        $balance_str = ($this->balance() < 0) ? '-$' . $balance_str : '$' . $balance_str;
        return $this->name . ', ' . $balance_str;
    }
}
