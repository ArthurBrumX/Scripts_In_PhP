<?php 
    $nome = (int)$_GET["a"];

    // var_dump($nome);

    // vou passar o valor de uma variavel atraves da url no navegador
    // depois do ? é possivel atibuir valor as variaveis

    // $ip = $SERVER["REMOTE_ADDR"];
    $ip = $_SERVER["SCRIPT_NAME"];
    echo $ip;

?>