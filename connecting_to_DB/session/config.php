<?php

ini_set('session.use_only_cookies',1);

ini_set('session.use_strict_mode',1);


//now we will set dome parameters for cookies so that it remains secure

session_set_cookie_params([
    'lifetime'=>1800,
    'domain' =>'localhost',
    'path'=>'/',
    'secure'=>true,
    'httponly'=>true
]);

session_start();

session_regenerate_id(true);

//to secure the session from a hacker we can regenarte the id after a certain interval

if(!isset($_SESSION['last_regenration'])){
    session_regenerate_id(true);
    $_SESSION['last_regenration']=time();
}else{
    $interval=60*30;
    if(time()-$_SESSION['last_regenration']>=$interval){
        session_regenerate_id(true);
        $_SESSION['last_regenration']=time();
    }
}

?>