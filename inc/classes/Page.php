<?php 

//if there is no constant defined named __CONFIG__ do not load this file
if(!defined('__CONFIG__')){
    exit("you don't have a config file.");
}

class Page {
    // force the user to be logged in or redirect
    static function forceLogin(){
        if(!isset($_SESSION['user_id'])) {
            //the user is not allowed here
            header("Location: /Log-Reg-Site/login.php"); exit;
        }
    }

    static function forceDashboard(){
        if(isset($_SESSION['user_id'])) {
            //the user is not allowed here
            header("Location: /Log-Reg-Site/dashboard.php"); exit;
        }
    }    
}


?>