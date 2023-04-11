<?php
class Account {
private $balance;
protected $name;

public function __construct($name, $balance) {
$this->name = $name;
$this->balance = $balance;
}

public function deposit($amount) {
$this->balance += $amount;
}

public function withdrawal($amount) {
$this->balance -= $amount;
}

public function balance() {
return $this->balance;
}

public function __toString() {
return $this->name . ', $' . number_format($this->balance, 2);
}
}
