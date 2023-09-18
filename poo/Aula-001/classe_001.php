<?php

class caneta{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar(){
        if($this -> tampada == true){
            echo "Erro! nao posso rabiscar";
        }else{
            echo "Estou Rabiscando!...";
        }
    }

    function tampar(){
        $this -> tampada = true;
    }
    function destampar(){
        $this -> tampada = false;
    }
}

?>