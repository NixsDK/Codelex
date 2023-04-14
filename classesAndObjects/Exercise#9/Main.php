<?php


require_once 'BankAccount.php';

$ben = new BankAccount("Benson");
echo $ben->show_user_name_and_balance() . "\n"; // Benson, $0.00

$ben->deposit(17.25);
echo $ben->show_user_name_and_balance() . "\n"; // Benson, $17.25

$ben->withdraw(5.50);
echo $ben->show_user_name_and_balance() . "\n"; // Benson, $11.75

$ben->withdraw(20.00);
echo $ben->show_user_name_and_balance() . "\n"; // Benson, $11.75

$ben->withdraw(11.75);
echo $ben->show_user_name_and_balance() . "\n"; // Benson, $0.00

$ben->withdraw(5.00);
echo $ben->show_user_name_and_balance() . "\n"; // Benson, -$5.00

$ben->deposit(10.00);
echo $ben->show_user_name_and_balance() . "\n"; // Benson, $5.00


