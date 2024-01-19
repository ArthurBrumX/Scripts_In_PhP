<?php
    //primeira letra minuscula e as demais iniciais ser maiuscula;
    $anoDeNascimento = 2002;
    $nomeCompleto = "ArthurBrum";
    //Variaveis n podem comecar com numero;
        // $1ano = 2;
    // Variaveis so podem ter o caracter especial underline;
        // $nome_Completo = brunoCorreia;
    // Variaveis nao poder ser palavas reservadas;

    // Limpando uma variavel

    $meunome = "Arthur";
    echo "<br>$meunome";
    unset($meunome); // Para Limpar o valor da variavel;
    //Unset limpa o vaor de uma variavel;

    if(isset($meunome)){ // Se a variavel existir = isset
        echo "Essa variave existe";
    }
    
    // Concatenacao

    $nome = "Arthur";
    $idade = 21;
    $curso = "udemy";

    echo "<br> Seu nome é $nome, sua idade é $idade, e esta fazendo o curso da $curso!";

?>