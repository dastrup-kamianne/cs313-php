<?php
include ('db_connect.php');

if ($action == 'add_patient_db'){
    
$query = 'INSERT INTO patient (firstName, lastName, streetAddress, city, state, zipCode, email, phone)
         VALUES( :fname, :lname, :address, :city, :state, :zipcode, :email, :phone);';
$statement = $db->prepare($query);
$statement->bindValue(':fname', $fname);
$statement->bindValue(':lname', $lname);
$statement->bindValue(':address', $address);
$statement->bindValue(':city', $city);
$statement->bindValue(':state', $state);
$statement->bindValue(':zipcode', $zipcode);
$statement->bindValue(':email', $email);
$statement->bindValue(':phone', $phone);
$statement->execute();
$statement->closeCursor();

$query = 'SELECT patientNumber FROM patient
         WHERE firstName = :fname
         AND lastName = :lname
         AND phone = :phone;';
$statement = $db->prepare($query);
$statement->bindValue(":fname", $fname);
$statement->bindValue(":lname", $lname);
$statement->bindValue(":phone", $phone);
$statement->execute();
$patient_id = $statement->fetch();
$statement->closeCursor();

$patient_id = $patient_id[0];
echo $patient_id . 'echo';
print_r($patient_id);

//fix array being returned into variable

/*
$query = 'INSERT INTO apptHistory (patientNumber, apptDate, apptType)
         VALUES(:patient_id, :apptDate, :apptType);';
$statement = $db->prepare($query);
$statement->bindValue(':patient_id', $patient_id);
$statement->bindValue(':apptDate', $apptDate);
$statement->bindValue(':apptType', $apptType);
$statement->execute();
$statement->closeCursor();

$query = 'INSERT INTO preferences (patientNumber, contactMethod, notes)
         VALUES(:patient_id, :method, :notes);';
$statement = $db->prepare($query);
$statement->bindValue(':patient_id', $patient_id);
$statement->bindValue(':method', $method);
$statement->bindValue(':notes', $notes);
$statement->execute();
$statement->closeCursor();*/
}

$query = 'SELECT * FROM patient
         ORDER BY patientNumber';
$statement = $db->prepare($query);
$statement->execute();
$patients = $statement->fetchAll();
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
              
              <table id="patientlist">
                  <tr>
                  
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>&nbsp</th>
                  </tr>
                  
                  
                    <?php foreach ($patients as $pt) : ?>
            <tr>
                
                <td><?php echo $pt['firstName']; ?></td>
                <td><?php echo $pt['lastName']; ?></td>
                
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value ="patient_details">
                    <input type="hidden" name="patientNumber"
                           value="<?php echo $pt['patientNumber']; ?>">
                    <input type="submit" value="View Details">
                </form></td>
                
                
            </tr>
            <?php endforeach; ?>
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