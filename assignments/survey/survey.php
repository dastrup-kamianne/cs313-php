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
     
      <p>
          Take this quiz to see which Frozen character you are most like.
      </p><br>
      <div id="survey_box">
      <form action="process.php" method="post" id="survey_form">
              <input type="hidden" name="action" value="continue">
        
          
          <label>Enter your name:</label>
          <input type="text" name="name"><br>
          
          <label>Select your gender:</label>
          <input type="radio" name="gender" value="female">Female
          <input type="radio" name="gender" value="male">Male<br>
          
          <input type="submit" value="Next">
          </form>
          
      </div>
              <a href='results.php'>Click here to go to the results</a><br>
            
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>
      </div>
 </body>
</html>