<?php

include 'db_connect.php'; 

/*$number = $_POST;

$query = 'SELECT *
          FROM patient
          WHERE patientNumber = :number;';
$statement = $db->prepare($query);
$statement->execute();
$patient = $statement->fetchAll();
$statement->closeCursor();*/

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
              
              Display Patient Details
                  
              
                  
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