<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 001 - POO</title>
</head>
<body>
    <?php
        require_once 'classe_001.php';
        $c1 = new caneta; // instanciamento
        $c1 -> cor = "Azul";
        $c1 -> ponta = 0.5;
        $c1 -> tampada = true;
        $c1 -> tampar();
        print_r($c1);

        echo "<br/>";

        $c2 = new caneta;
        $c2-> cor = "verde";
        $c2-> carga = 50;
        $c2-> tampar();
        print_r($c2);

    ?>
</body>
</html>