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
         <h1>Add Appointment</h1>
     </header>
          
          <main>
              
              <form action="." method="post" id="aligned">
                  <input type="hidden" name="action" value ="add_appt_db">
                  
                  <input type="hidden" name="patientNumber" value ="<?php echo $patient_id;?>">
                  
                  <label>Appointment Date:</label>
                  <input type="text" name="apptDate" placeholder="YYYY-MM-DD"><br>
                  
                  <label>Appointment Type:</label>
                  <input type="text" name="apptType"><br>
                  
                  <label></label>
                  <input type="submit" value="Add Appointment" class="formbutton">
                  
              </form>
              
              
              <table id="links">
                  <tr>  
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value ="get_patients">
                    
                    <input type="submit" value="View All Patients">
                </form></td>
                  </tr>
                  
                  <tr>  
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value ="add_patient">
                    
                    <input type="submit" value="Add New Patient">
                </form></td>
                  </tr>
                  
                  <tr>  
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value ="search_patients">
                    
                    <input type="submit" value="Search For Patients">
                </form></td>
                  </tr>
                 
              </table>
          </main>
          
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>
      </div>
 </body>
</html>