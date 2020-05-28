<?php

/*
//////////////////////////////////////
//       PHP Capstone Project       //
//          portfolio.php file      //
//////////////////////////////////////
*/
$title = 'Portfolio';

require __DIR__ . '/../config.php';

require CLASSES . '/ProjectModel.php';

$project = new ProjectModel();

$result = $project->projectAll();

require __DIR__ . '/../includes/header.inc.php';

?>

    <div id="wrapper">
      <section>  <!-- Start of the main Section -->
        <div id="projectDiv">  <!--Start of project div -->
          <h1 class="main_heading"><?=$title?></h1>
          <p>
            From Web Components and UI/UX animations to React.JS,
            Redux, Vue.JS, and Node.JS. Check out my latest web
            software development portfolio projects.
          </p>
		  <div class="grid-container">

		  <?php foreach($result as $row) : ?>
			  <div class="grid-item">
            <div class="projectImage" id="box11">
				<div id="hover_me">
				<img  src="/images/<?=esc_attr($row['image'])?>" />
					<div id="show_me">
					<p><?=esc($row['project_number'])?></p>
					</div>
				</div>
				<h2><?=esc($row['title'])?></h2>
				<p><?=esc($row['summary'])?><a href="Project_detail.php?id=<?=$row['id']?>"><br/><br/>More Info</a>
				</p>

			</div>

			<!-- /.projectSummary -->
</div>
		  <!-- /.containerflex -->
		  	<?php endforeach; ?>

		</div>

          <!-- <div style="background-color: #FCBC51" class="containerflex">
            <h2>Project Name</h2>
            <div class="projectImage" id="box22"></div>
            <div class="projectNumber">
              <p>02</p>
            </div>
            <div class="projectSummary">
              <h3>Summary</h3>
              <p style="margin-top: 4px">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and scrambled it to make a type
              specimen book. <a href="Project_detail.php">View Project</a>
              </p>

            </div>
          </div>
          <div  style="background-color: #ddaacc" class="containerflex">
            <h2>Project Name</h2>
            <div class="projectImage" id="box33"> </div>
            <div class="projectNumber">
              <p>03</p>
            </div>
            <div class="projectSummary">
              <h3>Summary</h3>
              <p style="margin-top: 4px">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and scrambled it to make a type
              specimen book. <a href="#">View Project</a>
              </p>

            </div>
          </div>

          <div style="background-color: #88bbee" class="containerflex">
            <h2>Project Name</h2>
            <div class="projectImage" id="box44"> </div>
            <div class="projectNumber">
              <p>04</p>
            </div>
            <div class="projectSummary">
              <h3>Summary</h3>
              <p style="margin-top: 4px">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and scrambled it to make a type
              specimen book. <a href="#">View Project</a>
              </p>

            </div>
          </div>

          <div style="background-color: #cc9999" class="containerflex">
            <h2>Project Name</h2>
            <div class="projectImage" id="box55"></div>
            <div class="projectNumber">
              <p>05</p>
            </div>
            <div class="projectSummary">
              <h3>Summary</h3>
              <p style="margin-top: 4px">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and scrambled it to make a type
              specimen book. <a href="#">View Project</a>
              </p>

            </div>
          </div>

          <div style="background-color: #88eeff" class="containerflex">
            <h2>Project Name</h2>
            <div class="projectImage" id="box66"> </div>
            <div class="projectNumber">
              <p>06</p>
            </div>
            <div class="projectSummary">
              <h3>Summary</h3>
              <p style="margin-top: 4px">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and scrambled it to make a type
              specimen book. <a href="#">View Project</a>
              </p>

            </div>
          </div> -->

        <!-- </div>  -->
      </section> <!-- end of man section -->
     </div> <!-- end of wrapper -->
	 <?php

	 require __DIR__ . '/../includes/footer.inc.php';

	 ?>
