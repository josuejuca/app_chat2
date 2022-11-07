<!doctype html>
<html lang="pt-br">
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
                <h3 style="text-align: center; margin: 10px;">Cadastro usuário</h3>
                <form name="new_usuario" method="post" action="controller/new_usuario.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nome</label>
                            <input  required type="text" class="form-control" name="nome" placeholder="Nome">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Email</label>
                            <input name="email"type="email" class="form-control"  placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Login</label>
                        <input required type="text" class="form-control" name="login" placeholder="Login">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Senha</label>
                        <input required type="password" class="form-control" name="senha" placeholder="Senha">
                    </div>
                    <div class="form-row">                  
                        <div class="form-group col-md-4">
                            <label>Escolha o perfil</label>
                                <select  name="idPerfil" class="form-control">
                                   <option></option>
                                    <option value="1">Administrador</option>
                                    <option value="2">Moderador</option>
                                    <option value="3">Participante</option>
                                </select>
                        </div>                  
                    </div>               
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="reset" class="btn btn-primary">Limpar</button>
                </form>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>