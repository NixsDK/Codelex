<?php

class Product
{
    private $name;
    private $price;
    private $amount;

    public function __construct($name, $startPrice, $amount)
    {
        $this->name = $name;
        $this->price = $startPrice;
        $this->amount = $amount;
    }

    public function printProduct()
    {
        echo "$this->name, price $this->price EUR, amount $this->amount units\n";
    }

    public function setPrice($newPrice)
    {
        $this->price = $newPrice;
    }

    public function setAmount($newAmount)
    {
        $this->amount = $newAmount;
    }
}

$mouse = new Product("Logitech mouse", 70.00, 14);
$iphone = new Product("iPhone 5s", 999.99, 3);
$projector = new Product("Epson EB-U05", 440.46, 1);

$mouse->printProduct();
$iphone->printProduct();
$projector->printProduct();

$mouse->setAmount(10);
$iphone->setPrice(899.99);

$mouse->printProduct();
$iphone->printProduct();
$projector->printProduct();
