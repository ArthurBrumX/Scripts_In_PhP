<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis de Variaveis</title>
</head>
<body>
    <?php
    // Variaveis de variaveis, basicamente sao variais q sao criadas a partir do conteudo de outra variavel;
    $site = "CursoEmVideo";
    $$site = "cursoPHP";
    echo $site; 
    echo "<br>$CursoEmVideo";
    // o nome da variavel vai ser o conteudo da variavel de referencia igual o ex acima
    ?>
    
</body>
</html>