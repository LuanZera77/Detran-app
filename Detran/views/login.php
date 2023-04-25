<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../css/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
  </div>

        <div id="principal">
          <div id="titulo">
              <h1>Login</h1>
          </div>
          <div id="formulario">
              
              <form action="../controller/controlerUsuario.php" method="POST">

                <label>E-mail</label><br>
                <input type="email" class="form" name="email" placeholder="Digite aqui seu e-mail"><br>

                <label>Senha</label><br>
                <input type="password" class="form" name="senha" placeholder="Digite aqui sua senha"><br>

                <input type="submit" id="entrar" name="btn" value="Entrar">

                <input type="submit" id="cadastro" name="btn" value="Cadastrar">

              </form>

        </div>
          </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> 
</body>
</html>