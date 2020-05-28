<?php

/*
//////////////////////////////////////
//       PHP Capstone Admin        //
//          add_project.php file   //
//////////////////////////////////////
*/

$title = 'Add Project';

require __DIR__ . '/../../config.php';

require CLASSES . '/CourseModel.php';
require CLASSES . '/ProjectModel.php';

$course = new CourseModel();

$course_result = $course->distinct();

require __DIR__ . '/includes/header.inc.php';

?>
<style>
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
	<li class="breadcrumb-item active"><?=$title?></li>
  </ol>

  <!-- Contact Form -->
<!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<div class="row">
  <div class="col-lg-8 mb-4">
	<form action="addProject_handle.php" name="form2" method="post" novalidate>
	  <div class="control-group form-group">
		<div class="controls">
		  <label for="project_number">Project Number:</label>
		  <input type="text" name="project_number" class="form-control"
		  value="<?=esc_attr(old('project_number',$post))?>" maxlength="255">
		  <?=error('project_number', $errors);?>
		</div>
	  </div>

	  <div class="control-group form-group">
		<div class="controls">
		  <label for="title">Title:</label>
		  <input type="text" class="form-control" name="title"
		  value="<?=esc_attr(old('title',$post))?>" maxlength="255"/>
		  <?=error('title', $errors);?>
	  	</div>
	  </div>

	  <div class="control-group form-group">
		<div class="controls">
		  <label for="summary">Summary:</label>
		  <textarea type="text" name="summary" class="form-control"
		  value="<?=esc_attr(old('summary',$post))?>" ></textarea>
		  <?=error('summary', $errors);?>
		</div>
	  </div>

	  <div class="control-group form-group">
		<div class="controls">
		  <label for="details">Details:</label>
		  <textarea type="text" name="details" class="form-control"
		  value="<?=esc_attr(old('details',$post))?>" ></textarea>
		  <?=error('details', $errors);?>
		</div>
	  </div>

	  <div class="control-group form-group">
		<div class="controls">
		  <label for="image">Image:</label>
		  <input type="text" name="image" class="form-control" value="" />
		  <?=error('image', $errors);?>
		</div>
	  </div>

	  <div class="control-group form-group">
		<div class="controls">
		  <label for="image_desc">Image Description:</label>
		  <input type="text" name="image_desc" class="form-control" value="" />
		  <?=error('image_desc', $errors);?>
		</div>
	  </div>

	  <div class="control-group form-group">
		<div class="controls">
		  <label for="type">Type:</label>
		  <input type="text" name="type" class="form-control" value="" />
		  <?=error('type', $errors);?>
		</div>
	  </div>

	  <div class="control-group form-group">
		<div class="controls">
		  <label for="link">Link:</label>
		  <input type="text" name="link" class="form-control" value="" />
		  <?=error('link', $errors);?>
		</div>
	  </div>

	  <div class="control-group form-group">
		<div class="controls">
		  	<label for="is_commented">Is Commented:*</label><br>
	  		<input type="radio" name="is_commented" value="1">Yes
	  		<input type="radio" name="is_commented" value="0">No
			<?=error('is_commented', $errors);?>
  		</div>
  	  </div>

	  <div class="control-group form-group">
		<div class="controls">
			<label for="course_id">Course Id:</label><br/>
			<select name="course_id">
				<option value="">Select a Course</option>
				<?php foreach($course_result as $course) :?>
					<?php if($course['id'] === $result['course_id']) : ?>
						<option selected value="<?=$course['id']?>"><?=$course['name']?></option>
					<?php else : ?>
						<option value="<?=$course['id']?>"><?=$course['name']?></option>
					<?php endif; ?>
				<?php endforeach; ?>

			</select>
			<?=error('course_id', $errors);?>

		</div>
	  </div>


	  <input type="submit" class="btn btn-primary" value="Add Project" />
	</form>
  </div>

</div>
<!-- /.row -->



</div>
<!-- /.container -->


<?php

require __DIR__ . '/includes/footer.inc.php';

?>
