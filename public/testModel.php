<?php

require __DIR__ . '/../config.php';

require CLASSES . '/UserModel.php';
require CLASSES . '/ProjectModel.php';
require CLASSES . '/CommentsModel.php';
require CLASSES . '/CourseModel.php';

$user = new UserModel();
$course = new CourseModel();
$project = new ProjectModel();
$comments = new CommentsModel();

//dd($user->all());

echo "Result for one User";

dd($user->one(33));

echo "Result for one course";

dd($course->one(2));

echo "Result for one project";

dd($project->projectOne(2));
$result = $project->projectAll();
echo "Result for one comment";
dd($comments->commentAll());
dd($comments->commentOne(2));
?><!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<ul>
			<?php foreach($result as $row) : ?>
			<li><?=implode('<br/>',$row)?></li>
			<?php endforeach; ?>
		</ul>
	</body>
</html>
