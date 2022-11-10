<?php

require_once 'exercise8.php';

$startB = new SavingAccount(10000);
$accountBalance = (int) readline("How much money is in the account?: ");
$startB->addMoney($accountBalance);
$anualInterestRate = (int) readline("Enter the annual interest rate: ");
$accountUpTime = (int) readline("How long has the account been opened? ");
$depositMonthly = 0;
$withdrawnMonthly = 0;
$monthlyInterest = 0;
for ($i = 1; $i <= $accountUpTime; $i++){
    $depositMonthly += (int) readline("Enter amount deposited for month: {$i}: ") ;
    $withdrawnMonthly += (int) readline("Enter amount withdrawn for month: {$i}: ") ;
}
echo "Total deposited: {$depositMonthly}" . PHP_EOL;
echo "Total withdrawn: {$withdrawnMonthly}" . PHP_EOL;
$avargeOfDeposit = $depositMonthly - $withdrawnMonthly;
$startB->addMoney($avargeOfDeposit);
$monthlyInterest += $startB->monthlyInterest($anualInterestRate);
echo "Interest earned: " . $monthlyInterest . PHP_EOL;
$startB->addMoney($monthlyInterest);
echo "Ending balance: {$startB->getBalance()}";


