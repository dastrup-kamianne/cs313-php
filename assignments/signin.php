<?php
require 'password.php';
require 'connect_db2.php';

if (isset ($_POST['user']) && isset($_POST['pass'])){
$user = filter_input(INPUT_POST, 'user');
$pass = filter_input(INPUT_POST, 'pass');

if (password_verify($pass, $passwordHash)){
    header('Location:homepage.php');
}
else{
    $errormessage = "Username and password don't match. Try again.";
    $_SESSION['error'] = $errormessage;
    header('Location:signin.php');
    
}

}

?>

<!DOCTYPE html> 
<html> 
 <head> 
 
  </head> 

  <body>
      
     <header>
         
         <h1>Sign In Page</h1>
     </header>
          
          <main>
              <p>Please enter your username and password below.</p>
              <p>If you do not have a username and password, 
                  <a href="signup.php">sign up here.</a> 
                  
              <p><?php if(isset ($_SESSION['error'])){
                  echo $_SESSION['error'];
              }?></p>
                  
              
              <form action="signin.php" method="post">
                  
                  <label>Username:</label>
                  <input type="text" name="user" ><br>
                  
                  <label>Password:</label>
                  <input type="password" name="pass"><br>
                  
                  <input type="submit" value="Log In">
                  
              </form>
              
              
              
          </main>
          
    
      </div
 </body>
</html>