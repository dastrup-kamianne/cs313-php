<?php

$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST'); 
$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT'); 
$dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME'); 
$dbPassword = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$dbName = 'scriptures';

$db = new PDO("mysql:host=$dbHost:$dbPort;dbname=$dbName", $dbUser, $dbPassword); 


$query = 'SELECT *
          FROM topics;';
$statement = $db->prepare($query);
$statement->execute();
$topics = $statement->fetchAll();
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
    <h1>Insert a Scripture</h1>
    
    <form action="scriptures.php" method="post">
        <label>Book:</label>
        <input type="text" name="book"><br>
        
        <label>Chapter:</label>
        <input type="text" name="chapter"><br>
        
        <label>Verse:</label>
        <input type="text" name="verse"><br>
        
        <label>Content:</label>
        <textarea name="content" rows="10" cols="50"></textarea>
        
        <?php foreach ($topics as $topic) : ?>
        <label>Topic:</label>
        <input type="checkbox" name="<?php echo $topic['name']; ?>">
        <?php echo $topic['name'];?><br>
        <?php endforeach; ?>
        
        <label>&nbsp;</label>
        <input type="submit" value="Add Scripture">
        <br>
    </form>
    

    
</body>
</html>