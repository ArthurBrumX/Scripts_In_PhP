<?php
    // Existem dois tipos de colocar o valor na variavel
    // via get (pela barra de pesquisa no navegador) informacoes externas

    $a = (int)$_GET["a"];  // definindo a variavel com o metodo get
    $b = (int)$_GET["b"];  // definindo a variavel com o metodo get

    var_dump($a); // A funcao var_dump é para inspecionar oq tem dentro de uma variavel naquele momento.
    var_dump($b); // A funcao var_dump é para inspecionar oq tem dentro de uma variavel naquele momento.
    // http://localhost/GitHub/Scripts_In_PhP/Udemy/variaveisPreDefinidas.php?a=123 (como q foi definido o valor da variavel a)

    $nome = (string)$_GET["nome"];
    $idade = (string)$_GET["idade"];
    $sexo = (string)$_GET["sexo"];
    $tamanho = (float)$_GET["tamanho"];

    var_dump($nome);
    var_dump($idade);
    var_dump($sexo);
    var_dump($tamanho);
    
    echo("Eu me chamo ".$nome);
    echo(" Tenho ".$idade." Anos, ");
    echo("Sou do sexo ".$sexo);
    echo(" e tenho atualmente de altura ".$tamanho);

    // Pegando o IP do usuario

    $ip = $_SERVER["REMOTE_ADDR"]; // pega informacao do ambiente
    $ip2 = $_SERVER["SCRIPT_NAME"];

    echo $ip;
    echo $ip2;

?>