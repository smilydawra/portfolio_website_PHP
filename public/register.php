<?php
/*
//////////////////////////////////////
//       PHP Capstone Project       //
//          register.php file        //
//////////////////////////////////////
*/
$title = 'Register Page';


require __DIR__ . '/../config.php';

require __DIR__ . '/../includes/header.inc.php';

?>
    <div id="wrapper">
      <section>  <!-- Start of the main Section -->


          <h1 class="main_heading">Register</h1>

		  <div class="col-half">
			  <h2>Welcome!</h2>
	   		  <p><img src="images/register.jpg" alt="A happy customer" /></p>

	   		   <p>Once you have successfully signed
	   			up, you will be able to comment on my projects, and
	   			 reveive many benefits only available to registered customers!</p>
		  </div>
	  	  <div class="col-half">


          <form id="first_form"
          		name="first_form"
          		method="post"
          		autocomplete="on"
          		action="register_handle_form.php"
				novalidate> <!-- action tells the form where to send the data.-->
            <fieldset>
              <p>
                <label for="first_name">First Name:*</label>
                <input type="text"
                       id="first_name"
                       name="first_name"
                       size="25"
                       maxlength="255"
                       placeholder="Type name here"
					   value="<?=esc(old('first_name',$post))?>";/>
				<?=error('first_name', $errors);?>
              </p>

              <p>
                <label for="last_name">Last Name:*</label>
                <input type="text"
                       id="last_name"
                       name="last_name"
					   maxlength="255"
					   value="<?=esc(old('last_name',$post))?>"/>
				<?=error('last_name', $errors);?>
		  	 </p>

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
				<label for="street_address">Street:*</label>
				<input type="text"
					   id="street_address"
					   maxlength="255"
					   name="street_address"
					   value="<?=esc(old('street_address',$post))?>"/>
				<?=error('street_address', $errors);?>
			  </p>

			  <p>
				<label for="city">City:*</label>
				<input type="text"
					   id="city"
					   maxlength="255"
					   name="city"
					   value="<?=esc(old('city',$post))?>"/>
				<?=error('city', $errors);?>
			  </p>

			  <p>
				<label for="postal">Postal:*</label>
				<input type="text"
					   id="postal"
					   maxlength="255"
					   name="postal"
					   value="<?=esc(old('postal',$post))?>"/>
				<?=error('postal', $errors);?>
			 </p>

			  <p>
				<label for="province">Province:*</label>
				<input type="text"
					   id="province"
					   maxlength="255"
					   name="province"
					   value="<?=esc(old('province',$post))?>"/>
				<?=error('province', $errors);?>
			  </p>

			  <p>
				<label for="country">Country:*</label>
				<input type="text"
					   id="country"
					   maxlength="255"
					   name="country"
					   value="<?=esc(old('country',$post))?>"/>
				<?=error('country', $errors);?>
			  </p>

			  <p>
			   <label for="gender">Gender:*</label><br />
			   <input type="radio" name="gender" value="female" />Female
			   <input type="radio" name="gender" value="male" />Male
			   <input type="radio" name="gender" value="other" />Other
			   <?=error('gender', $errors);?>
			 </p>

              <p>
                <label for="phone">Phone:*</label>
                <input type="tel" name="phone" id="phone"
				value="<?=esc(old('phone',$post))?>" />
				<?=error('phone', $errors);?>
              </p>

			  <p>
			   <label for="password">Password:*</label>
			   <input type="password"
					  id="password"
					  maxlength="255"
					  name="password"/>
					   <?=error('password', $errors);?>
			 </p>

			 <p>
			  <label for="confirm_password">Confirm Password:*</label>
			  <input type="password"
					 id="confirm_password"
					 maxlength="255"
					 name="confirm_password"/>
					<?=error('confirm_password', $errors);?>
			</p>


              <p>
                <input type="submit" value="Register" />
                <input type="reset" value="Clear Form" accesskey="c" />&nbsp;
              </p>

            </fieldset>
          </form>

        </div>
      </section>
  </div> <!-- enod of wrapper-->
	 <?php

	 require __DIR__ . '/../includes/footer.inc.php';

	 ?>
