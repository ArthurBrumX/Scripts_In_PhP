<?php
    $anoNascimento = 1990;

    $sobrenome = "Brum";
    $nome1 = "João";

    $nomeCompleto = $nome1 . " " . $sobrenome; // concatenacao ( . )

    echo $nomeCompleto;

    exit; // o php vai encerrar o programa aq

    // isso é um comentario de linha

    /*
    isso é um comentario
    de varias
    linhas
     */

     // excluir variave é uma boa pratica se eu for ultilizar o mesmo nome depois

    //  echo $nome1;

    //  echo "</br>";

    //  unset ($nome1);

     //validacao basica

     if (isset($nome1)){ // isset serve para verificar se a variavel tem algum valor
        echo '$nome1';
     }

    //  echo $nome1;

?>