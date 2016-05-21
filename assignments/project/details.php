<?php
include ('db_connect.php');

$patient_id = filter_input(INPUT_POST, 'patientNumber', 
            FILTER_VALIDATE_INT);

$query = 'SELECT * FROM patient
         WHERE patientNumber = :patient_id';
$statement = $db->prepare($query);
$statement->bindValue(":patient_id", $patient_id);
$statement->execute();
$patient = $statement->fetch();
$statement->closeCursor();

$query = 'SELECT * FROM apptHistory
         WHERE patientNumber = :patient_id';
$statement = $db->prepare($query);
$statement->bindValue(":patient_id", $patient_id);
$statement->execute();
$apptHistory = $statement->fetch();
$statement->closeCursor();

$query = 'SELECT * FROM preferences
         WHERE patientNumber = :patient_id';
$statement = $db->prepare($query);
$statement->bindValue(":patient_id", $patient_id);
$statement->execute();
$preferences = $statement->fetch();
$statement->closeCursor();

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
         <h1>Dental Patient List</h1>
     </header>
          
          <main>
              
              <table>
                  <tr><th>First Name</th>
                      <th>Last Name</th>
                      <th>Address</th>
                      <th>City, State, Zip</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                  </tr>
                  
                  <tr>
                      <td><?php echo $patient['firstName'];?></td>
                      <td><?php echo $patient['lastName'];?></td>
                      <td><?php echo $patient['streetAddress'];?></td>
                      <td><?php echo $patient['city'] . ', ' . $patient['state'] . ' ' . $patient['zipCode'];?></td>
                      <td><?php echo $patient['email'];?></td>
                      <td><?php echo $patient['phone'];?></td>
                  </tr>
              </table>
              
              <table>
                  <tr><th>Appt Date</th>
                      <th>Appt Type</th>
                  </tr>
                  <?php foreach ($apptHistory as $appt) : ?>
                  <tr>
                      <td><?php echo $appt['apptDate'];?></td>
                      <td><?php echo $appt['apptType'];?></td>
                  </tr>
                  <?php endforeach; ?>
              </table>
              
              <table>
                  <tr><th>Contact Method</th>
                      <th>Notes</th>
                  </tr>
                  <tr>
                      <td><?php echo $preferences['contactMethod'];?></td>
                      <td><?php echo $preferences['notes'];?></td>
                  </tr>
              </table>

                  
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