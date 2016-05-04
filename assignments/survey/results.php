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
          <?php if ($answer !== NULL)
              {echo $name . ', you are most like' . $answer;} ?>
          
      </p><br>
      <?php echo $anna?>% of users are like Anna.<br>
      <?php echo $elsa?>% of users are like Elsa.<br>
      <?php echo $bulda?>% of users are like Bulda.<br>
      <?php echo $queen?>% of users are like Queen Iduna.<br>
      <?php echo $kristoff?>% of users are like Kristoff.<br>
      <?php echo $olaf?>% of users are like Olaf.<br>
      <?php echo $hans?>% of users are like Hans.<br>
      <?php echo $oaken?>% of users are like Oaken.<br>
        </main>
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>
      </div>
 </body>
</html>