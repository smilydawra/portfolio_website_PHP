<?php

/*
//////////////////////////////////////
//       PHP Capstone Admin        //
//     update_project.php file     //
//////////////////////////////////////
*/

require __DIR__ . '/../../config.php';
// Make sure it's a POST request, or die with a message
if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Unsupported request method.');
}



require CLASSES . '/ProjectModel.php';

$v = new Capstone\Validator();

$v->requiredField('project_number', $_POST['project_number']);
$v->requiredField('title', $_POST['title']);
$v->requiredField('summary', $_POST['summary']);
$v->requiredField('details', $_POST['details']);
$v->requiredField('image', $_POST['image']);
$v->requiredField('image_desc', $_POST['image_desc']);
$v->requiredField('type', $_POST['type']);
$v->requiredField('link', $_POST['link']);
//$v->requiredField('is_commented');
$v->requiredField('course_id', $_POST['course_id']);

$v->numberField('project_number', $_POST['project_number']);

if(!isset($_POST['is_commented'])){
	$_POST['is_commented'] = 0;
}

$errors = $v->errors();

if(count($errors) > 0) {
	$_SESSION['errors'] = $errors;
	$_SESSION['post'] = $_POST;
	header("Location: edit_project.php");
	die();
}


$project = new ProjectModel();

$affected_rows = $project->updateProject($_POST);

if($affected_rows > 0) {
	// $_SESSION['id'] = $_POST['id'];
	$flash = array(
		'class' => 'success',
		'message' => 'Thank you, you have successfully updated a record!'
	);
	$_SESSION['flash'] = $flash;

} else {
	$flash = array(
		'class' => 'error',
		'message' => 'There was a problem updating a record.'
	);
	$_SESSION['flash'] = $flash;
}

header('Location: projects.php');
die;
