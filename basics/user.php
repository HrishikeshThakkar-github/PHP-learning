<?php
//user

use Basics\transaction;

include "transaction.php";
class user
{
    // public function __construct()
    // {
    //     $this->user = new User();
    // }
    public $name;
    public $transactions = [];
    
    public function __construct($name){
        $this->name = $name;
    }

    public function add_transaction($transactions){
        $this->transactions[] = $transactions;

    }
    public function get_transactions(){
        return $this->transactions;
    }

    public function Largest_transaction():transaction  {

        $largest_transaction=
        if($transaction['amount']>$largest_t[$user_t]['amount'] ){
            $largest_t[$user_t] = $transaction;
        }
    }
}


?>