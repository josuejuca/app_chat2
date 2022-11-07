<?php
require_once '../dao/UsuarioDAO.php';
require_once '../dto/UsuarioDTO.php';

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        <?php
            // put your code here
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $login = $_POST["login"];
            $senha = $_POST["senha"];
            $idPerfil = $_POST["idPerfil"];

            if (($nome == "") or ( $email == "" ) or ($login == "") or ($senha == "") or ($idPerfil == ""))
            {
            echo "<script>";
            echo "alert ('Todas as opções devem ser marcadas!');";
            echo "window.location.href='FFBC.php';";
            echo "</script>";
            }
            else
            {
                $usarioDTO = new UsuarioDTO;
               
                $usarioDTO ->setEmail($email);
                $usarioDTO ->setIdPerfil($idPerfil);
                $usarioDTO ->setLogin($login);
                $usarioDTO ->setNome($nome);
                $usarioDTO ->setSenha($senha);
               
                $usuarioDAO = new UsuarioDAO;
                $resutado = $usuarioDAO ->Gravar($usarioDTO);
               
               
            echo "<p><b>Nome:</p></b>".$nome;
            echo "<p><b>Email:</p></b>".$email;
            echo "<p><b>Login:</p></b>".$login;
            echo "<p><b>Senha:</p></b>".$senha;
            echo "<p><b>Escolha Perfil:</p></b>".$idPerfil;
            }
       ?>
    </body>
</html>