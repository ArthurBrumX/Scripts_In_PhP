<?php
    //Escopo Global
    $nome = "Glaucio";

    function teste(){
        //Escopo Local
        global $nome;
        echo $nome;
    }

    function teste2(){
        //Escopo Local
        $nome = "Fernando";
        echo $nome."agora no teste2";
    }

    teste();
    teste2();

    // um escopo local é quando vc cria uma variavel dentor de uma funcao o outro lugar dentro de algo
    // um escopo global é quando voce cria uma variavel fora de qualquer escopo ou seja ela é global
?>