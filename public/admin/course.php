<?php

/*
//////////////////////////////////////
//       PHP Capstone Admin        //
//          course.php file       //
//////////////////////////////////////
*/

$title = 'Course';

require __DIR__ . '/../../config.php';

require CLASSES . '/CourseModel.php';

$project = new CourseModel();

$result = $project->all();

require __DIR__ . '/includes/header.inc.php';

?>

<style>


table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 95%;
  margin: 0 auto;
}

td, th {
  /* border: 1px solid #dddddd; */
  text-align: left;
  padding:10px;
}

tr:nth-child(odd) {
  background-color: #ffeee8;
  border: 1px solid #dddddd;
}

</style>
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3"><?=$title?>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active"><?=$title?></li>
    </ol>

    <!-- Content Row -->
    <div class="row">
		<table>
			<tr>
				<th>Course ID</th>
				<th>Name</th>
				<th>Total Hours</th>
				<th>Instructor</th>
			</tr>
			<?php foreach($result as $row) : ?>
			<tr>
				<td><?=esc($row['id'])?></td>
				<td><?=esc($row['name'])?></td>
				<td><?=esc($row['total_hours'])?></td>
				<td><?=esc($row['teacher_name'])?></td>
			</tr>
			<?php endforeach; ?>
		</table>
    </div>
    <!-- /.row -->
	<br/><br/>
  </div>
  <!-- /.container -->

  <?php

  require __DIR__ . '/includes/footer.inc.php';

  ?>
