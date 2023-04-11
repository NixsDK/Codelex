<?php
class EnergyDrink {
private $name;
private $sugarContent;

public function __construct($name, $sugarContent) {
$this->name = $name;
$this->sugarContent = $sugarContent;
}

public function getName() {
return $this->name;
}

public function getSugarContent() {
return $this->sugarContent;
}
}

class EnergyDrinkInventory {
private $inventory;

public function __construct() {
$this->inventory = array();
}

public function addDrink(EnergyDrink $drink, $quantity) {
if (array_key_exists($drink->getName(), $this->inventory)) {
$this->inventory[$drink->getName()] += $quantity;
} else {
$this->inventory[$drink->getName()] = $quantity;
}
}

public function getQuantity(EnergyDrink $drink) {
if (array_key_exists($drink->getName(), $this->inventory)) {
return $this->inventory[$drink->getName()];
} else {
return 0;
}
}

public function removeDrink(EnergyDrink $drink, $quantity) {
if (array_key_exists($drink->getName(), $this->inventory)) {
if ($this->inventory[$drink->getName()] >= $quantity) {
$this->inventory[$drink->getName()] -= $quantity;
return true;
}
}
return false;
}

public function __toString() {
$output = "";
foreach ($this->inventory as $name => $quantity) {
$output .= $name . ': ' . $quantity . PHP_EOL;
}
return $output;
}
}
