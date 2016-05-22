<?php
include ('db_connect.php');



if ($lname !== NULL){
$query = 'SELECT * FROM patient
         WHERE lastName = :lname';
$statement = $db->prepare($query);
$statement->bindValue(":lname", $lname);
$statement->execute();
$patientln = $statement->fetchAll();
$statement->closeCursor();
}

if ($fname !== NULL){
$query = 'SELECT * FROM patient
         WHERE firstName = :fname';
$statement = $db->prepare($query);
$statement->bindValue(":fname", $fname);
$statement->execute();
$patientfn = $statement->fetchAll();
$statement->closeCursor();
}

if ($date == '3months'){
$query = 'SELECT * FROM apptHistory
         WHERE date >= SYSDATE + 90';
$statement = $db->prepare($query);
$statement->bindValue(":date", $date);
$statement->execute();
$patientd = $statement->fetchAll();
$statement->closeCursor();}

elseif ($date == '6months'){
$query = 'SELECT * FROM apptHistory
         WHERE date >= SYSDATE + 180';
$statement = $db->prepare($query);
$statement->bindValue(":date", $date);
$statement->execute();
$patientd = $statement->fetchAll();
$statement->closeCursor();}

elseif ($date == '9months'){
$query = 'SELECT * FROM apptHistory
         WHERE date >= SYSDATE + 270';
$statement = $db->prepare($query);
$statement->bindValue(":date", $date);
$statement->execute();
$patientd = $statement->fetchAll();
$statement->closeCursor();}

elseif ($date == '1year'){
$query = 'SELECT * FROM apptHistory
         WHERE date >= SYSDATE + 365';
$statement = $db->prepare($query);
$statement->bindValue(":date", $date);
$statement->execute();
$patientd = $statement->fetchAll();
$statement->closeCursor();}



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
                  <?php foreach ($patientln as $patient) : ?>
                  <tr>
                      <td><?php echo $patient['firstName'];?></td>
                      <td><?php echo $patient['lastName'];?></td>
                      <td><?php echo $patient['streetAddress'];?></td>
                      <td><?php echo $patient['city'] . ', ' . $patient['state'] . ' ' . $patient['zipCode'];?></td>
                      <td><?php echo $patient['email'];?></td>
                      <td><?php echo $patient['phone'];?></td>
                  </tr>
                  <?php endforeach; ?>
              </table>
              
              <table>
                  <?php foreach ($patientfn as $patient) : ?>
                  <tr>
                      <td><?php echo $patient['firstName'];?></td>
                      <td><?php echo $patient['lastName'];?></td>
                      <td><?php echo $patient['streetAddress'];?></td>
                      <td><?php echo $patient['city'] . ', ' . $patient['state'] . ' ' . $patient['zipCode'];?></td>
                      <td><?php echo $patient['email'];?></td>
                      <td><?php echo $patient['phone'];?></td>
                  </tr>
                  <?php endforeach; ?>
              </table>
              
              <table>
                  <?php foreach ($patientd as $date) : ?>
                  <tr>
                      <td>Date: <?php echo $date['apptDate'];?></td>
                      <td>Type: <?php echo $date['apptType'];?></td>
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