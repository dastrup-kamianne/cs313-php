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
         <h1>Edit Patient</h1>
     </header>
          
          <main>
              
              <form action="." method="post">
                  <input type="hidden" name="action" value ="edit_patient_db">
                  
                  <input type="hidden" name="id" value ="<?php echo $patient['patientNumber'];?>">
                  
                  <label>First Name:</label>
                  <input type="text" name="fname" value="<?php echo $patient['firstName'];?>"><br>
                  
                  <label>Last Name:</label>
                  <input type="text" name="lname" value="<?php echo $patient['lastName'];?>"><br>
                  
                  <label>Street Address:</label>
                  <input type="text" name="address" value="<?php echo $patient['streetAddress'];?>"><br>
                  
                  <label>City:</label>
                  <input type="text" name="city" value="<?php echo $patient['city'];?>"><br>
                  
                  <label>State:</label>
                  <input type="text" name="state" value="<?php echo $patient['state'];?>"><br>
                  
                  <label>Zip Code:</label>
                  <input type="text" name="zipcode" value="<?php echo $patient['zipCode'];?>"><br>
                  
                  <label>Phone:</label>
                  <input type="text" name="phone" value="<?php echo $patient['phone'];?>"><br>
                  
                  <label>Email:</label>
                  <input type="text" name="email" value="<?php echo $patient['email'];?>"><br>
                  
                  <input type="submit" value="Make Changes">
                  
              </form>
              
          </main>
          
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>
      </div>
 </body>
</html>