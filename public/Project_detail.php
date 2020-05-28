<?php

/*
//////////////////////////////////////
//       PHP Capstone Project       //
//      Project_detail.php file     //
//////////////////////////////////////
*/

$title = 'Project Detail Page';

require __DIR__ . '/../config.php';

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

$course_result = $course->all();

require __DIR__ . '/../includes/header.inc.php';

?>
      <div id="wrapper">
      <section>  <!-- Start of the main Section -->
        <div>
			<p  class="back" ><a href="portfolio.php">back</a></p>
         <h1 class="main_heading"><?=esc($result['title'])?></h1>
            <p><?=esc($result['summary'])?></p>

          <div class="containerflex">
            <img  src="/images/<?=esc_attr($result['image'])?>" alt="<?=esc($result['image_desc'])?>" />
            <div>
              <table>
                <tr>
                  <th>Project Number</th>
                  <td><?=esc($result['project_number'])?></td>
                </tr>
                <tr>
                  <th>Name</th>
                  <td><?=esc($result['title'])?></td>
                </tr>
                <tr>
                  <th>Project Type</th>
                  <td><?=esc($result['type'])?></td>
                </tr>
                <tr>
                  <th>Created On</th>
                  <td><?=esc($result['created_at'])?></td>
                </tr>
                <tr>
                  <th>Summary</th>
                  <td><?=esc($result['summary'])?></td>
                </tr>
                <tr>
                  <th>Details</th>
                  <td><?=esc($result['details'])?></td>
                </tr>
                <tr>
                  <th>link</th>
                  <td><a href="<?=esc_attr($result['link'])?>">Demo/Download - (Github)</a></td>
                </tr>
                <tr>
                  <th>Last Updated On</th>
                  <td><?=esc($result['updated_at'])?></td>
                </tr>
                <tr>
                  <th>Course Name</th>
                  <td><?=esc($result['Course_name'])?></td>
                </tr>
                <tr>
                  <th>Instructor Name</th>
                  <td><?=esc($result['Teacher'])?></td>
                </tr>
              </table>

              <div id="comments">

              <form id="form">
               <fieldset>
                  <h2 style="margin-bottom: 0">Comments</h2>
                  <p style="margin-top: 0">(please Log In to comment or ask questions.)</p>
                  <p>
                    <textarea rows="5" cols="80" placeholder="Give your comments here...">

                    </textarea>
                  </p>

                  <p>
                    <input type="submit" value="Submit" />&nbsp;
                    <input type="reset" value="Clear" accesskey="c" />&nbsp;
                  </p>
                </fieldset>
              </form>
              </div>
            </div>
          </div>

        </div>
      </section> <!-- end of main section -->
     </div>
	 <!-- end of wrapper -->
	 <?php

	 require __DIR__ . '/../includes/footer.inc.php';

	 ?>
