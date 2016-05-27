<?php
include ('db_connect.php');

$patient_id = filter_input(INPUT_POST, 'patientNumber', 
            FILTER_VALIDATE_INT);

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
                  
                  <input type="hidden" name="id" value ="<?php echo $patient_id;?>">
                  
                  <label>Appointment Date:</label>
                  <input type="text" name="apptDate" ><br>
                  
                  <label>Appointment Type:</label>
                  <input type="text" name="apptType"><br>
                  
                  <input type="submit" value="Add Appointment">
                  
              </form>
              
          </main>
          
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>
      </div>
 </body>
</html>