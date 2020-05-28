<?php

/*
Handle register user form

*/
// Make sure it's a POST request, or die with a message
if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Unsupported request method.');
}

// load site configuration file
require __DIR__ . '/../config.php';

// loading class Validator
//require __DIR__ . '/../classes/Validator.php';


//created a new object
$v = new Capstone\Validator();


// valitions for required fields
$v->requiredField('first_name',$_POST['first_name']);
$v->requiredField('last_name',$_POST['last_name']);
$v->requiredField('email',$_POST['email']);
$v->requiredField('street_address',$_POST['street_address']);
$v->requiredField('city',$_POST['city']);
$v->requiredField('province',$_POST['province']);
$v->requiredField('postal',$_POST['postal']);
$v->requiredField('country',$_POST['country']);
$v->requiredField('gender',$_POST['gender']);
$v->requiredField('phone',$_POST['phone']);
$v->requiredField('password',$_POST['password']);
$v->requiredField('confirm_password',$_POST['confirm_password']);

//validation for email field
$v->emailValidate('email', $_POST['email']);

//validation for phone field
$v->phoneValidate('phone', $_POST['phone']);

$v->postalValidate('postal', $_POST['postal']);

$v->passwordValidate('password', $_POST['password']);
$v->confirmField('confirm_password', $_POST['confirm_password'], 'password', $_POST['password']);

$v->maxLength('first_name', $_POST['first_name']);
$v->maxLength('last_name', $_POST['last_name']);
$v->maxLength('street_address', $_POST['street_address']);
$v->maxLength('city', $_POST['city']);
$v->maxLength('province', $_POST['province']);
$v->maxLength('country', $_POST['country']);
$v->maxLength('email', $_POST['email']);
$v->maxLength('password', $_POST['password']);

$v->stringValidate('first_name', $_POST['first_name']);
$v->stringValidate('last_name', $_POST['last_name']);
$v->stringValidate('city', $_POST['city']);
$v->stringValidate('province', $_POST['province']);
$v->stringValidate('country', $_POST['country']);

$errors = $v->errors();



// check to see if there are any errors and redirect them to register page
if(count($errors) > 0) {
	$_SESSION['errors'] = $errors;
	$_SESSION['post'] = $_POST;
	header("Location: register.php");
	die;
}

		$pass_encrip = password_hash($_POST['password'], PASSWORD_DEFAULT);

		// create $query
		$query = 'INSERT INTO user
					(first_name,last_name,street_address,city,postal,province,
						country,phone,email,gender,password)
					VALUES
					(:first_name, :last_name, :street_address, :city, :postal,
						 :province, :country, :phone, :email, :gender, :password)';

		//prepare query
		$stmt = $dbh->prepare($query);

		//binding the parameters
		$params = array(
			':first_name' => $_POST['first_name'],
			':last_name' => $_POST['last_name'],
			':street_address' => $_POST['street_address'],
			':city' => $_POST['city'],
			':postal' => $_POST['postal'],
			':province' => $_POST['province'],
			':country' => $_POST['country'],
			':phone' => $_POST['phone'],
			':email' => $_POST['email'],
			':gender' => $_POST['gender'],
			':password' => $pass_encrip
		);

		//execute the query
		$stmt->execute($params);


		//die('Record inserted');

		//redirect to display user information
		$id = $dbh->lastInsertID();

		dd($id);

		if($id > 0) {
			$_SESSION['id'] = $id;
			$flash = array(
				'class' => 'success',
				'message' => 'Thank you, you are successfully registered!'
			);
			$_SESSION['flash'] = $flash;
			header('Location: user_success.php');
			die;
		} else {
			die('There was a problem inserting a record.');
		}
