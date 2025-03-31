<?php
$transactions = [
    ['id' => 1, 'user' => 'Alice', 'amount' => 100, 'type' => 'deposit'],
    ['id' => 2, 'user' => 'Bob', 'amount' => 50, 'type' => 'withdrawal'],
    ['id' => 3, 'user' => 'Alice', 'amount' => 200, 'type' => 'deposit'],
    ['id' => 4, 'user' => 'Bob', 'amount' => 30, 'type' => 'deposit'],
];

$user_u=array_unique(array_column($transactions,'user'));


function print_unique_user($user_u){
    foreach ($user_u as $x){print_r("$x \n") ; }
}
print_unique_user($user_u);

foreach ($transactions as $transaction) {
    $user_t = $transaction['user'];
    //print_r($user_t) ;
    $amount_t = $transaction['amount'];
    $type_t = $transaction['type'];
    if(!isset($balance[$user_t])){
        $balance[$user_t] =['deposit'=>0, 'withdrawal'=>0, 'balance'=>0,];
    }

    //print_r($balance[$user_t]) ;


   // print_r($balance[$user_t]) ;
    if($type_t=='withdrawal'){
        $balance[$user_t]['withdrawal']+=$amount_t;
        $balance[$user_t]['balance']-=$amount_t;
    }elseif($type_t== 'deposit'){
        $balance[$user_t]['deposit']+=$amount_t;
        $balance[$user_t]['balance']+=$amount_t;
    }
}

print_r($balance) ;


$largest_t=[];
foreach ($transactions as $transaction) {
    $user_t = $transaction['user'];
    //if (!isset($largest_t[$user_t]) || $transaction['amount']>$largest_t[$user_t]['amount']) ? ($largest_t[$user_t] = $transaction) : null;  not applicable in this scenario
    if(!isset($largest_t[$user_t]) || $transaction['amount']>$largest_t[$user_t]['amount'] ){
        $largest_t[$user_t] = $transaction;
    }
}

print_r($largest_t) ;
?>