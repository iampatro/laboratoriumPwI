<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie</title>
</head>
    
<body>
    
    <?php
        $file = 'plik.txt';
        $tekst = "Hello, World!";
        file_put_contents($file, $tekst);
    ?>
    
</body>
</html>