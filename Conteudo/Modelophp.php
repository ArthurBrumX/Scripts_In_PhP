<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando a porcentagem</title>
</head>
<body>
    <?php
        // Calculando porcentagem
        $p = 950;
        echo "O preço do produto é R$ $p";
        $p += ($p*20/100);
        echo "<br>e o novo preço com 10% de aumento será de R$ $p";

        
        $p -= ($p*20/100);
        echo "<br>e o novo preço com 10% de desconto será de R$ $p";
    ?>
</body>
</html>