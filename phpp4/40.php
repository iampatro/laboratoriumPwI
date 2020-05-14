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

    $sql = 'INSERT INTO studenci(id, imie, nazwisko, email, id_rok_studiow)values(1,"Krzysztof", "Rak", "krak@wp.pl", 2)';
    $sql1 = 'INSERT INTO studenci(id, imie, nazwisko, email, id_rok_studiow)values(2,"Jan","Kowalski","jkowalski@wp.pl",2)';
    $sql2 = 'INSERT INTO studenci(id, imie, nazwisko, email, id_rok_studiow)values(3,"Adam","Mak","amak@wp.pl",3)';
    $rsql = 'INSERT INTO rok(id,nazwa,kierunek,stopien)values(1,"uwb","matematyka",1)';
    $rsql1 = 'INSERT INTO rok(id,nazwa,kierunek,stopien)values(2,"uwb","ekonometria",1)';
        
    $stmt = $pdo -> exec($sql);
    $stmt = $pdo -> exec($sql1);
    $stmt = $pdo -> exec($sql2);
    $stmt = $pdo -> exec($rsql);
    $stmt = $pdo -> exec($rsql1);
   
?>
    
</body>
</html>