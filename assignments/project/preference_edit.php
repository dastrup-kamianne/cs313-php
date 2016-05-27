<?php
include ('db_connect.php');


$patient_id = filter_input(INPUT_POST, 'patientNumber', 
            FILTER_VALIDATE_INT);

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
                  <input type="hidden" name="action" value ="edit_pref_db">
                  
                  <input type="hidden" name="id" value ="<?php echo $preferences['patientNumber'];?>">
                  
                  <label>Contact Method:</label>
                  <input type="text" name="method" value="<?php echo $preferences['contactMethod'];?>"><br>
                  
                  <label>Notes:</label>
                  <textarea name="notes"><?php echo $preferences['notes'];?></textarea><br>
                  
                  <input type="submit" value="Make Changes">
                  
              </form>
              
          </main>
          
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>
      </div>
 </body>
</html>