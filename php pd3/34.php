<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie</title>
</head>
    
<body>
    
    <?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'motoryzacja';
    
    try {
        $sql = new PDO("mysql:host=$host;dbname=$database", $user, $password, 
              array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    
        $query = 'SELECT marka, model, pojemnosc FROM samochody WHERE id IN (1,3) ';
        $statement = $sql->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();     
    
        foreach($results as $res){
            echo "marka:".$res['marka'] . '<br />';
            echo "model:".$res['model'] . '<br />';
            echo "pojemnosc:".$res['pojemnosc'] . '<br />';
        }
    
    } catch (PDOException $e) {
        die("Blad");
    } 
    ?>
    
</body>
</html>