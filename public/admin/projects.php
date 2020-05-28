<?php

/*
//////////////////////////////////////
//       PHP Capstone Admin         //
//          projects.php file       //
//////////////////////////////////////
*/

$title = 'Projects';

require __DIR__ . '/../../config.php';

require CLASSES . '/ProjectModel.php';

$project = new ProjectModel();

$result = $project->projectAll();



// serach functionality
if(!empty($_GET['s'])) {
	$title = "you search for: " . $_GET['s'];
	$result = $project->getAllProjectsBySearch($_GET['s']);
}

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
  padding:12px;
}

tr:nth-child(odd) {
  background-color: #e6e9ff;
  border: 1px solid #dddddd;
}

tr:nth-child(even) {
  background-color: #fff;
}

a.edit:hover{
	text-decoration: none;
	color:#fff;
	background-color: #377bdb;
}

.edit{
	background-color: #3e8bf7;
	border: none;
	color: #fff;
	padding: 10px 16px;
	text-align: center;
	text-decoration: none;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
	border-radius: 5px;
}

.add_project{
	background-color: #20c945;
	border: none;
	color: #fff;
	padding: 10px 16px;
	text-align: center;
	text-decoration: none;
	font-size: 16px;
	margin: 4px 2px;
	margin-left: 30px;
	cursor: pointer;
	border-radius: 5px;
}

a.add_project:hover{
	text-decoration: none;
	color:#fff;
	background-color: #179633;
}

.delete_project{
	background-color: #f2522e;
	border: none;
	color: #fff;
	padding: 10px 16px;
	text-align: center;
	text-decoration: none;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
	border-radius: 5px;
}

a.delete_project:hover{
	text-decoration: none;
	color:#fff;
	background-color: #c24327;
}

div.search {
	/* width: 300px; */
	margin-left: 52%;
	/* padding-bottom: 20px; */
	/* padding-top: 20px; */
}

form{
	margin-left: 110px;;
}

.flash{
	/* position: fixed; */
	  width: 100%;
  line-height: 30px;
  padding: 0;
  /* margin-top: 71px; */
  text-align: center;
  font-weight: 700;
  z-index: 2000;
}

.error{
  background-color: #f7d9d7;
  /* border: 1px solid #900; */
  color: #900;
}

.success{
	background-color: #d4fce0;
    /* border: 1px solid #134502; */
    color: #134502;
}


</style>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3"><?=$title?>
    </h1>
	<?php if(count($result) === 0) : ?>

		<h3>Sorry, no projects matched your search</h3>

	<?php endif; ?>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active"><?=$title?></li>
    </ol>



    <!-- Project One -->
    <div class="row">
		<p><a class='add_project' href="add_project.php" alt="">Add Project</a></p>
		<div class="search">

			<form action="/admin/projects.php" method="get" autocomplete="off" novalidate>
				<input id="s" type="text" name="s" maxlength="255" />&nbsp;
				<input type="submit" value="search" />
				<div>
					<ul id="live_search"></ul>
				</div>
			</form>


		</div><!-- /.search -->
		<table>
   		 <tr>
   			 <th>ID</th>
   			 <th>Title</th>
   			 <th>Type</th>
   			 <th>Course</th>
   			 <th>Created On</th>
   			 <th>IsCommented</th>
			 <th style="text-align: center"colspan="2">Action</th>
   		 </tr>
		 <?php if(count($result) > 0) : ?>
	   		 <?php foreach($result as $row) : ?>
	   		 <tr>
	   			 <td><?=esc($row['id'])?></td>
	   			 <td><?=esc($row['title'])?></td>
	   			 <td><?=esc($row['type'])?></td>
	   			 <td><?=esc(ucfirst($row['Course_name']))?></td>
	   			 <td><?=esc($row['created_at'])?></td>
	   			 <td><?=esc($row['is_commented']) == 1 ? 'Yes' : 'No' ?></td>
				 <td><p><a class='edit' href="edit_project.php?id=<?=$row['id']?>" alt="">edit</a></p></td>
					<td><p style="float: right;">
						<a onclick="return confirm('Are you sure to delete this record?')"
						 class='delete_project' href="delete_project.php?id=<?=$row['id']?>" alt="">delete</a></p></td>
	   		 </tr>
	   		 <?php endforeach; ?>
		<?php endif; ?>
   	 </table>
    </div>
    <!-- /.row -->
	<br/><br/>

  </div>
  <!-- /.container -->


<?php

require __DIR__ . '/includes/footer.inc.php';

?>
