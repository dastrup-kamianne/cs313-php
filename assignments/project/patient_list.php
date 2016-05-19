<?php

include 'db_connect.php'; 

$query = 'SELECT *
          FROM patient;';
$statement = $db->prepare($query);
$statement->execute();
$patient = $statement->fetchAll();
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
                  
                  
                    <?php foreach ($patient as $pt) : ?>
            <tr>
                
                <td><?php echo $pt['firstName']; ?></td>
                <td><?php echo $pt['lastName']; ?></td>
                
                <td><form action="details.php" method="post">
                    <input type="hidden" name="patientNumber"
                           value="<?php echo $pt['patientNumber']; ?>">
                    <input type="submit" value="View Details">
                </form></td>
                <!--<td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="show_edit_form">
                    <input type="hidden" name="recipe_id"
                           value="insert php">
                    <input type="submit" value="Edit">
                </form></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_recipe">
                    <input type="hidden" name="recipe_id"
                           value="insert php">
                    <input type="submit" value="Delete">
                </form></td>-->
            </tr>
            <?php endforeach; ?>
                  
              </table>
                  
              <ul> 
                  <li><a href="patient_list.php">View all patients</a></li>
                  <li><a href="patient_search.php">Search for patients</a></li>
              </ul>
              
          </main>
          
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>
      </div>
 </body>
</html>