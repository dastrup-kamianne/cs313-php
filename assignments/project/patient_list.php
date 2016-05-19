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
                  <th>Patient Number</th>
                  </tr>
                  
                  
                    <?php foreach ($patient as $pt) {
                    echo '<tr><td><a href="details.php">' . $pt['patientNumber'] . '</a></td>' . 
                        '<td>' . $pt['firstName'] . '</td>' . 
                            '<td>' . $pt['lastName']. '</td></tr>';
                    } ?>
                  
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