<?php


ini_set('session.use_only_cookies',1);

ini_set('session.use_strict_mode',1);


session_set_cookie_params([
    'lifetime'=>1800,
    'domain' =>'localhost',
    'path'=>'/',
    'secure'=>true,
    'httponly'=>true
]);

session_start();

if(isset($_SESSION["user_id"])){
    if(!isset($_SESSION['last_regenration'])){
        session_regenerate_id_loggedin(true);

    }else{
        $interval=60*30;
        if(time()-$_SESSION['last_regenration']>=$interval){
            session_regenerate_id_loggedin (true);

        }
    }
}else{
    if(!isset($_SESSION['last_regenration'])){
        session_regenerate_id(true);

    }else{
        $interval=60*30;
        if(time()-$_SESSION['last_regenration']>=$interval){
            session_regenerate_id(true);
            
        }
    }
}

//to secure the session from a hacker we can regenarte the id after a certain interval



function regenerate_session_id(){
    session_regenerate_id(true);

    $userId=$_SESSION["user_id"];
    $newSessionId= session_create_id();
    $sessionId= $newSessionId."_".$userId;
    session_id($sessionId);


    $_SESSION["last_regeneration"]=time();
}

function session_regenerate_id_loggedin (){
    session_regenerate_id(true);
    $_SESSION["last_regeneration"]=time();
}
?>
