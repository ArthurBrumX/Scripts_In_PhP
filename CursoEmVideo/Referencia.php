<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>referencias</title>
</head>
<body>
    <?php
        $a = 3;
        $b = &$a; // Esta criando uma referencia para a varial 
        $b += 5;
        echo "A variavel a vale $a";
        echo "<br>A variavel b vale $b";
    ?>
    
</body>
</html>