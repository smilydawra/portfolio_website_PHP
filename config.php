<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

define('CLASSES', __DIR__ . '/classes');

//define('ENV', 'DEVELOPMENT'); // development or production or testing
require __DIR__ . '/env.php';

require __DIR__ . '/vendor/autoload.php';

if(ENV === 'DEVELOPMENT') {
define('DB_DSN','mysql:host=localhost;dbname=smily_portfolio');
define('DB_USER', 'root');
define('DB_PASS', '');
}

if(ENV === 'PRODUCTION') {
	define('DB_DSN','mysql:host=localhost;dbname=capstone');
	define('DB_USER', 'web_user');
	define('DB_PASS', 'mypass');
}

session_start();


if(isset($_SESSION['errors'])) {
	$errors = $_SESSION['errors'];
	$_SESSION['errors'] = []; // clear old errors from session
} else {
	$errors = [];
}

//if there are post values, get them out so we can use them easily
if(isset($_SESSION['post'])) {
	$post = $_SESSION['post'];
	$_SESSION['post'] = []; // clear old post values from session
} else {
	$post = [];
}

if(!empty($_SESSION['flash'])){
	$flash = $_SESSION['flash'];
	$_SESSION['flash'] =[];
}else {
	$flash = [];
}

//

//define('DB_DSN','mysql:host=localhost;dbname=smily_portfolio');
//define('DB_USER', 'root');
//define('DB_PASS', '');

//connect to Mysql
$dbh = new PDO(DB_DSN, DB_USER, DB_PASS);

//dd($dbh);
//must set PDO to show errors, or it will fail silently
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
require CLASSES . '/Model.php';
Model::init($dbh);

require 'functions.php';

if(!empty($_GET['logout'])){
	unset($_SESSION['id']);
	session_regenerate_id();
	// $errors['logout'] = 'You are logged out now! Hope to see you again soon!';
	// $_SESSION['errors'] = $errors;
	$flash = array(
		'class' => 'success',
		'message' => 'You are logged out now! Hope to see you again soon!'
	);
	$_SESSION['flash'] = $flash;
	header('Location: login.php');
	die;
	// header('Location: ' . $_SERVER['HTTP_REFERER']);
	// die;
}
