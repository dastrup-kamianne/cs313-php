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
          Take the quiz below to find out which Frozen character you are.
      </p><br>
      <div id="survey_box">
      <form action="survey2.php" method="post" id="survey_form">
          <label>Enter your name:</label>
          <input type="text" name="name"><span class='error'><?php echo $nameErr;?></span><br>
          
          <label>Select your gender:</label>
          <input type="radio" name="gender" value="female">Female
          <input type="radio" name="gender" value="male">Male<br>
          
          <!--<label>Select your age:</label>
          <input type="radio" name="age" value="teen">0-19
          <input type="radio" name="age" value="twenty">20-29
          <input type="radio" name="age" value="thirty">30-39
          <input type="radio" name="age" value="forty">40-49
          <input type="radio" name="age" value="fifty">50-59
          <input type="radio" name="age" value="sixty">60-69
          <input type="radio" name="age" value="old">70+<br>
          
          <label>Education level (select all that apply):</label>
          <input type="checkbox" name="education[]" value="hs">High School Graduate
          <input type="checkbox" name="education[]" value="ad">Associate's Degree
          <input type="checkbox" name="education[]" value="bd">Bachelor's Degree
          <input type="checkbox" name="education[]" value="md">Master's Degree
          <input type="checkbox" name="education[]" value="phd">PhD<br>-->
          
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