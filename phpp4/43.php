<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie</title>
    
    <style>
        
    table {
            width: 100%;
            border: 1px solid;
    }
    td {
        border: 1px solid;
        text-align: center;
    }
    th {
        border: 1px solid;
    }

    </style>
    
</head>
    
<body>
    
    <table>
    <tr>
    <th> id </th>
    <th> imie </th>
    <th> nazwisko </th>
    <th> email </th>
    <th>rok</th>
    </tr>
        
<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'uczelnia';
    
    try {
        $db = new PDO("mysql:host=$host;dbname=$database", $user, $password, 
              array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $sql = 'SELECT id, imie, nazwisko, email, id_rok_studiow FROM studenci';
        $stmt = $db -> query($sql) -> fetchAll();
        
        foreach($stmt as $row){
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["imie"] . "</td><td>"
            . $row["nazwisko"]. "</td><td>" . $row["email"] . "</td><td>" . $row["id_rok_studiow"] . "</td></tr>";
        }
        echo '</table>';
    
    } catch (PDOException $e) {
        die('');
    } 
?>
</body>
</html>