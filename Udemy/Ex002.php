<?php

    // Tipos Basicos

    $nome = "Arthur"; // string
    $site = 'www.hcode.com.br'; // string

    $ano = 1990; // inteiro
 
    $salario = 5500.90; // real

    $bloqueado = false; // booleano

    //////////////////////////////////////////////

    // array

    $frutas = array("Abacaxi","Laranja","Manga");
    echo $frutas[2];


    // objeto

    $nascimento = new DateTime();
    // var_dump($nascimento);

    ///////////////////////////////////////////////

    // resource

    $arquivo = fopen("Ex002.php","r");
    // var_dump($arquivo);

    // null

    $nulo = NULL; // nulo é ausencia de valor
    $vazio = ""; // ele foi iniciado porem n tem informacao
?>