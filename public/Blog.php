<?php

/*
//////////////////////////////////////
//       PHP Capstone Project       //
//          blog.php file           //
//////////////////////////////////////
*/
$title = 'Blog Page';

require __DIR__ . '/../config.php';

require __DIR__ . '/../includes/header.inc.php';

?>
      <div id="wrapper">
      <section>  <!-- Start of the main Section -->
        <div>
          <h1 class="main_heading">Traveler</h1>
          <p>
            Hello, I'm Smily, a web developer by profession and traveler
            by heart; fixated on exploring the world, meeting new individuals
            (+ dogs) and getting as lost as conceivable with my camera. I was
            on the road for 205 days between 2016 and 2019 taking a chance of
            visiting less explored and very popular tourist destinations.
          </p>
          <p>
            I hope this website gives you some kind of inspiration (and handy tips)
            to go and chase your own adventures. Travel is the best kind of education
            so go get lost, even if it’s just outside your own doorstep!

          </p>
          <div id="blogbox">
            <div id="blog1">
              <img src="images/Blog1.JPG" alt="New York Time Square" width="400" height="300"/> <br/><br/>
              <strong>New York</strong>
              <p>The Empire City, Big Apple, Concrete Jungle and city of dreams,
                 this city has plenty of nicknames and whatever nickname or
                 reference you may have come across, New York city is a popular
                 bucket list destination for almost everyone! There’s something
                 about Times Square lights, street food and Statue of Liberty that
                 keeps people coming back over and over again.
              </p>
            </div>
            <div id="blog2">
              <img src="images/Blog2.jpg" alt="Grand Canyon - Naveda" width="400" height="300"/> <br/><br/>
              <strong>Grand Canyon</strong>
               <p>Grand Canyon is one of the most visited places in United States. Anyone who
                has visited it can vouch for the breathtaking views and landscape. However,
                if you are planning to visit, avoid going to the West Rim, as it’s a tourist
                trap and a rip off. The West rim is run by an Indian Reservation which
                charges $30 to come in the reservation and then another $35 to go the skywalk
                (glass platform overhanging the canyon).
              </p>
            </div>
          </div>
        </div>
      </section>
     </div>
	 <!-- end of wrapper -->
	 <?php

	 require __DIR__ . '/../includes/footer.inc.php';

	 ?>
