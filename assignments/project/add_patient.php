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
         <h1>Add New Patient</h1>
     </header>
          
          <main>
              
              <form action="." method="post" id="aligned">
                  <input type="hidden" name="action" value ="add_patient_db">
                  
                  <label>First Name:</label>
                  <input type="text" name="fname" ><br>
                  
                  <label>Last Name:</label>
                  <input type="text" name="lname"><br>
                  
                  <label>Street Address:</label>
                  <input type="text" name="address"><br>
                  
                  <label>City:</label>
                  <input type="text" name="city"><br>
                  
                  <label>State:</label>
                  <input type="text" name="state" placeholder="XX"><br>
                  
                  <label>Zip Code:</label>
                  <input type="text" name="zipcode"><br>
                  
                  <label>Phone:</label>
                  <input type="text" name="phone" placeholder="XXXXXXXXX"><br>
                  
                  <label>Email:</label>
                  <input type="text" name="email"><br>
                  
                  <label>Appointment Date:</label>
                  <input type="text" name="apptDate" placeholder="YYYY-MM-DD"><br>
                  
                  <label>Appointment Type:</label>
                  <input type="text" name="apptType"><br>
                  
                  <label>Contact Method:</label>
                  <input type="text" name="method" ><br>
                  
                  <label>Notes:</label>
                  <textarea name="notes" rows="10" cols="50"></textarea><br>
                  
                  <label></label>
                  <input type="submit" value="Add" class="formbutton">
                  
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