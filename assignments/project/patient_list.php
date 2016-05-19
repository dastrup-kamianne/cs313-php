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
              
              <table>
                  <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  </tr>
                  
                  
                    <?php foreach ($patient as $pt) {
                    echo '<tr><td>' . $pt['firstName'] . '</td>' . 
                            '<td>' . $pt['lastName']. '</td></tr>';
                    } ?>
                  
              </table>
                  
              <a href="patient_list">View all patients</a>
              <a href="patient_search">Search for patients</a>
              
          </main>
          
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>
      </div>
 </body>
</html>