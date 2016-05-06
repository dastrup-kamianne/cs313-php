<!DOCTYPE html> 
<html> 
<head> 
<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/meta-header.php'; ?>
 </head> 
 <body>
     <?php
     
$name = $gender = $age = $education = '';
$nameErr = $genderErr = $ageErr = $educationErr = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["age"])) {
    $ageErr = "Age is required";
  } else {
    $age = test_input($_POST["age"]);
  }

  if (empty($_POST["education"])) {
    $educationErr = "Education is required";
  } else {
    $education = implode(', ', $_POST["education"]);
  }

}
function test_input($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}

//chmod('results.txt', 0777);
$myfile = fopen('results.txt', 'a+'); //or die('Unable to open file!');
if(!$myfile){
    echo 'Could not create a file point.';
    exit;
}
else {
    if(!is_writable($myfile)){
        echo 'Cannot write to file [' .$myfile . ']';
        exit;
    }
    else{
        foreach($myfile as $line){
            $write =fwrite($myfile,$line);
        }
        if($write !== FALSE){
            echo 'success. the file was written...';
        }
    }
    $close = fclose($myfile);
}




//fwrite($myfile,$name);
//fwrite($myfile,$gender);
//fwrite($myfile,$age);
//fwrite($myfile,$education);
//echo fread($myfile,filesize('results.txt'));
//fclose($myfile);
?>
      <div class="wrapper">
     <header>
         <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/main-header.php'; ?>
         <h1>Results</h1>
     </header>
          <main>   
              <p>Thank you, <?php echo $name?>!<br>
                  <?php echo $gender . ' is gender.';
                        echo $age . ' is age.';
                        echo $education . ' is education.'; ?><br>
                  
      <?php echo count($male) ?> users are male.<br>
      <?php echo count($female)?> users are like female.<br>
      <?php echo count($teen) ?> users are 0-19.<br>
      <?php echo count($twenty) ?> users are 20-29.<br>
      <?php echo count($thirty) ?> users are 30-39.<br>
      <?php echo count($forty) ?> users are 40-49.<br>
      <?php echo count($fifty) ?> users are 50-59.<br>
      <?php echo count($sixty) ?> users are 60-69.<br>
      <?php echo count($old) ?> users are 70+.<br>
      <?php echo count($hs)?> users have graduated High School.<br>
      <?php echo count($ad)?> users have Associates Degrees.<br>
      <?php echo count($bd)?> users have Bachelors Degrees.<br>
      <?php echo count($md)?> users have Masters Degrees.<br>
      <?php echo count($phd)?> users have a PhD.</p>
        </main>
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>
      </div>
 </body>
</html>