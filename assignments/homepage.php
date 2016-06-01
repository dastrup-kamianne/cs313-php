<?php



session_start();

if (!isset($_SESSION['username'])){
    header('Location:signin.php');
}


?>


<!DOCTYPE html> 
<html> 
 <head> 
 
  </head> 

  <body>
      
     <header>
         
         <h1>Welcome</h1>
     </header>
          
          <main>
              <p>Thank you for signing up. Your username is <?php echo $_SESSION['username']?></p>
              
              
              
              
              
          </main>
          
    
     
 </body>
</html>

