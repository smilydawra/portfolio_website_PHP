<?php

/*
//////////////////////////////////////
//       PHP Capstone Admin        //
//    addProject_handle.php file   //
//////////////////////////////////////
*/
if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Unsupported request method.');
}

require __DIR__ . '/../../config.php';
require CLASSES . '/CourseModel.php';
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
//$v->requiredField('is_commented', $_POST['is_commented']);
$v->requiredField('course_id', $_POST['course_id']);

$v->numberField('project_number', $_POST['project_number']);

$errors = $v->errors();

if(count($errors) > 0) {
	$_SESSION['errors'] = $errors;
	$_SESSION['post'] = $_POST;
	header("Location: add_project.php");
	die();
}


$project = new ProjectModel();

$project->addProject();

$id = $dbh->lastInsertID();

dd($id);

if($id > 0) {
	$_SESSION['id'] = $id;
	$flash = array(
		'class' => 'success',
		'message' => 'Thank you, you have successfully added a new project!'
	);
	$_SESSION['flash'] = $flash;
	header('Location: projects.php');
	die;
} else {
	die('There was a problem adding a record.');
}
