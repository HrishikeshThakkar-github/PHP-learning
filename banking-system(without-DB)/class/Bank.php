<?php
require_once 'Logger.php';

class Bank {
    private static int $totalTransactions = 0;

    public static function incrementTransactions() {
        self::$totalTransactions++;
    }

    public static function getTotalAccounts() {
        return BankAccount::getTotalAccounts();
    }

    public static function getTotalTransactions() {
        return self::$totalTransactions;
    }
}
