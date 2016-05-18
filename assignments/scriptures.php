<?php

include 'connect_db.php';

$query = 'SELECT *
          FROM scriptures;';
$statement = $db->prepare($query);
$statement->execute();
$scriptures = $statement->fetchAll();
$statement->closeCursor();





?>

<!DOCTYPE html>
<html lang ="en">

<!-- the head section -->
<head>
    <meta charset="utf-8"/>
    <title>Scriptures</title>
    <!--<link rel="stylesheet" type="text/css"
          href="/recipe_book/main.css">-->
</head>

<!-- the body section -->
<body>
    <h1>Scripture Resources</h1>
    
    <?php foreach ($scriptures as $scripture) {
        echo $scripture['book'] . " " . $scripture['chapter']
                . ':' . $scripture['verse'] . ' - ' 
                . $scripture['content'];
    }
    
    ?>
    
</body>
</html>