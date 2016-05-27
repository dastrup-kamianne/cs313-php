<?php
include ('db_connect.php');

if ($action == "edit_patient_db"){
    $query = 'UPDATE patient
             SET firstName = :fname
             , lastName = :lname
             , address = :streetAddress
             , city = :city
             , state = :state
             , zipcode = :zipCode
             , phone = :phone
             , email = :email
             WHERE patientNumber = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':fname', $fname);
    $statement->bindValue(':lname', $lname);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':state', $state);
    $statement->bindValue(':zipcode', $zipcode);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement->closeCursor();
}

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
$apptHistory = $statement->fetchAll();
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
              
              <table class="details">
                  <tr><th>First Name</th>
                      <th>Last Name</th>
                      <th>Address</th>
                      <th>City, State, Zip</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>&nbsp</th>
                  </tr>
                  
                  <tr>
                      <td><?php echo $patient['firstName'];?></td>
                      <td><?php echo $patient['lastName'];?></td>
                      <td><?php echo $patient['streetAddress'];?></td>
                      <td><?php echo $patient['city'] . ', ' . $patient['state'] . ' ' . $patient['zipCode'];?></td>
                      <td><?php echo $patient['email'];?></td>
                      <td><?php echo $patient['phone'];?></td>
                      <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value ="patient_edit">
                    <input type="hidden" name="patientNumber"
                           value="<?php echo $patient['patientNumber']; ?>">
                    <input type="submit" value="Edit">
                </form></td>
                  </tr>
              </table><br>
              
              <table class="details">
                  <tr><th>Appt Date</th>
                      <th>Appt Type</th>
                      <th>&nbsp</th>
                  </tr>
                  <?php foreach ($apptHistory as $appt) : ?>
                  <tr>
                      <td><?php echo $appt['apptDate'];?></td>
                      <td><?php echo $appt['apptType'];?></td>
                      <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value ="add_appt">
                    <input type="hidden" name="patientNumber"
                           value="<?php echo $patient['patientNumber']; ?>">
                    <input type="submit" value="Add Appt">
                </form></td>
                  </tr>
                  <?php endforeach; ?>
              </table><br>
              
              <table class="details">
                  <tr><th>Contact Method</th>
                      <th>Notes</th>
                      <th>&nbsp</th>
                  </tr>
                  <tr>
                      <td><?php echo $preferences['contactMethod'];?></td>
                      <td><?php echo $preferences['notes'];?></td>
                      <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value ="preference_edit">
                    <input type="hidden" name="patientNumber"
                           value="<?php echo $patient['patientNumber']; ?>">
                    <input type="submit" value="Edit">
                </form></td>
                  </tr>
              </table><br>

                  
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