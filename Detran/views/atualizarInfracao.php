<?php
    include ('verificaSessao.php');
    
    require '../conf/config.php';
    include '../dao/InfracaoDao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../css/atualizar.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Infração</title>
</head>
<body>
    <div id="principal">
        <div>
            <h2>Atualizar</h2>
        </div>

            <?php
                    $id = $_GET['id'];
                    $dao = new InfracaoDao($mysql);
                    $inst = $dao->buscarPorId($id);
                ?>
                <form method="POST" action="../controller/controlerInfracao.php">
                <label>Descrição:</label>
                    <input type="text" name="descricao"
                    value="<?=$inst['descricao']?>">
                    <br>
                    <label>N° Ponto:</label>
                    <input type="number" name="ponto"
                    value="<?=$inst['pontos']?>">
                    <br>
                    <label>Valor:</label>
                    <input type="Number" name="valor"
                    value="<?=$inst['valor']?>">
                    <br>


                    <input type="hidden"  name="id" value="<?=$id?>">
                    <input type="submit" class="botao" name="btn" value="Cancelar">
                    <input type="submit" class="botao" name="btn" value="Atualizar">
                    
                </form>
    </div>
</body>
</html>