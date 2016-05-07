<!DOCTYPE html> 
<html> 
<head> 
<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/meta-header.php'; ?>
 </head> 
 <body>
     <?php
     
$kristoff = $olaf = $hans = $oaken = $anna = $elsa = $bulda = $queen = 0;
$answer = '';


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
 $name = test_input($_POST["name"]);
 $gender = test_input($_POST["gender"]);
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
    $answer = 'Kristoff';
    }elseif($olaf > $kristoff && $olaf > $hans && $olaf > $oaken){
    $answer = 'Olaf';
    }elseif($hans > $kristoff && $hans > $olaf && $hans > $oaken){
    $answer = 'Hans';
    }else{
    $answer = 'Oaken';}
}
elseif ($gender == 'female'){
    if($anna >= $elsa && $anna >= $queen && $anna >= $bulda){
    $answer = 'Anna';
    }elseif($elsa > $anna && $elsa > $queen && $elsa > $bulda){
    $answer = 'Elsa';
    }elseif($queen > $anna && $queen > $elsa && $queen > $bulda){
    $answer = 'Queen_Iduna'; 
    }else{
    $answer = "Bulda";
    }
}


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
    case 'Queen_Iduna':
        $qcount += 1;
        break;
    case 'Bulda':
        $bcount += 1;
        break;
}        
        



$myfile = fopen('results.txt', 'w') or die('Unable to open file!');

if($kcount == 0){
    fwrite($myfile,$kcount);
}else{
fwrite($myfile,$kcount."\r\n");}

if($olcount == 0){
    fwrite($myfile,$olcount);
}else{
fwrite($myfile,$olcount."\r\n");}

if($hcount == 0){
    fwrite($myfile,$hcount);
}else{
fwrite($myfile,$hcount."\r\n");}

if($oacount == 0){
    fwrite($myfile,$oacount);
}else{
fwrite($myfile,$oacount."\r\n");}

if($acount == 0){
    fwrite($myfile,$acount);
}else{
fwrite($myfile,$acount."\r\n");}

if($ecount == 0){
    fwrite($myfile,$ecount);
}else{
fwrite($myfile,$ecount."\r\n");}

if($qcount == 0){
    fwrite($myfile,$qcount);
}else{
fwrite($myfile,$qcount."\r\n");}

if($bcount == 0){
    fwrite($myfile,$bcount);
}else{
fwrite($myfile,$bcount."\r\n");}

fclose($myfile);

?>
      <div class="wrapper">
     <header>
         <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/main-header.php'; ?>
         <h1>Results</h1>
     </header>
          <main>   
              <p><?php echo $name?>, you are most like <?php echo $answer?>!</p>
      
              <div id='results'>
      <img src='Kristoff.jpeg' alt='Kristoff' class='frozen'>
      <?php echo $kcount ?> users are like Kristoff.<br>
      <img src='Olaf.jpeg' alt='Olaf' class='frozen'>
      <?php echo $olcount?> users are like Olaf.<br>
      <img src='Hans.jpeg' alt='Hans' class='frozen'>
      <?php echo $hans ?> users are like Hans.<br>
      <img src='Oaken.jpg' alt='Oaken' class='frozen'>
      <?php echo $oacount ?> users are like Oaken.<br>
      <img src='Anna.jpeg' alt='Anna' class='frozen'>
      <?php echo $acount ?> users are like Anna.<br>
      <img src='Elsa.jpeg' alt='Elsa' class='frozen'>
      <?php echo $ecount ?> users are like Elsa.<br>
      <img src='Queen_Iduna.png' alt='Queen Iduna' class='frozen'>
      <?php echo $qcount ?> users are like Queen Iduna.<br>
      <img src='Bulda.jpg' alt='Bulda' class='frozen'>
      <?php echo $bcount ?> users are Bulda.<br>

              </div>
        </main>
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>
      </div>
 </body>
</html>