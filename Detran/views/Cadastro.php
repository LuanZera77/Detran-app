<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../css/cadastrar.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>

        <div id="principal">
          <div id="titulo">
              <h2>Cadastro</h2>
          </div>
          <div id="formulario">
              
              <form action="../controller/controlerUsuario.php" method="POST">

                  <label>Nome</label><br>
                  <input type="text" class="form" name="nome" placeholder="Digite aqui seu nome" required><br>
                  <label>Data de Nascimento</label><br>
                  <input type="date" class="form" name="dataNascimento" placeholder="Digite aqui sua data de nascimento" required><br>
                  <label>Telefone</label><br>
                  <input type="text" class="form" name="telefone" placeholder="Digite aqui seu Telefone" required><br>
                  <label>E-mail</label><br>
                  <input type="email" class="form" name="email" placeholder="Digite aqui sua E-mail" required><br>
                  <label>Senha</label><br>
                  <input type="password" class="form" name="senha" placeholder="Digite aqui sua Senha" required><br>

                  <input type="submit" class="botao" name='btn' value="Confirmar"> 

              </form>

        </div>
          </div>

  <div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> 
</body>
</html>