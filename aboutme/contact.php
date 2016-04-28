<!DOCTYPE html> 
<html> 
 <head> 
 <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/meta-header.php'; ?>
  </head> 
 <body>
     <div class="wrapper">
     <header>
         <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/main-header.php'; ?>
         <h1>Contact</h1>
     </header>
         <main>
     <p>
         Dastrup Development<br>
         KamiAnne Dastrup<br>
         dastrupdevelopment@gmail.com
     </p>
     <p>
         Fill out the form below to contact me. *All fields are required
     </p>
     <?php

    if(!empty($reply)){

      echo "<p class='notify'>$reply</p>";

    }

    unset($reply);

     ?>
     
     <p id='required'>All fields are required.</p>
     
<form method="post" action="index.php" id="contactform">

  <fieldset>

   <label for="firstname">First Name:</label>

   <input type="text" name="firstname" id="firstname" size="10"<?php echo $firstname; ?>><br>

   <label for="lastname">Last Name:</label>

   <input type="text" name="lastname" id="lastname" size="15"<?php echo $lastname; ?>><br>

   <label for="email">Email Address:</label>

   <input type="email" name="email" id="email" size="30"<?php echo $email; ?>><br>

   <label for="subject">Subject:</label>

   <input type="text" name="subject" id="subject" size="60"<?php echo $subject; ?>><br>

   <label for="message">Message</label>

   <textarea name="message" id="message" rows="10" cols="60"<?php echo $message; ?>></textarea><br>
   
   <p>Answer the following CAPTCHA question in the box below.</p>

    <label for="captcha">What color is a red apple?</label>

    <input type="text" name="captcha" id="captcha" size="5"><br>

   <label for="action">&nbsp;</label>

   <input type="submit" name="action" id="action" value="Send">

  </fieldset>
         </main>
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>
     

</form>
     </div>
 </body>
</html>