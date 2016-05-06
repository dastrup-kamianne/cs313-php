<!DOCTYPE html> 
<html> 
<head> 
<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/meta-header.php'; ?>
 </head> 
 <body>
     <?php
     
$name = $gender = $age = $education = '';
$nameErr = $genderErr = $ageErr = $educationErr = '';

$myfile = fopen('results.txt', 'r') or die('Unable to open file!');

$male = fgets($myfile);
$female = fgets($myfile);
$teen = fgets($myfile);
$twenty = fgets($myfile);
$thirty = fgets($myfile);
$forty = fgets($myfile);
$fifty = fgets($myfile);
$sixty = fgets($myfile);
$old = fgets($myfile);

$text = file_get_contents('results.txt');
$text = htmlspecialchars($text);

echo 'info ' . $text;
fclose($myfile);

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
    if ($gender == 'male'){
        $male +=1;
    }
    else {
        $female +=1;
    }
  }

  if (empty($_POST["age"])) {
    $ageErr = "Age is required";
  } else {
    $age = test_input($_POST["age"]);
    if ($age == 'teen'){
        $teen =+1;
    }
    elseif ($age == 'twenty'){
        $twenty +=1;
    }
    elseif ($age == 'thirty'){
        $thirty +=1;
    }
    elseif ($age == 'forty'){
        $forty +=1;
    }
    elseif ($age == 'fifty'){
        $fifty +=1;
    }
    elseif ($age == 'sixty'){
        $sixty +=1;
    }
    else{
        $old +=1;
    }
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

$myfile = fopen('results.txt', 'w') or die('Unable to open file!');

fwrite($myfile,$male);
fwrite($myfile,$female);
fwrite($myfile,$teen);
fwrite($myfile,$twenty);
fwrite($myfile,$thirty);
fwrite($myfile,$forty);
fwrite($myfile,$fifty);
fwrite($myfile,$sixty);
fwrite($myfile,$old);

//$text = file_get_contents('results.txt');
//$text = htmlspecialchars($text);

//echo 'info ' . $text;
fclose($myfile);
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