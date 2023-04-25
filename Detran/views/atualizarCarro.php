<?php
    include ('verificaSessao.php');
    
    require '../conf/config.php';
    include '../dao/CarroDao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../css/atualizar.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Carro</title>
</head>
<body>
    <div id="principal">
        <div>
            <h2 id="titulo">Atualizar</h2>
        </div>
        <?php
                $id = $_GET['id'];
                $dao = new CarroDao($mysql);
                $inst = $dao->buscarPorId($id);
            ?>
            <form method="POST" action="../controller/controlercarro.php">
                <label>Nome:</label>
                <input type="text" name="nome"
                value="<?=$inst['nome']?>">
                <br>
                <label>Modelo:</label>
                <input type="number" name="modelo"
                value="<?=$inst['modelo']?>">
                <br>
                <label>Marca:</label>
                <input type="text" name="marca"
                value="<?=$inst['marca']?>">
                <br>
                <label>Cor:</label>
                <input type="text" name="cor"
                value="<?=$inst['cor']?>">
                <br>
                <label>Placa:</label>
                <input type="text" name="placa"
                value="<?=$inst['placa']?>">

                <br>
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="btn" value="Cancelar">
                <input type="submit" name="btn" value="Atualizar">
                
            </form>
    </div>
</body>
</html>