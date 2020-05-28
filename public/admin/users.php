<?php

/*
//////////////////////////////////////
//       PHP Capstone Admin        //
//          users.php file         //
//////////////////////////////////////
*/

$title = 'Users';

require __DIR__ . '/../../config.php';

require CLASSES . '/UserModel.php';

$project = new UserModel();

$result = $project->all();
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
  background-color: #ffebfd;
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

    <div class="row">
		<table>
			<tr>
				<th>User ID</th>
				<th>Registered On</th>
				<th>Email</th>
				<th>Name(Last,First)</th>
				<th>City</th>
				<th>Postal Code</th>
			</tr>
			<?php foreach($result as $row) : ?>
			<tr>
				<td><?=esc($row['id'])?></td>
				<td><?=esc($row['created_at'])?></td>
				<td><?=esc($row['email'])?></td>
				<td><?=esc(ucfirst($row['last_name']))?>, <?=esc(ucfirst($row['first_name']))?></td>
				<td><?=esc(ucfirst($row['city']))?></td>
				<td><?=esc(strtoupper($row['postal']))?></td>
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
