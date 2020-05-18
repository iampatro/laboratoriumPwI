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
            $sql = 'SELECT id, imie, nazwisko, email, id_rok_studiow 
                    from studenci';
            $stmt = $db -> prepare($sql);
            $stmt -> execute();
            
            $r = $stmt -> fetchAll();
            
        
        } catch (PDOException $e) {
            die("");
        } 
?>
    
 <form action="53.php" method="post">
<select name =  'id'>
    <?php
        
            foreach($r as $o){ 
        ?>
        <option value = "<?php echo $o["id"]; ?>">
            <?php echo $o ["imie"]." 
            ".$o ["nazwisko"]; ?>
            
        </option>
        <?php
                
            }
    ?>
    </select>
        
      <input type="submit" name = "b" value = "Usuń">
    </form>

</body>
    
</html>