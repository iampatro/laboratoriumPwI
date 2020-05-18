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

        $imie = $_GET["imie"];
        $nazwisko = $_GET["nazwisko"];
        $email = $_GET["email"];
        $rok = $_GET["id_rok_studiow"];
    

            $dsn = 'mysql:host='. $host .';dbname='. $dbname;
        $pdo = new PDO($dsn, $user, $password);
    

        $sql = 'INSERT into studenci (imie, nazwisko, email, id_rok_studiow)
             values(:imie, :nazwisko,
             :email, :id_rok_studiow)';
    
        $stmt = $pdo -> prepare($sql);

        $stmt -> execute(['imie' => $imie, 
                          'nazwisko' => $nazwisko ,
                          'email' => $email,
                          'id_rok_studiow' => $rok]);
?>
</body>
</html>