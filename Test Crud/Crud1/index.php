<?php
include('bancoDeDados_Conexao/bancoDeDados.php');

// instacia do objeto (chamar o objeto da classe)
// no caso pra iniciar vou chama o objeto q inicia a conexao

// Cria uma variavel onde vai receber a conexao
$minhaConexao = new Conexao();

// chamando o metodo open que abra a conexao
$minhaConexao->open();

// chamar o metodo que vai verificar o status da conexao
$minhaConexao->StatusCon(); // Aqui eu verifico se ela ta aberta!

// Chmar o metodo que vai encerrar a conexao com o banco
$minhaConexao->close();

// Verificar a conexao apos o fechamento
$minhaConexao->StatusCon(); // Aqui eu verifico se ela esta fechada!