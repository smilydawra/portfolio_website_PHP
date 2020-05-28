<?php

/*
//////////////////////////////////////
//       PHP Capstone Admin        //
//          projects.php file       //
//////////////////////////////////////
*/

$title = 'Projects';

require __DIR__ . '/../../config.php';

require CLASSES . '/CourseModel.php';
require CLASSES . '/ProjectModel.php';



if(!empty($post)) {

	$result = $post;

} else {
	if(empty($_GET['id'])) {
		die('Please select a project to edit');
	}

	$project = new ProjectModel();

	$result = $project->projectOne($_GET['id']);

}

$course = new CourseModel();

// $id = intval($_GET['id']);
$course_result = $course->distinct();
// }
//dd($course_result);
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
  border: 1px solid #dddddd;
  text-align: left;
  padding:12px;
}

tr:nth-child(even) {
  background-color: #eeeeee;
}

fieldset{
  border: none;
  /* box-shadow: 1px 2px 3px rgba(0,0,0,0.5);
  background: linear-gradient(#fff,#eee); */
  margin: 0 10%;
  width: 100%;
}

#update_form label{
  width: 160px;
  display: block;
  float: left;
  clear: both;
  text-align: left;
  margin-left: 1px;
  font-weight: 700;
  font-size: 1.2em;
}

#update_form input[type="text"],
#update_form input[type="textarea"],
#update_form textarea[type="text"]{
  border: none;
  border-bottom: 2px solid #ddd;
  width: 940px;
  height: 44px;
  background-color: transparent;
  font-family: Tahoma, Arial, sans-serif;
  font-size: 1.1em;
  -webkit-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
  margin-top: 3px;
  padding: 4px;
  padding-bottom: 5px;
}

#update_form input[type="checkbox"]{

}

#update_form input:not([type="radio"]):not([type="checkbox"]):hover{
  background-color: #ddd;
  box-shadow: 0 0 5px #cfc;
}

#update_form input:focus{
  background-color: #ddd;
}

#update_form input + label{
  float: none;
  display: inline;
  width: auto;
}

#update_form input{
  width: auto;
}

#update_form input[type="submit"],
#update_form input[type="reset"],
#update_form input[type="button"]{
  box-shadow: 2px 2px 2px rgba(0,0,0,0.3);
  padding: 6px;
  background-color: #ccc;
  font-weight: bold;
}

#update_form input[type="submit"]:hover,
#update_form input[type="reset"]:hover,
#update_form input[type="button"]:hover{
  background-color: #ccc;
}

.display_error {
	color: #f00;
	list-style:none;
	font-family: Arial;
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
      <li class="breadcrumb-item active"><a href="projects.php"><?=$title?></a></li>
    </ol>

    <!-- Project One -->
    <div class="row">
		<form id="update_form" action="update_project.php" method="post">


			<fieldset>
			<input type="hidden" name="id" readonly value="<?=esc_attr( old('id', $result))?>" />

				<p><label for="project_number">Project Number:</label><br/>
				<input type="text" name="project_number" value="<?=esc_attr( old('project_number', $result))?>" maxlength="255"/>
				<?=error('project_number', $errors);?>
				</p>

				<p><label for="title">Title:</label><br/>
				<input type="text" name="title" value="<?=esc_attr( old('title', $result))?>" maxlength="255" />
				<?=error('title', $errors);?>
				</p>

				<p><label for="summary">Summary:</label><br/>
				<textarea type="text" name="summary" value=""><?=esc_attr( old('summary', $result))?></textarea>
				<?=error('summary', $errors);?>
				</p>

				<p><label for="details">Details:</label><br/>
				<textarea type="text" name="details" value=""><?=esc_attr( old('details', $result))?></textarea>
				<?=error('details', $errors);?>
				</p>

				<p><label for="image">Image:</label><br/>
				<input type="text" name="image" value="<?=esc_attr( old('image', $result))?>" maxlength="255" />
				<?=error('image', $errors);?>
				</p>

				<p><label for="image_desc">Image Description:</label><br/>
				<input type="text" name="image_desc" value="<?=esc_attr( old('image_desc', $result))?>" maxlength="255" />
				<?=error('image_desc', $errors);?>
				</p>

				<p><label for="type">Type:</label><br/>
				<input type="text" name="type" value="<?=esc_attr( old('type', $result))?>" maxlength="255"/>
				<br/>
				<?=error('type', $errors);?>
				</p>


				<p><label for="link">Link:</label><br/>
				<input type="text" name="link" value="<?=esc_attr( old('link', $result))?>" maxlength="255" />
				<?=error('link', $errors);?>
				</p>


				<p><label for="is_commented">Is Commented:</label><br/>
				<input <?=$result['is_commented'] == '1'  ? 'checked' : '' ?> type="checkbox" name="is_commented" value="<?=old('is_commented', $result)?>" />
				<?=error('is_commented', $errors);?>
				</p>



				<p><label for="course_id">Course Id:</label><br/>
				<select name="course_id">
		            <option value="">Select a Course</option>
		            <?php foreach($course_result as $course) :?>
		            		<option <?=($result['course_id'] === $course['id']) ? 'selected' : '' ?>
								value="<?=esc_attr($course['id'])?>"><?=$course['name']?></option>
				    <?php endforeach; ?>

		        </select>
				<?=error('course_id', $errors);?>
				</p>
			</fieldset>
			<p><button type="submit">Update Project</button></p>
		</form>

  </div>
  <!-- /.container -->
</div>


<?php

require __DIR__ . '/includes/footer.inc.php';

?>
