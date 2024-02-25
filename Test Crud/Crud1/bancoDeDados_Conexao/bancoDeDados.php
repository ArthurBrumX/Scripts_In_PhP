<?php

// criar uma classe que ira receber a conexao com o banco de dados

class Conexao{

    // configuracao do banco q eu vou conectar
    protected $host = "localhost";
    protected $user = "postgres";
    protected $password = "1234";
    protected $dbname = "Clientes";
    protected $conn = null;
    function __construct(){}

    // metodos que ira iniciar a conexao com o banco
    function Open(){
        $this->conn=pg_connect("host=$this->host user=$this->user password=$this->password dbname=$this->dbname");

        return $this->conn;
    }

    // --------------------------------------------------------------------------------------------------------------------------

    //metodo que encerra a conexao
    function Close(){
        @pg_close($this->conn);
    }

    // --------------------------------------------------------------------------------------------------------------------------

    // metodo que verifica se foi mesmo feita a conexao
    function StatusCon(){
        if (!$this->conn){
            echo "<h3>O sistema Não Está Conectado á [$this->dbname] em [$this->host]!!!</h3>";
            exit;
        }
        else{
            echo "<h3>O sistema Está Conectado á [$this->dbname] em [$this->host]!!! </h3>";
        }
    }
}