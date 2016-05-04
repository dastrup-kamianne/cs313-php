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
      
          '<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="survey_form">
        <?php if ($gender == NULL || $gender == false) {
        echo  
          '<label>Enter your name:</label>
          <input type="text" name="name"><br>
          
          <label>Select your gender:</label>
          <input type="radio" name="gender" value="female">Female
          <input type="radio" name="gender" value="male">Male<br>
          
          <input type="submit" value="Next">
          </form>';}
          elseif ($gender == 'male'){
              echo 
                '<label>What is your favorite food?</label>
                    <input type="radio" name="food" value="kristoff">Carrots<br>
                    <input type="radio" name="food" value="olaf">Snow Cones<br>
                    <input type="radio" name="food" value="hans">Sandwiches<br>
                    <input type="radio" name="food" value="oaken">Lutefisk<br>
                    
                <label>What color is your hair?</label>
                    <input type="radio" name="hair" value="kristoff">Blonde<br>
                    <input type="radio" name="hair" value="olaf">White<br>
                    <input type="radio" name="hair" value="hans">Red<br>
                    <input type="radio" name="hair" value="oaken">Brown<br>
                    
                <label>What is your favorite activity</label>
                    <input type="radio" name="activity" value="kristoff">Climbing mountains<br>
                    <input type="radio" name="activity" value="olaf">Giving warm hugs<br>
                    <input type="radio" name="activity" value="hans">Plotting to be king<br>
                    <input type="radio" name="activity" value="oaken">Soaking in a sauna<br>
          
                    <input type="submit" value="Submit">
                    </form>';
          }
          elseif ($gender == 'female'){
              echo
                '<label>What is your favorite food?</label>
                    <input type="radio" name="food" value="anna">Sandwiches<br>
                    <input type="radio" name="food" value="elsa">Popsicles<br>
                    <input type="radio" name="food" value="queen">Roast<br>
                    <input type="radio" name="food" value="bulda">Rocks<br>
                    
                <label>What color is your hair?</label>
                    <input type="radio" name="hair" value="anna">Red<br>
                    <input type="radio" name="hair" value="elsa">Blonde<br>
                    <input type="radio" name="hair" value="queen">Brown<br>
                    <input type="radio" name="hair" value="bulda">Gray<br>
                    
                <label>What is your favorite activity</label>
                    <input type="radio" name="activity" value="anna">Building a snowman<br>
                    <input type="radio" name="activity" value="elsa">Building a castle<br>
                    <input type="radio" name="activity" value="queen">Riding horses<br>
                    <input type="radio" name="activity" value="bulda">Singing loud<br>
          
                    <input type="submit" value="Submit">
                    </form>';
          }?>

      <a href='results.php'>Click here to go to the results</a>
        
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>
      </div>
 </body>
</html>