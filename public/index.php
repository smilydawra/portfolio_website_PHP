<?php

/*
//////////////////////////////////////
//       PHP Capstone Project       //
//          index.php file          //
//////////////////////////////////////
*/

$title = 'Home Page';

require __DIR__ . '/../config.php';

require __DIR__ . '/../includes/header.inc.php';

?>
<div id="wrapper">
    <main> <!-- Main starts here -->
     <div id="container">
        <div class="progress progress-striped css">
          <div class="progress-bar">
            CSS3
          </div>
        </div>
        <div class="progress progress-striped html">
          <div class="progress-bar">
            HTML5
          </div>
        </div>
        <div class="progress progress-striped java">
          <div class="progress-bar">
            JAVA
          </div>
        </div>
        <div class="progress progress-striped xml">
          <div class="progress-bar">
            XML
          </div>
        </div>
        <div class="progress progress-striped sql">
          <div class="progress-bar">
            SQL
          </div>
        </div>
        <div class="progress progress-striped php">
          <div class="progress-bar">
            PHP
          </div>
        </div>
    </div>
    <div class="polygon smily" style="opacity: 1">
      <img src="images/smily.jpg" alt="smily image" width="208" height="361" />
    </div>
    <div class="introtext">
      <p>Hello, I'm</p>
      <p><strong>Smily Dawra</strong></p>
      <p>I'm a full-stack web developer.</p>
    </div>
  </main> <!-- end of main -->

  <section> <!-- section starts here -->
    <div>
      <h1 class="main_heading">Web Designer &amp; Developer</h1>
      <p>
        Web design encompasses many different skills and disciplines in the
        production and maintenance of websites. The different areas of web
        design include web graphic design; interface design; authoring, including
        standardised code and proprietary software; user experience design; and
        search engine optimization. Often many individuals will work in teams covering
        different aspects of the design process, although some designers will cover them
        all.
      </p>
      <p>
        A web developer is a programmer who specializes in, or is specifically engaged in,
        the development of World Wide Web applications using a client–server model.
      </p>
      <h2 class="main_heading">Web Services</h2>
      <p>
        Our experienced staff, combined with our global network, allow us to provide the
        support you need - whenever you need it, at home and abroad, whatever the size of
        your organization.
      </p>
      <ul id="project_ul">
        <li>
          <div>
            <h2 class="frombottom">&#128187;</h2>
            <h3 class="card_name">Web Designing</h3>
          </div>
        </li>
        <li>
          <div>
            <h2 class="frombottom">&#128241;</h2>
            <h3 class="card_name">Web Development</h3>
          </div>
        </li>
        <li>
          <div>
            <h2 class="frombottom">&#128193;</h2>
            <h3 class="card_name">Software Testing</h3>
          </div>
        </li>
        <li>
          <div>
            <h2 class="frombottom">&#128197;</h2>
            <h3 class="card_name">Support &amp; Maintenance</h3>
          </div>
        </li>
      </ul>
    </div>
  </section> <!-- section ends here -->
</div> <!-- wrapper ends here -->
<?php

require __DIR__ . '/../includes/footer.inc.php';

?>
