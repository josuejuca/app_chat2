<?php
require_once '../dao/UsuarioDAO.php';
require_once '../dto/UsuarioDTO.php';
$usuarioDAO  = new UsuarioDAO;
$pesquisa = $usuarioDAO ->Pesquisar();
//var_dump($pesquisa);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Cadastro de usuário</title>
    </head>
    <body>
        <div class="container">          
            <div style="max-width: 550px; margin: auto; margin-top: 150px ;"> 
                <table class="table table-bordered">
                    <thead class="">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Login</th>
                        <th scope="col">Perfil</th>
                        <th scope="col">Alterar</th>
                        <th scope="col">Apagar</th>
                      </tr>
                    </thead>
                    <?php
                    echo '<tbody>';
                    foreach ($pesquisa as $p)
                    {
                        
                        echo '<tr>';
                        
                        //echo"{$p["idUsuario"]}{$p["nome"]}{$p["email"]}{$p["login"]}{$p["idPerfil"]}AletarApagar";
                        
                        echo " <th scope='row'> {$p["idUsuario"]} </th>";
                        echo "<td> {$p["nome"]} </td>";
                        echo "<td> {$p["email"]} </td>";
                        echo "<td> {$p["login"]} </td>";
                        echo "<td> {$p["idPerfil"]} </td>";  
                        echo "<td> Alterar </td>";
                        echo "<td> Apagar </td>";
                                              
                        echo '</tr>';
                        
                    }
                    echo '</tbody>';
                    ?>
                    <!--<tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>-->
                </table>
            </div>
        </div>
        
        <?php
        // put your code here        
        ?>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
