<!DOCTYPE html>

<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>zadanie</title>
    
</head>
    
<body>
    
<?php
        $host =  'localhost';
        $user = 'root';
        $password = '';
        $dbname = 'uczelnia';
    
        $dsn = 'mysql:host='. $host .';dbname='. $dbname;
        $pdo = new PDO($dsn, $user, $password);
        $sql = 'DELETE FROM studenci WHERE id= 2';
        $stmt = $pdo -> prepare($sql);
?>
    
</body>
</html>