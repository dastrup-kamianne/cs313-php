<?php

$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST'); 
$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT'); 
$dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME'); 
$dbPassword = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$dbName = 'scriptures';

$db = new PDO("mysql:host=$dbHost:$dbPort;dbname=$dbName", $dbUser, $dbPassword); 


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
        echo '<strong>' . $scripture['book'] . " " . $scripture['chapter']
                . ':' . $scripture['verse'] . '</strong> - ' 
                . '"' . $scripture['content'] . '"<br>';
    }
    
    ?>
    
</body>
</html>