<?php
class UrAPP {
private String $name;
private String $regNumber;
private String $address;
private String $regDate;

public function __construct($name, $regNumber, $address, $regDate) {
$this->name = $name;
$this->regNumber = $regNumber;
$this->address = $address;
$this->regDate = $regDate;
}

public function getName() {
return $this->name;
}

public function getRegNumber() {
return $this->regNumber;
}

public function getAddress() {
return $this->address;
}

public function getRegDate() {
return $this->regDate;
}
}
