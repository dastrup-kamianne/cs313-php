<?php
require 'password.php';
require 'connect_db2.php';

if ((isset($_POST['username'])) && (isset($_POST['password']))){


$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$query = 'INSERT INTO users (username, password)
         VALUES( :username, :passwordHash);';
$statement = $db->prepare($query);
$statement->bindValue(':username', $username);
$statement->bindValue(':passwordHash', $passwordHash);
$statement->execute();
$statement->closeCursor();

$_SESSION['username'] = $username;

header('Location:homepage.php');
die();


}


?>

<!DOCTYPE html> 
<html> 
 <head> 
 
  </head> 

  <body>
      
     <header>
         
         <h1>Sign Up</h1>
     </header>
          
          <main>
              <p>To sign up for this site, please enter a username and password below.</p>
              
              <form action="signup.php" method="post">
                  
                  <label>Username:</label>
                  <input type="text" name="username" ><br>
                  
                  <label>Password:</label>
                  <input type="password" name="password"><br>
                  
                  <input type="submit" value="Sign Up">
                  
              </form>
              
              
              
          </main>
          
    
      
 </body>
</html>