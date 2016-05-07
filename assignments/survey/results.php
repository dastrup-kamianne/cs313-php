<!DOCTYPE html> 
<html> 
<head> 
<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/meta-header.php'; ?>
 </head> 
 <body>
     <?php
     
$kristoff = $olaf = $hans = $oaken = $anna = $elsa = $bulda = $queen = 0;
$name = test_input($_POST["name"]);
$gender = test_input($_POST["gender"]);


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
 $food = test_input($_POST["food"]);
  if ($food == 'kristoff'){
      $kristoff += 1;
  }elseif($food == 'olaf'){
      $olaf += 1;
  }elseif($food == 'hans'){
      $hans += 1;
  }elseif($food == 'oaken'){
      $oaken += 1;
  }elseif($food == 'anna'){
      $anna += 1;
  }elseif($food == 'elsa'){
      $elsa += 1;
  }elseif($food == 'queen'){
      $queen += 1;
  }else{
      $bulda += 1;
  }
  
  $hair = test_input($_POST["hair"]);
  if ($hair == 'kristoff'){
      $kristoff += 1;
  }elseif($hair == 'olaf'){
      $olaf += 1;
  }elseif($hair == 'hans'){
      $hans += 1;
  }elseif($hair == 'oaken'){
      $oaken += 1;
  }elseif($hair == 'anna'){
      $anna += 1;
  }elseif($hair == 'elsa'){
      $elsa += 1;
  }elseif($hair == 'queen'){
      $queen += 1;
  }else{
      $bulda += 1;
  }
  
  $activity = test_input($_POST["activity"]);
  if ($activity == 'kristoff'){
      $kristoff += 1;
  }elseif($activity == 'olaf'){
      $olaf += 1;
  }elseif($activity == 'hans'){
      $hans += 1;
  }elseif($activity == 'oaken'){
      $oaken += 1;
  }elseif($activity == 'anna'){
      $anna += 1;
  }elseif($activity == 'elsa'){
      $elsa += 1;
  }elseif($activity == 'queen'){
      $queen += 1;
  }else{
      $bulda += 1;
  } 
}
function test_input($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}
echo $name . $gender . $food . $hair . $activity;
echo 'Anna' . $anna . 'Elsa' . $elsa . 'Queen' . $queen . 'Bulda' . $bulda;

$kristoff = intval($kristoff);
$olaf = intval($olaf);
$hans = intval($hans);
$oaken = intval($oaken);
$anna = intval($anna);
$elsa = intval($elsa);
$queen = intval($queen);
$bulda = intval($bulda);

if ($gender == 'male'){
    if($kristoff >= $olaf && $kristoff >= $hans && $kristoff >= $oaken){
    $answer == 'Kristoff';
    }elseif($olaf > $kristoff && $olaf > $hans && $olaf > $oaken){
    $answer == 'Olaf';
    }elseif($hans > $kristoff && $hans > $olaf && $hans > $oaken){
    $answer == 'Hans';
    }else{
    $answer == 'Oaken';}
}
elseif ($gender == 'female'){
    if($anna >= $elsa && $anna >= $queen && $anna >= $bulda){
    $answer == 'Anna';
    }elseif($elsa > $anna && $elsa > $queen && $elsa > $bulda){
    $answer == 'Elsa';
    }elseif($queen > $anna && $queen > $elsa && $queen > $bulda){
    $answer == 'Queen Iduna';   
    }else{
    $answer == "Bulda";}
}
echo 'answer is ' . $answer;
var_dump($anna);

$myfile = fopen('results.txt', 'r') or die('Unable to open file!');
$kcount = fgets($myfile);
$olcount = fgets($myfile);
$hcount = fgets($myfile);
$oacount = fgets($myfile);
$acount = fgets($myfile);
$ecount = fgets($myfile);
$qcount = fgets($myfile);
$bcount = fgets($myfile);
fclose($myfile);


switch($answer){
    case 'Kristoff':
        $kcount += 1;
        break;
    case 'Olaf':
        $olcount += 1;
        break;
    case 'Hans':
        $hcount += 1;
        break;
    case 'Oaken':
        $oacount += 1;
        break;
    case 'Anna':
        $acount += 1;
        break;
    case 'Elsa':
        $ecount += 1;
        break;
    case 'Queen Iduna':
        $qcount += 1;
        break;
    case 'Bulda':
        $bcount += 1;
        break;
}        
        



$myfile = fopen('results.txt', 'w') or die('Unable to open file!');

fwrite($myfile,$kcount);
fwrite($myfile,$olcount);
fwrite($myfile,$hcount);
fwrite($myfile,$oacount);
fwrite($myfile,$acount);
fwrite($myfile,$ecount);
fwrite($myfile,$qcount);
fwrite($myfile,$bcount);

fclose($myfile);

?>
      <div class="wrapper">
     <header>
         <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/main-header.php'; ?>
         <h1>Results</h1>
     </header>
          <main>   
              <p><?php echo $name?>, you are most like <?php echo $answer?>!</p>
                                    
      <?php echo $kcount ?> users are like Kristoff.<br>
      <?php echo $olcount?> users are like Olaf.<br>
      <?php echo $hans ?> users are like Hans.<br>
      <?php echo $oacount ?> users are like Oaken.<br>
      <?php echo $acount ?> users are like Anna.<br>
      <?php echo $ecount ?> users are like Elsa.<br>
      <?php echo $qcount ?> users are like Queen Irunda.<br>
      <?php echo $bcount ?> users are Bulda.<br>
      
        </main>
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>
      </div>
 </body>
</html>