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

	    $user_found = User::Find($email);

	    if($user_found){
	    	//user exists
	    	//we can also check to see if they are able to login
	    	$return['error'] = "You already have an account. <a href='/Login-Registration-Full-Site/login.php'>click here</a> to login.";
	    	//$return['error'] = "You already have an account. Please login.";
	  		$return['is_logged_in'] = false;
	    } else{
	    	//user does not exist, add them now

	    	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

	    	$addUser = $con->prepare("INSERT INTO users(email, password) VALUES(LOWER(:email), :password)");
	    	$addUser->bindParam(':email', $email, PDO::PARAM_STR);
	    	$addUser->bindParam(':password', $password, PDO::PARAM_STR);
	    	$addUser->execute();

	    	$user_id = $con->lastInsertId();

	    	$_SESSION['user_id'] = (int) $user_id;

	  		$return['redirect'] = '/Login-Registration-Full-Site/dashboard.php?message=welcome';
	  		$return['is_logged_in'] = true;
	    }

	    // $return['name'] = 'Huzaifa Syed';

	    echo json_encode($return, JSON_PRETTY_PRINT); exit;
    } else{
    	//die, kill script, redirect the user, do something regardless
    	exit('invalid URL');
    }

    ?>