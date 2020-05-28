<?php
/*
//////////////////////////////////////
//       PHP Capstone Project       //
//          contact.php file          //
//////////////////////////////////////
*/
$title = 'Contact Page';

require __DIR__ . '/../config.php';

require __DIR__ . '/../includes/header.inc.php';

?>
    <div id="wrapper">
      <div id="Canada">
        <img src="images/canada_contact.jpg" alt="canada_photo" width="936" height="440" />
      </div>
      <section style="margin-top:0px;">  <!-- Start of the main Section -->
        <div>
          <h2 class="main_heading">Contact</h2>
          <table>
            <tr>
              <th>Corporate Office</th>
              <th>City Branch</th>
            </tr>
            <tr>
              <td>
                <address>
                  320 Colony Street, <br/>
                  Winnipeg (R3C 0E8) <br/>
                  MB, Canada
                </address>
              </td>
              <td>
                <address>
                  1485 Portage Ave #66Q, <br/>
                  Winnipeg, MB R3G 0W4 <br/>
                  MB, Canada
                </address></td>
            </tr>
          </table>

          <div id="map_photo">
            <img src="images/map_picture.JPG" alt="map_picture" width="450" height="300" />
          </div>
          <form id="first_form"
          name="first_form"
          method="post"
          autocomplete="on"
          action="http://www.scott-media.com/test/form_display.php"> <!-- action tells the form where to send the data.-->
            <fieldset>
              <p>
                <label for="first_name">First Name:*</label>
                <input type="text"
                       id="first_name"
                       name="first_name"
                       size="25"
                       maxlength="40"
                       required
                       placeholder="Type name here"
                />
              </p>

              <p>
                <label for="last_name">Last Name:*</label>
                <input type="text"
                       id="last_name"
                       name="last_name"
                />
              </p>

              <p>
                <label for="email_address">Email:*</label>
                <input type="email"
                       name="email_address"
                       id="email_address"
                />
              </p>

              <p>
                <label for="phone">Phone:*</label>
                <input type="tel" name="phone" id="phone" />
              </p>

              <p>
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" />
              </p>

              <p>
                <label for="comments">Type your comments</label> <br />
                <textarea name="comments"
                  id="comments"
                  cols="50"
                  rows="5"
                  placeholder="Type comments here"></textarea>
              </p>

              <p>
                <input type="submit" value="Send Form Please" />&nbsp;
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
