<?php

/*
//////////////////////////////////////
//       PHP Capstone Admin        //
//          about.php file         //
//////////////////////////////////////
*/

$title = 'Admin';

require __DIR__ . '/../../config.php';

require __DIR__ . '/includes/header.inc.php';

?>
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Welcome To Admin Site
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active"><?=$title?></li>
    </ol>

    <!-- Intro Content -->
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid rounded mb-4" src="/../images/admin.jpg" alt="">
      </div>
      <div class="col-lg-6">
        <h2>About Me</h2>
		<p>
		  I am Smily Dawra, web
		  developer from Winnipeg, Canada. I have a Bachelor’s in computer
		  science degree with an industry experience of 5 years in software
		  and web development. Currently I am pursuing a post graduate diploma
		  in Web Development to further hone my skills. I am energetic about
		  building magnificent websites that improves the lives of people around me.
		  I have expertise in making websites for customers ranging from individuals
		  and small businesses all the way to large enterprise corporations.
		</p>
	</div>
    </div>
    <!-- /.row -->

    <!-- Team Members -->
    <h2>Our Team</h2>

    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="/../images/raymond.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Raymond</h4>
            <h6 class="card-subtitle mb-2 text-muted">Graphic Designer</h6>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
          </div>
          <div class="card-footer">
            <a href="#">raymond@abc.com</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="/../images/jyoti.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Jyoti Jyoti</h4>
            <h6 class="card-subtitle mb-2 text-muted">Software Developer</h6>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
          </div>
          <div class="card-footer">
            <a href="#">jyoti@abc.com</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="/../images/nik.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Nik</h4>
            <h6 class="card-subtitle mb-2 text-muted">Junior Developer</h6>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
          </div>
          <div class="card-footer">
            <a href="#">nik@abc.com</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Our Customers -->
    <!-- <h2>Our Customers</h2>
    <div class="row">
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
    </div> -->
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <?php

  require __DIR__ . '/includes/footer.inc.php';

  ?>
