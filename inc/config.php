<?php  

	//if there is no constant defined named __CONFIG__ do not load this file
	if(!defined('__CONFIG__')){
		exit("you don't have a config file.");
	}

	//sessions are always turned on
	if(!isset($_SESSION)){
		session_start();
	}

	// Our config is below
	//Allow errors
	error_reporting(-1);
	ini_set('display_errors', 'On');

	//include the db.php file
	include_once "classes/DB.php";
	include_once "classes/Filter.php";
	include_once "classes/Page.php";
	include_once "classes/User.php";

	$con = DB::getConnection();

?>