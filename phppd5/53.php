<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>zadanie</title>
    
</head>
<body>
<?php
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'uczelnia';
        
        try {
            $db = new PDO("mysql:host=$host;dbname=$database", $user, $password, 
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));


            if(isset($_POST['b'])){
                $id = $_POST['id'];
                
                $sql = 'DELETE from studenci WHERE id = :id';
                
                $stmt = $db -> prepare($sql);
                $stmt -> execute(['id' => $id]);
            }          
        
        } catch (PDOException $e) {
            die("");
        } 
?>

</body>
</html>