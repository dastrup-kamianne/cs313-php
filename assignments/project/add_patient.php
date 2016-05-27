<?php
include ('db_connect.php');


?>
<!DOCTYPE html> 
<html> 
 <head> 
 <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/meta-header.php'; ?>
  </head> 

  <body>
      <div class="wrapper">
     <header>
         <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/main-header.php'; ?>
         <h1>Edit Patient</h1>
     </header>
          
          <main>
              
              <form action="." method="post">
                  <input type="hidden" name="action" value ="add_appt_db">
                  
                  <label>First Name:</label>
                  <input type="text" name="fname" ><br>
                  
                  <label>Last Name:</label>
                  <input type="text" name="lname"><br>
                  
                  <label>Street Address:</label>
                  <input type="text" name="address"><br>
                  
                  <label>City:</label>
                  <input type="text" name="city"><br>
                  
                  <label>State:</label>
                  <input type="text" name="state"><br>
                  
                  <label>Zip Code:</label>
                  <input type="text" name="zipcode"><br>
                  
                  <label>Phone:</label>
                  <input type="text" name="phone"><br>
                  
                  <label>Email:</label>
                  <input type="text" name="email"><br>
                  
                  <input type="submit" value="Add Appointment">
                  
              </form>
              
          </main>
          
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>
      </div>
 </body>
</html>