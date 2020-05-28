<?php

/*
//////////////////////////////////////
//       PHP Capstone Admin         //
//    delete_project.php file       //
//////////////////////////////////////
*/

require __DIR__ . '/../../config.php';

//require CLASSES . '/CourseModel.php';
require CLASSES . '/ProjectModel.php';

$project = new ProjectModel();

$affected_rows = $project->deleteProject($_GET['id']);

if($affected_rows > 0) {
	// $_SESSION['id'] = $_POST['id'];
	$flash = array(
		'class' => 'success',
		'message' => 'You have successfully deleted a record!'
	);
	$_SESSION['flash'] = $flash;

} else {
	$flash = array(
		'class' => 'error',
		'message' => 'Error: There was a problem in deleting a record.'
	);
	$_SESSION['flash'] = $flash;
}

header('Location: projects.php');
die;
