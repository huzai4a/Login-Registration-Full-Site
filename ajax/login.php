<?php
    //allow the config
    define('__CONFIG__', true);
    //require the config
    require_once "../inc/config.php";


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
	    //always return JSON format
	    //header('Content-Type: application/json');

	    $return = [];

	    $email = Filter::String( $_POST['email'] );
	    $password = $_POST['password'];

	    $user_found = User::Find($email, true);

	    if($user_found){
	    	//user exists, try and sign them in
	    	$user_id = (int) $user_found['user_id'];
	    	$hash = $user_found['password']; 

	    	if(password_verify($password, $hash)){
	    		//user is signed in
	    		$return['redirect'] = '/Log-Reg-Site/dashboard.php';

	    		$_SESSION['user_id'] = $user_id;
	    	} else {
	    		//invalid user email/password combo
	    		$return['error'] = "invalid email or password";
	    	}


	    } else{
	    	//they need to create a new account
	    	$return['error'] = "You do not have an account. Please <a href='/Log-Reg-Site/register.php'>click here</a> to create one.";
	    }

	    $return['name'] = 'Huzaifa Syed';

	    echo json_encode($return, JSON_PRETTY_PRINT); exit;
    } else{
    	//die, kill script, redirect the user, do something regardless
    	exit('invalid URL');
    }

    ?>