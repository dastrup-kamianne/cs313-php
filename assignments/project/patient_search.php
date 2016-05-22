<?php


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
              <form action="index.php" method="post" id="lname_form">
                  <input type="hidden" name="action" value="search">
                  
                  <label>Search by last name:</label>
                  <input type ="text" name="lname"><br>
                  
                  
              
                  <label>Search by first name:</label>
                  <input type ="text" name="fname"><br>
                  
                  
              
                  <label>Search by date:</label>
                  <select name="date">
                      <option value=""></option>
                      <option value="3months">3 Months</option>
                      <option value="6months">6 Months</option>
                      <option value="9months">9 Months</option>
                      <option value="1year">1 Year</option>
                  </select><br>
                  
                  <input type="submit" Value="Search">
              </form>
              
                  
              
                  
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