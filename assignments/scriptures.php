<?php

$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST'); 
$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT'); 
$dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME'); 
$dbPassword = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$dbName = 'scriptures';

$db = new PDO("mysql:host=$dbHost:$dbPort;dbname=$dbName", $dbUser, $dbPassword); 


$book = filter_input(INPUT_POST, 'book');
$chapter = filter_input(INPUT_POST, 'chapter', FILTER_VALIDATE_INT);
$verse = filter_input(INPUT_POST, 'verse', FILTER_VALIDATE_INT);
$content = filter_input(INPUT_POST, 'content');

$query = 'INSERT INTO scriptures
                 (book, chapter, verse, content)
              VALUES
                 (:book, :chapter, :verse, :content)';
    $statement = $db->prepare($query);
    $statement->bindValue(':book', $book);
    $statement->bindValue(':chapter', $chapter);
    $statement->bindValue(':verse', $verse);
    $statement->bindValue(':content', $content);
    $statement->execute();
    $statement->closeCursor();

$faith = isset($_POST['Faith']);
$sacrifice = isset($_POST['Sacrifice']);
$charity = isset($_POST['Charity']);

if($faith || $charity || $sacrifice){
$query = 'INSERT INTO scrip_tops
                 (scriptureID, topicID)
              VALUES';
$valuesArray = [];
if($faith){
    $valuesArray[] = '(:scripID, 1)';
}
if($sacrifice){
    $valuesArray[] = '(:scripID, 2)';
}
if($charity){
    $valuesArray[] = '(:scripID, 3)';
}
$query = $query . implode(', ', $valuesArray);
                 
    $statement = $db->prepare($query);
    $statement->bindValue(':scripID', $db->lastInsertId());
    $statement->execute();
    $statement->closeCursor();
}


$query = 'SELECT *
          FROM scriptures;';
$statement = $db->prepare($query);
$statement->execute();
$scriptures = $statement->fetchAll();
$statement->closeCursor();


$query = 'SELECT * FROM scrip_tops;';
$statement = $db->prepare($query);
$statement->execute();
$scrip_tops = $statement->fetchAll();
$statement->closeCursor();


$query = 'SELECT scriptureID, topicID, name 
        FROM scrip_tops AS st 
        JOIN topics AS t 
        ON st.topicID = t.id;';
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
    <h1>Scripture Resources</h1>
    
    <?php foreach ($scriptures as $scripture) {
        echo '<strong>' . $scripture['book'] . " " . $scripture['chapter']
                . ':' . $scripture['verse'] . '</strong> - ' 
                . '"' . $scripture['content'] . '"<br>';
        foreach ($topics as $topic){
        if ($topics['scriptureID'] = $scripture['id']){
            echo $topic['name'];
        }
        }
        
    } 
    
    ?>
    
</body>
</html>