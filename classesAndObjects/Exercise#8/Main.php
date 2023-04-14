<?php

require_once 'SavingsAccount.php';

$account_balance = (float)readline("How much money is in the account? ");
$annual_interest_rate = (float)readline("Enter the annual interest rate: ");
$months = (int)readline("How long has the account been opened? ");

$savings_account = new SavingsAccount($account_balance);
$savings_account->set_annual_interest_rate($annual_interest_rate);

$total_deposits = 0;
$total_withdrawals = 0;
$total_interest = 0;

for ($month = 1; $month <= $months; $month++) {
    $deposit = (float)readline("Enter amount deposited for month $month: ");
    $savings_account->deposit($deposit);
    $total_deposits += $deposit;

    $withdrawal = (float)readline("Enter amount withdrawn for month $month: ");
    $savings_account->withdraw($withdrawal);
    $total_withdrawals += $withdrawal;

    $interest = $savings_account->add_monthly_interest();
    $total_interest += $interest;
}

$ending_balance = $savings_account->get_balance();

echo "Total deposited: $" . number_format($total_deposits, 2) . PHP_EOL;
echo "Total withdrawn: $" . number_format($total_withdrawals, 2) . PHP_EOL;
echo "Interest earned: $" . number_format($total_interest, 2) . PHP_EOL;
echo "Ending balance: $" . number_format($ending_balance, 2) . PHP_EOL;
