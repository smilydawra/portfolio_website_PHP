<?php

/*
//////////////////////////////////////
//       PHP Capstone Admin        //
//          comments.php file      //
//////////////////////////////////////
*/

$title = 'Comments';

require __DIR__ . '/../../config.php';

require CLASSES . '/CommentsModel.php';

$project = new CommentsModel();

$result = $project->commentAll();

//dd($result);

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
  background-color: #eefccc;
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
				<th>ID</th>
				<th>Description</th>
				<th>Created On</th>
				<th>Updated On</th>
				<th>Username</th>
				<th>Project Title</th>
			</tr>
			<?php foreach($result as $row) : ?>
			<tr>
				<td><?=esc($row['id'])?></td>
				<td><?=esc($row['description'])?></td>
				<td><?=esc($row['created_at'])?></td>
				<td><?=esc($row['updated_at'])?></td>
				<td><?=esc(ucfirst($row['first_name']))?></td>
				<td><?=esc($row['project_title'])?></td>
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
