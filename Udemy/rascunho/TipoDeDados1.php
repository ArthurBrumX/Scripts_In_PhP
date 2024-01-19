<?php
  $nome= "hcode"; //String
  $site = 'www.hcode.com'; //string
  $ano = 2023; // inteiro
  $salario = 2500.90; // Real
  $bloqueado = false;  

  ////////////////////////////////////////

  // Array

  $frutas = array("Laranja","Uva","Melancia");
  echo $frutas[2];

  // poo (objeto)

  $nascimento = new DateTime(); // criando um instanciamento
  var_dump($nascimento);

  $arquivo = fopen("HelloWorld.php","r");
  //var_dump($arquivo)

  $nulo = NULL; // ausencia de valor
  $quaseNulo = ""; // Aqui ja esta reservado um espaco na memoria
?>