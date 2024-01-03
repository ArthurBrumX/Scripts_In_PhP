<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    <?php
        // para mostrar o valor das variaveis
        $n1 = 3;
        $n2 = 2;
        echo "A soma vale $n1 + $n2 <br>";

        // Para mostrar o valor da soma das variaveis
        $n3 = 3;
        $n4 = 2;
        echo "A soma Vale ".($n3 + $n4); // Colocar fora das aspas e dentro de parenteses.

        // -------------------------------------------------------------------------------

        $a1 = 3;
        $a2 = 2;

        echo "<br/> A soma Vale ".($a1 + $a2);
        echo "<br/> A subtracao Vale ".($a1 - $a2);
        echo "<br/> A multiplicacao Vale ".($a1 * $a2);
        echo "<br/> A divisao Vale ".($a1 / $a2);
        echo "<br/> A modulo Vale ".($a1 % $a2);

        // Ordem De Precedencia

        // 1º
            // parenteses () 

        // 2º - 'Qual aparecer primeiro'
            // multiplicacao * 
            // Divisao / 
            // modulo % 

        // 3º -'Qual aparecer primeiro'
            // Adicao +
            // Subtracao -

        // calculando a media

        $m = ($a1 + $a2) / 2; // Usando a ordem de precedencia
        echo "<br/> A media vale $m";
    ?>
    
</body>
</html>