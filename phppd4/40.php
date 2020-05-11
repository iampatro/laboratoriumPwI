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

    $id = 1;
    $fname = "Krzysztof";
    $lname = "Rak";
    $email = "krak@wp.pl";
    $id_rok_studiow = 2;

    $id1 = 2;
    $fname1 = "Jan";
    $lname1 = "Kowalski";
    $email1 = "jkowalski@wp.pl";
    $id_rok_studiow1 = 4;

    $id2 = 3;
    $fname2 = "Adam";
    $lname2 = "Mak";
    $email2 = "amak@wp.pl";
    $id_rok_studiow2 = 3;

    $rid = 1;
    $rnazwa = "uwb";
    $rkierunek = "matematyka";
    $rstopien = 1;

    $rid1 = 2;
    $rnazwa1 = "uwb";
    $rkierunek1 = "ekonometria";
    $rstopien1 = 1;

    $sql = 'INSERT INTO studenci 
        (id, imie, nazwisko, email, id_rok_studiow)
        values(:id, :imie, :nazwisko, :email, :id_rok_studiow)';

    $rsql = 'INSERT INTO rok 
        (id, nazwa, kierunek, stopien)
        values(:id, :nazwa, :kierunek, :stopien)';

    $stmt = $pdo -> prepare($sql);
    $stmt -> execute(['id' => $id, 
                          'imie' => $fname, 
                          'nazwisko' => $lname, 
                          'email' => $email, 
                          'id_rok_studiow' => $id_rok_studiow]);
    $stmt -> execute(['id' => $id1,
                          'imie' => $fname1, 
                          'nazwisko' => $lname1, 
                          'email' => $email1, 
                          'id_rok_studiow' => $id_rok_studiow1]);
    $stmt -> execute(['id' => $id2, 
                          'imie' => $fname2, 
                          'nazwisko' => $lname2, 
                          'email' => $email2, 
                          'id_rok_studiow' => $id_rok_studiow2]);


    $stmt = $pdo -> prepare($rsql);
    $stmt -> execute(['id' => $rid, 
                          'nazwa' => $rnazwa, 
                          'kierunek' => $rkierunek, 
                          'stopien' => $rstopien]);
    $stmt -> execute(['id' => $rid1, 
                          'nazwa' => $rnazwa1, 
                          'kierunek' => $rkierunek1, 
                          'stopien' => $rstopien1]);
    

?>
    
</body>
</html>