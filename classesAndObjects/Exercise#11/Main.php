<?php


require_once 'Account.php';

class Main
{
    public static function run()
    {
        // creating and depositing to an account
        $account = new Account("My account", 100.0);
        $account->deposit(20.0);
        echo $account;

        // transferring money between accounts
        function transfer(Account $from, Account $to, int $howMuch)
        {
            $from->withdrawal($howMuch);
            $to->deposit($howMuch);
        }

        // creating accounts
        $accountA = new Account("A", 100.0);
        $accountB = new Account("B", 0.0);
        $accountC = new Account("C", 0.0);

        // transferring money
        transfer($accountA, $accountB, 50.0);
        transfer($accountB, $accountC, 25.0);

        // printing account information
        echo $accountA;
        echo $accountB;
        echo $accountC;
    }
}

Main::run();
