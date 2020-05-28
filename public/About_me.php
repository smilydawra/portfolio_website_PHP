<?php
/*
//////////////////////////////////////
//       PHP Capstone Project       //
//          About_me.php file          //
//////////////////////////////////////
*/
$title = 'About Me Page';

require __DIR__ . '/../config.php';

require __DIR__ . '/../includes/header.inc.php';

?>
      <div id="wrapper">
      <section>  <!-- Start of the main Section -->

        <div>
          <h1 class="main_heading">About Me</h1>
          <div>
            <p>
              I am Smily Dawra, web
              developer from Winnipeg, Canada. I have a bachelor’s in computer
              science degree with an industry experience of 5 years in software
              and web development. Currently I am pursuing a post graduate diploma
              in Web Development to further hone my skills. I am energetic about
              building magnificent websites that improves the lives of people around me.
              I have expertise in making websites for customers ranging from individuals
              and small businesses all the way to large enterprise corporations.
            </p>
          </div>
          <div class="line"></div>
          <div class="line_horizontal line2"></div>
          <div class="line_horizontal line3"></div>
          <div class="line_horizontal line4"></div>
          <div class="line_horizontal line5"></div>
          <div class="polygon position1">
            <strong><a href="#">Professional Info</a></strong>
          </div>
          <div class="polygon position2">
            <strong><a href="#">Work Experience</a></strong>
          </div>
          <div class="polygon position3">
            <strong><a href="#">Education</a></strong>
          </div>
          <div class="polygon position4">
            <strong><a href="#">Skills</a></strong>
          </div>
        </div>
      </section> <!-- end of main section -->
     </div><!-- end of wrapper -->
	 <?php

	 require __DIR__ . '/../includes/footer.inc.php';

	 ?>
