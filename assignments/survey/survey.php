<?php
session_start(); ?>

<!DOCTYPE html> 
<html> 
 <head> 
 <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/meta-header.php'; ?>
  </head> 

  <body>
      <div class="wrapper">
     <header>
         <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/main-header.php'; ?>
         <h1>Which Frozen Character Are You?</h1>
     </header>
     <?php
     if (!isset($_SESSION['set'])){ 
         ?>
      <p>
          Take the quiz below to find out which Frozen character you are.
      </p><br>
      <div id="survey_box">
      <form action="survey2.php" method="post" id="survey_form">
          <label>Enter your name:</label>
          <input type="text" name="name"><br>
          
          <label>Select your gender:</label>
          <input type="radio" name="gender" value="female">Female
          <input type="radio" name="gender" value="male">Male<br>
          
          <input type="submit" value="Next">
          </form>
          
      </div>
              <div class='resultlink'>
                  <a href='results.php'>Click here to go to the results</a></div>
     <?php ;}
     else {
         ?>
              <p>You have already taken this quiz.</p><br>
              <div class='resultlink'>
                  <a href='results.php'>Click here to go to the results</a></div>
     <?php ;} ?>
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>
      </div>
 </body>
</html>