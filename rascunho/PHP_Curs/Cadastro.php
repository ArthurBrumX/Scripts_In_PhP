<?php
    class Usuarios{
        private $conexao;
        public $erro;

        public function conectar(){
            $dbname = 'telalogin275';
            $host = 'localhost';
            $user = 'root';
            $pass = '';

            try{
                $this->conexao = new PDO("mysql.dbname=".$dbname.";host=".$host,$user,$pass);
            }
            catch(PDOExepition $e){
                echo $e->getMessage();
            }
        }
    public function Cadastrar($nome,$telefone,$email,$senha){
        $query = $this->conexao->prepare("SELECT * from ususarios WHERE email = :e");
        $query->binValue(":e",$email);
        $query->execute();
        if($query->rowCount()>0){
            return false;
        }
        else{
            $query = $this->conexao->prepare("INSERT INTO usuario (nome,email,telefone,senha) Value (:n, :e, :t, :s)");
            $query->binValue(":n",$nome);
            $query->binValue(":e",$email);
            $query->binValue(":t",$telefone);
            $query->binValue(":S",md5($senha));
            $query->binValue();

            return(0);
        }
        public function get_dados()
        {
            $query = $this->conexao->query("SELECT * FROM user");
            if($query->rowCount()>0)
            {
                $dados = $query->fetchAll(PDO::FETCH_ASSOC);
                return $dados;
            }
            else
            {
                return false;
            }
        }
    }
    }