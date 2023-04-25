<?php
    include ('verificaSessao.php');

    require '../conf/config.php';
    include '../dao/CarroDao.php';
    include '../dao/InfracaoDao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../css/cadastrar.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Infração</title>
</head>
<body>
    <div id="principal">
        <div id="titulo">
            <h2>Cadastrar</h2>
        </div>
        <form method="POST" action="../controller/controlerMulta.php">
            
            <label>Cidade:</label><br>
            <input type="text" name="cidade">
            <br>
            <label>Data da Multa:</label><br>
            <input type="text" name="dataMulta">
            <br>
            <label>Hora Multa:</label><br>
            <input type="text" name="horaMulta">
            <br>
            <label>Placa do Veiculo:</label>
            <select name="carro">
            <?php
                $dao = new CarroDao($mysql);
                $resultado = $dao->buscarTodos();
                foreach ($resultado as $obj){
                ?>            
                <option value="<?=$obj['idtb_carro']?>"><?=$obj['placa']?></option>
                <?php
                }
                ?>
            </select>
            <br>
            <label>Infração:</label>
            <select name="infracao">
                <?php
                $dao = new InfracaoDao($mysql);
                $resultado = $dao->buscarTodos();
                foreach ($resultado as $obj){
                ?>            
                <option value="<?=$obj['idtb_infracao']?>"><?=$obj['descricao']?></option>
                <?php
                }
                ?>
            </select>
            <br>

            <input type="submit" class="botao" name="btn" value="Enviar">
        </form>
    </div>
</body>
</html>