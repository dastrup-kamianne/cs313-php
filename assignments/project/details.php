<?php

include 'db_connect.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
 $number = test_input($_POST["patientNumber"]);
 $patient = display_details($number);
  
 function test_input($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}

function display_details($number) {
    global $db;
    $query = 'SELECT * FROM patient
             WHERE patientNumber = :patientNumber;';
$statement = $db->prepare($query);
$statement->bindValue(':patientNumber', $patientNumber);
$statement->execute();
$patient = $statement->fetch();
$statement->closeCursor();
return $patient;

}
}

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