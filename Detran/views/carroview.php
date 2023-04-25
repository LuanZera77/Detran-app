<?php 
    include ('verificaSessao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../css/cadastrar.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Carro</title>
</head>
<body>
    <div id="principal">
        <div id="titulo">
            <h2>Cadastrar</h2>
        </div>
        <form method="POST" action="../controller/controlercarro.php">
            <label>Nome</label><br>
            <input type="text" name="nome" placeholder="Digite aqui o nome do carro">
            <br>
            <label>Modelo</label><br>
            <input type="number" name="modelo" placeholder="Digite aqui o modelo">
            <br>
            <label>Marca</label><br>
            <input type="text" name="marca" placeholder="Digite aqui marca">
            <br>
            <label>Cor</label><br>
            <input type="text" name="cor" placeholder="Digite aqui a cor">
            <br>
            <label>Placa</label><br>
            <input type="text" name="placa" placeholder="Digite aqui a placa">
            <br>

            <input type="submit" class="botao" name="btn" value="Enviar">
        </form>
    </div>
</body>
</html>