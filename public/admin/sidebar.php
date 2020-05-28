<?php

/*
//////////////////////////////////////
//       PHP Capstone Admin        //
//          sidebar.php file         //
//////////////////////////////////////
*/

$title = 'Admin Sidebar';

require __DIR__ . '/../../config.php';

require __DIR__ . '/includes/header.inc.php';

?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Sidebar Page
      <small>Subheading</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">About</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
      <!-- Sidebar Column -->
      <div class="col-lg-3 mb-4">
        <div class="list-group">
          <a href="index.php" class="list-group-item">Home</a>
          <a href="about.php" class="list-group-item">About</a>
          <a href="blog.php" class="list-group-item">Blog</a>
          <a href="course.php" class="list-group-item">Contact</a>
		  <a href="projects.php" class="list-group-item">Projects</a>
          <a href="users.php" class="list-group-item">users</a>
          <a href="comments.php" class="list-group-item">Comments</a>
          <a href="sidebar.php" class="list-group-item active">Sidebar Page</a>
          <a href="faq.php" class="list-group-item">FAQ</a>
          <a href="404.php" class="list-group-item">404</a>
        </div>
      </div>
      <!-- Content Column -->
      <div class="col-lg-9 mb-4">
        <h2>Section Heading</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.</p>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <?php

  require __DIR__ . '/includes/footer.inc.php';

  ?>
