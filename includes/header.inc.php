<?php

/*
File header.inc.php
Created: 23 April 2020
*/


?><!doctype html>
<html lang="en">
  <head>

<!--
//////////////////////////////////////
//       PHP Capstone Project       //
//            Header                //
//////////////////////////////////////
-->

    <title><?=$title?></title>
    <meta charset="utf-8" />

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap"
          rel="stylesheet" />
    <link href="styles/desktop.css"
          rel="stylesheet"
          type="text/css"
          media="screen and (min-width: 768px)" />
    <link href="styles/mobile.css"
          rel="stylesheet"
          type="text/css"
          media="screen and (max-width: 767px)" />
    <link rel="stylesheet"
          href="styles/print.css"
          type="text/css"
          media="print" />
    <link rel="icon" href="images/icon.png"  />
    <link rel="apple-touch-icon" sizes="128x128" href="images/Icon_128x128.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="images/Icon_152x152.png" />
    <link rel="apple-touch-icon" sizes="167x167" href="images/Icon_128x128.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="images/Icon_128x128.png" />
    <link rel="apple-touch-icon" sizes="196x196" href="images/Icon_128x128.png" />

<!--   "Conditional" comment for Navigation Items in older IE browsers-->

<!--[if LTE IE 9]>
<script src="ie_8.js"></script>
<style type="text/css">
header, nav, section, footer{
display:block;
}
</style>
<link href="styles/desktop.css"
      rel="stylesheet"
      type="text/css" />
<![endif]-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php


    if ($title == "Home Page") {
      require __DIR__ . '/../public/styles/index.css';
    }

    if ($title == "Portfolio") {
      require __DIR__ . '/../public/styles/portfolio.css';
    }

    if ($title == "Contact Page") {
      require __DIR__ . '/../public/styles/contact.css';
    }

    if ($title == "Blog Page") {
      require __DIR__ . '/../public/styles/blog.css';
    }

    if ($title == "About Me Page") {
      require __DIR__ . '/../public/styles/about_me.css';
    }

    if ($title == "Project Detail Page") {
      require __DIR__ . '/../public/styles/project_detail.css';
    }

	if ($title == "Register Page") {
	  require __DIR__ . '/../public/styles/register.css';
	}

	if ($title == "User Info") {
	  require __DIR__ . '/../public/styles/user_success.css';
	}

	if ($title == "Login Page") {
	  require __DIR__ . '/../public/styles/login.css';
	}

	if ($title == "Profile") {
	  require __DIR__ . '/../public/styles/user_success.css';
	}


  ?>
	<style>

		body nav ul#navlist li a.nav_home,
		body nav ul#navlist li a.nav_about,
		body nav ul#navlist li a.nav_portfolio,
		body nav ul#navlist li a.nav_contact,
		body nav ul#navlist li a.nav_blog,
		body nav ul#navlist li a.nav_register{
		  text-decoration: overline;
		}

	</style>
  </head>
  <body id="home">
<!--   "Conditional" comment for older IE browsers-->
<!--[if IE 8]>
<h1>It's 2019! Stop using IE8! Please install new version of IE for best user experience</h1>
<![endif]-->

      <header>
		  <?php if(isset($_SESSION['id'])) : ?>
			  <div class="login_css">
				  <a href="?logout=1">Logout</a>
				  <span>|</span>
				  <a href="#">Update Info</a>
			  </div>

	  	<?php else : ?>
			<div class="login_css">
  			  <a href="login.php">Login</a>
  			  <span>|</span>
  			  <a href="profile.php">Personal Info</a>
  		  	</div>
		<?php endif; ?>

	       <div id="logo">
	         <a href="index.php" title="Logo">
	            <picture>
	              <source media="(min-width: 768px)" srcset="images/logo.png" />
	              <source media="(max-width: 767px)" srcset="images/logo2.png" />
	              <img src="images/logo.png" alt="Smily_Dawra_Logo" width="140" height="80" />
	            </picture>
	          </a>
	        </div>







	        <nav>
	          <!-- "Hamburger Menu" -->
	          <a href="#" id="menubutton" title="Mobile menu options">
	            <span id="topbar"></span>
	            <span id="middlebar"></span>
	            <span id="bottombar"></span>
	          </a>
	          <ul id="navlist"> <!-- Navigation starts from here -->
	            <li><a <?=($title == "Home Page") ? 'class="nav_home"' : ""; ?> href="index.php" title="Home Page" >Home</a></li>
	            <li><a <?=($title == "About Me Page") ? 'class="nav_about"' : 'class = ""'; ?> href="About_me.php" title="About Me Page">About Me</a></li>
	            <li><a <?=($title == "Portfolio") ? 'class="nav_portfolio"' : ""; ?> href="Portfolio.php" title="Portfolio Page">Portfolio</a></li>
	            <li><a <?=($title == "Blog Page") ? 'class="nav_blog"' : ""; ?> href="Blog.php" title="Blog Page - Smily Dawra" >Blog</a></li>
	            <li><a <?=($title == "Contact Page") ? 'class="nav_register"' : ""; ?> href="Contact.php" title="Contact Page - Smily Dawra" >Contact</a></li>

				<?php if(isset($_SESSION['id'])) : ?>
					<li class="red_color"><a <?=($title == "Profile") ? 'class="nav_contact"' : ""; ?> href="profile.php">	&#x1F465; Profile</a></li>
				<?php else : ?>
					<li class="red_color"><a <?=($title == "Register Page") ? 'class="nav_contact"' : ""; ?> href="register.php">Register</a></li>
				<?php endif; ?>

			</ul>


			<!-- end of nav -->



        	</nav>

			<!-- Flash message div -->
			<?php if(!empty($flash)) : ?>
				<div class="flash_msg">
			   		<div class="flash <?=esc_attr($flash['class'])?>">
				   		<span><?=esc($flash['message'])?></span>
			   		</div>
		   		</div>
		  <?php endif; ?>

		</header>
