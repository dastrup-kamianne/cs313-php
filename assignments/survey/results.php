<!DOCTYPE html> 
<html> 
 <head> 
 <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/meta-header.php'; ?>
  </head> 

  <body>
      <div class="wrapper">
     <header>
         <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/main-header.php'; ?>
         <h1>Results</h1>
     </header>
          <main>   
      <p>Thank you, <?php echo $name?>!
      <?php echo count($male) ?> users are male.<br>
      <?php echo count($female)?> users are like female.<br>
      <?php echo count($teen) ?> users are 0-19.<br>
      <?php echo count($twenty) ?> users are 20-29.<br>
      <?php echo count($thirty) ?> users are 30-39.<br>
      <?php echo count($forty) ?> users are 40-49.<br>
      <?php echo count($fifty) ?> users are 50-59.<br>
      <?php echo count($sixty) ?> users are 60-69.<br>
      <?php echo count($old) ?> users are 70+.<br>
      <?php echo count($hs)?> users have graduated High School.<br>
      <?php echo count($ad)?> users have Associates Degrees.<br>
      <?php echo count($bd)?> users have Bachelors Degrees.<br>
      <?php echo count($md)?> users have Masters Degrees.<br>
      <?php echo count($phd)?> users have a PhD.</p>
        </main>
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>
      </div>
 </body>
</html>