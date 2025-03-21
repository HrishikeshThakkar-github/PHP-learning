<?php


require_once 'class/Logger.php';


spl_autoload_register(function ($name) {
    $file =  'class/' . $name . '.php'; 
    if (file_exists($file)) {
        require_once $file;
    } else {
        die("Error: Class file '$file' not found.\n");
    }
});


$savings = new SavingsAccount(101, 500);
echo "Savings Account Balance: $" . $savings->getBalance() . "\n";
$savings->deposit(200);
echo "Savings Account Balance: $" . $savings->getBalance() . "\n";
echo "Total Transactions: " . Bank::getTotalTransactions() . "\n";
$savings->withdraw(600);
echo "Savings Account Balance: $" . $savings->getBalance() . "\n";
 $savings->withdraw(400); 
 echo "Savings Account Balance: $" . $savings->getBalance() . "\n";
 echo "Total Transactions: " . Bank::getTotalTransactions() . "\n";
echo "Total Accounts: " . Bank::getTotalAccounts() . "\n";

$current = new CurrentAccount(102, 600);
echo "current Account Balance: $" . $current->getBalance() . "\n";
$savings->deposit(400);
echo "current Account Balance: $" . $current->getBalance() . "\n";
echo "Total Transactions: " . Bank::getTotalTransactions() . "\n";
$savings->withdraw(1000);
echo "current Account Balance: $" . $current->getBalance() . "\n";
 $savings->withdraw(400); 
 echo "current Account Balance: $" . $current->getBalance() . "\n";
 echo "Total Transactions: " . Bank::getTotalTransactions() . "\n";
echo "Total Accounts: " . Bank::getTotalAccounts() . "\n";


$savings = new SavingsAccount(103, 800);
echo "Savings Account Balance: $" . $savings->getBalance() . "\n";
$savings->withdraw(600);
echo "Savings Account Balance: $" . $savings->getBalance() . "\n";
echo "Total Transactions: " . Bank::getTotalTransactions() . "\n";
$savings->deposit(200);
echo "Savings Account Balance: $" . $savings->getBalance() . "\n";
echo "Total Transactions: " . Bank::getTotalTransactions() . "\n";
$savings->withdraw(600);
 echo "Savings Account Balance: $" . $savings->getBalance() . "\n";
 echo "Total Transactions: " . Bank::getTotalTransactions() . "\n";
echo "Total Accounts: " . Bank::getTotalAccounts() . "\n";

