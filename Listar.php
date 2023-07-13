<?php
    require_once'usuario.php';
    $usuario = new Usuario;
    $usuario->conectar();

    $dados = $usuario->get_dados();
    $tabela='';
    
    foreach($dados as $row_user)
    {
        $tabela .=
                '<tr>
                    <td>'.$row_user['nome'].'</td>
                    <td>'.$row_user['email'].'</td>
                    <td>'.$row_user['telefone'].'</td>
                    <td>'.$row_user['senha'].'</td>
                    <td><a href="editar.php?id_user='.$row_user['id_user'].'">Editar</a></td>
                    <td><a href="editar.php?id_user='.$row_user['id_user'].'">Editar</a></td>
                    <td><a href="editar.php?id_user='.$row_user['id_user'].'">Editar</a></td>
                </tr>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LISTAR DADOS</h1>
    <table Border="1px">
        <thead>
            <th>nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Senha</th>
        </thead>
        
    </table>
</body>
</html>