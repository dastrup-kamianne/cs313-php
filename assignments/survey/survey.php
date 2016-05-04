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
          <main>   
      <p>
          Take this quiz to see which Frozen character you are most like.
      </p><br>
      <form action="results.php" method="post" id="survey_form">
          
          <label>Select your gender:</label>
          <input type="radio" name="gender" value="female">Female
          <input type="radio" name="gender" value="male">Male
          
          <input type='submit' value='Next'>
        <br>
      </form>
      <a href='results.php'>Click here to go to the results</a>
        </main>
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>
      </div>
 </body>
</html>