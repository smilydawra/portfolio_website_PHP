<?php

/*
//////////////////////////////////////
//       PHP Capstone Project       //
//          profile.php file        //
//////////////////////////////////////
*/

require __DIR__ . '/../config.php';

if(empty($_SESSION['id'])) {
	$flash = array(
		'class' => 'error',
		'message' => 'You must be logged in to see your Account.'
	);
    $_SESSION['flash'] = $flash;
    header('Location: login.php');
    die;
}


// select query created

$query = "Select *
			FROM user
			WHERE
			id = :id";

// preapre query
$stmt = $dbh->prepare($query);

// binding parameter
$params = array(
	':id' => intval($_SESSION['id'])
);

//execute query
$stmt->execute($params);

$results = $stmt->fetch(PDO::FETCH_ASSOC);

//dd($results);

if($results === false) {
	die('Sorry for the inconvience, We could not find the user.');
}


$title = 'Profile';
require __DIR__ . '/../includes/header.inc.php';

?>
    <div id="wrapper">
      <section>  <!-- Start of the main Section -->

          <h1 class="main_heading">My Account</h1>
		  <h2>Welcome, <?=esc($results['first_name'])?>!<h2>
		  <!-- <h3>Succesfully Logged In!</h3> -->
		  <h3>Welcome to your account page!</h3><br/>

			  <div class="col-half">

				  <table class="user_info">
					<tr class="border_top">
						<td colspan="2" style="padding: 5px;">&nbsp;&nbsp;&nbsp;Account Avatar</td>
					</tr>

					<tr>
						<td colspan="2"><p class="user_image">&#128248;</p></td>
					</tr>


				 </table>
				 <br/>
				 <br/>

				 <table class="user_info">

					 <tr class="border_top">
 						<td colspan="2" style="padding: 5px;">&nbsp;&nbsp;&nbsp;Personal Info</td>
 					</tr>

					<tr>
					<td><strong>First Name</strong></td>
					<td><?=esc(ucwords($results['first_name']))?></td>
					</tr>

					<tr>
					<td><strong>Last Name</strong></td>
					<td><?=esc(ucwords($results['last_name']))?></td>
					</tr>


					<tr>
						<td><strong>Gender</strong></td>
						<td><?=esc(ucwords($results['gender']))?></td>
					</tr>



				</table>


				<br/>
   				 <br/>
				<table class="user_info">

					<tr class="border_top">
						<td colspan="2" style="padding: 5px;">&nbsp;&nbsp;&nbsp;Contact Info</td>
					</tr>

					<tr>
						<td><strong>Email</strong></td>
						<td><?=esc($results['email'])?></td>
					</tr>

					<tr>
						<td><strong>Contact Number</strong></td>
						<td><?=esc($results['phone'])?></td>
					</tr>

					<tr>
						<td><strong>Street Address</strong></td>
						<td><?=esc($results['street_address'])?></td>
					</tr>

					<tr>
						<td><strong>City</strong></td>
						<td><?=esc(ucwords($results['city']))?></td>
					</tr>

					<tr>
						<td><strong>Postal</strong></td>
						<td><?=esc(strtoupper($results['postal']))?></td>
					</tr>

					<tr>
						<td><strong>Province</strong></td>
						<td><?=esc(ucwords($results['province']))?></td>
					</tr>

					<tr>
						<td><strong>Country</strong></td>
						<td><?=esc(ucwords($results['country']))?></td>
					</tr>

				  </table>

				  <h3 style="font-size: 1.1em;">Would you like to review <a href="Portfolio.php">Projects</a> now??</h3>

			</div>

			<div style="border: 1px solid #cfcfcf;" class="col-half">

				<h3>User Comments</h3>

				  <!-- user comments section for future -->

			  </div>





      </section>
  	</div> <!-- end of wrapper-->
	 <?php

	 require __DIR__ . '/../includes/footer.inc.php';

	 ?>
