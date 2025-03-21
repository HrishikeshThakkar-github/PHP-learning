<?php

require_once 'BankAccount.php';
require_once 'Logger.php';

class CurrentAccount extends BankAccount {
    use Logger;

    private float $overdraftLimit = 500;

    public function withdraw(float $amount) {

        if ($amount > ($this->balance + $this->overdraftLimit)) {
            echo $this->log("Withdrawal of $$amount failed: Overdraft limit exceeded.");
            return false;
        }
        $this->balance -= $amount;
        Bank::incrementTransactions();
        echo $this->log("Withdrawal of $$amount successful");
        return true;
    }
}
