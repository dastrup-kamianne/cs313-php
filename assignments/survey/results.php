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

echo 'test male type is ';
var_dump($male);

echo 'info ' . $text;
fclose($myfile);

echo 'male ' . $male;
echo 'female ' . $female;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
        
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    //$gender = test_input($_POST["gender"]);
    if ($gender == 'male'){
        $male = intval($male) + 1;
        echo 'test male type after conversion ';
        var_dump($male);

    }
    else {
        $female = intval($female) + 1;
    }
  }

  if (empty($_POST["age"])) {
    $ageErr = "Age is required";
  } else {
    $age = test_input($_POST["age"]);
    if ($age == 'teen'){
        $teen = (int)$teen + 1;
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

echo 'test male type is ';
var_dump($male);

$myfilew = fopen('results.txt', 'w') or die('Unable to open file!');

fwrite($myfilew,$male.\n);
fwrite($myfilew,$female.\n);
fwrite($myfilew,$teen);
fwrite($myfilew,$twenty);
fwrite($myfilew,$thirty);
fwrite($myfilew,$forty);
fwrite($myfilew,$fifty);
fwrite($myfilew,$sixty);
fwrite($myfilew,$old);

$text = file_get_contents('results.txt');
$text = htmlspecialchars($text);

echo 'info ' . $text;
fclose($myfile);

echo 'male ' . $male;
echo 'female ' . $female;
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
                  
      <?php echo $male ?> users are male.<br>
      <?php echo $female?> users are female.<br>
      <?php echo $teen ?> users are 0-19.<br>
      <?php echo $twenty ?> users are 20-29.<br>
      <?php echo $thirty ?> users are 30-39.<br>
      <?php echo $forty ?> users are 40-49.<br>
      <?php echo $fifty ?> users are 50-59.<br>
      <?php echo $sixty ?> users are 60-69.<br>
      <?php echo $old ?> users are 70+.<br>
      <?php echo $hs?> users have graduated High School.<br>
      <?php echo $ad?> users have Associates Degrees.<br>
      <?php echo $bd?> users have Bachelors Degrees.<br>
      <?php echo $md?> users have Masters Degrees.<br>
      <?php echo $phd?> users have a PhD.</p>
        </main>
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>
      </div>
 </body>
</html>