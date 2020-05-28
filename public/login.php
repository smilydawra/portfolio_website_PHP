<?php
/*
//////////////////////////////////////
//       PHP Capstone Project       //
//          login.php file          //
//////////////////////////////////////
*/
require __DIR__ . '/../config.php';

$title = 'Login Page';


if($_SERVER['REQUEST_METHOD'] == 'POST'){

	if(empty($errors)){

		$query = 'SELECT * FROM user WHERE
					email = :email';

		$stmt = $dbh->prepare($query);

		$params = array(
			':email' => $_POST['email']
		);

		$stmt->execute($params);

		$login_user = $stmt->fetch(PDO::FETCH_ASSOC);

			if($login_user === false){
				$flash = array(
				'class' => 'error',
				'message' => 'Incorrect email or password. Enter your sign in information again!'
				);
			}



		$_SESSION['flash'] = $flash;

		if(password_verify($_POST['password'], $login_user['password'])) {
			$_SESSION['id'] = $login_user['id'];
			session_regenerate_id();
			$flash = array(
				'class' => 'success',
				'message' => 'Successfully Logged in to your account.'
			);
			$_SESSION['flash'] = $flash;
			header('Location: profile.php');
			die;
		} //end of password verify condition

		header('Location: ' . $_SERVER['HTTP_REFERER']);
		die;


	} // end of if(empty($errors))

} // end of server post method condtion

require __DIR__ . '/../includes/header.inc.php';

?>
    <div id="wrapper">
      <section>  <!-- Start of the main Section -->


          <h1 class="main_heading">Login</h1>



		  <div class="col-half">
			  <h2>Please login to your account!</h2>
			  <form id="first_form"
	          		name="first_form"
	          		method="post"
	          		autocomplete="on"
	          		action="login.php"
					> <!-- action tells the form where to send the data.-->
					<!-- <?php if(count($errors) > 0) : ?>

			            <div class="errors">
			                <ul>
			                    <?php foreach($errors as $error) : ?>
			                        <li><?=$error?></li>
			                    <?php endforeach; ?>
			                </ul>
			            </div>

			        <?php endif; ?> -->
				<fieldset>

				  <p>
	                <label for="email">Email:*</label>
	                <input type="email"
	                       name="email"
						   maxlength="255"
	                       id="email"
						   value="<?=esc(old('email',$post))?>"/>
					<?=error('email', $errors);?>
	              </p>


				  <p>
				   <label for="password">Password:*</label>
				   <input type="password"
						  id="password"
						  maxlength="255"
						  name="password"/>
						   <?=error('password', $errors);?>
				 </p>

	              <p class="buttons">
	                <input type="submit" value="Login To Account" />&nbsp;
	              </p>

	            </fieldset>
	          </form>


		  </div>
	  	  <div class="col-half">

			  <p style="margin-left: 15%;"><img src="images/login.jpg" alt="A happy customer" /></p>

        </div>
      </section>
  </div> <!-- enod of wrapper-->
	 <?php

	 require __DIR__ . '/../includes/footer.inc.php';

	 ?>
