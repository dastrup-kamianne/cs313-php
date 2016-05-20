<?php
include ('db_connect.php');


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