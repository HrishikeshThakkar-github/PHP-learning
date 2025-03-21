<?php

require_once 'BankAccount.php';
require_once 'Logger.php';

class SavingsAccount extends BankAccount {
    use Logger;

    public function withdraw(float $amount) {
        
        if ($amount > $this->balance) {
            echo $this->log("Withdrawal of $$amount failed: Insufficient balance.");
            return false;
        }
        $this->balance -= $amount;
        Bank::incrementTransactions();
        echo $this->log("Withdrawal of $$amount successful. New balance: $" . $this->balance);
        return true;
    }
}
