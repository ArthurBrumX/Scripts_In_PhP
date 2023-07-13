<?php
    requise_once 'usuario.php';
    $usuario = new Usuario;
    $usuario->conectar();

    if(isset($_GET['id_user']))
    {
        $id_user = $GET['id_user'];
        if($usuario->excluir($id_user))
        {
            echo"Usuario excluido com sucesso";
            header("location:Listar.php");
        }
        

        else
        {
            echo"Algo de Errado Não Está Certo";
            header("location:Listar.php");
        }
    }
?>