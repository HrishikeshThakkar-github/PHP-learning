<?php
require_once 'Logger.php';

abstract class BankAccount
{
    use Logger;
    protected int $accountNumber;
    protected float $balance = 0;
    protected static int $totalAccounts = 0;

    public function __construct(int $accountNumber, float $initialBalance = 0)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
        self::$totalAccounts++;
        echo $this->log("---------------new account created-------------------");
    }

    public function deposit(float $amount)
    {
        $this->balance += $amount;
        echo $this->log("Deposit of $$amount successful." );
        Bank::incrementTransactions();
        return true;
    }

    abstract public function withdraw(float $amount);

    public function getBalance(): float
    {
        echo "for account number " . $this->accountNumber . " ";
        return $this->balance;
    }

    public static function getTotalAccounts(): int {
        return self::$totalAccounts;
    }
}
