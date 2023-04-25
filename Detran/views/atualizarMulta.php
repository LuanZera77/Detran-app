<?php
    include ('verificaSessao.php');

    require '../conf/config.php';
    include '../dao/MultaDao.php';
    include '../dao/CarroDao.php';
    include '../dao/InfracaoDao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../css/atualizar.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Multa</title>
</head>
<body>

    <div id="principal">
        <div id="titulo">
            <h2>Atualizar</h2>
        </div>
        <?php
                $id = $_GET['id'];
                $dao = new MultaDao($mysql);
                $inst = $dao->buscarPorId($id);
            ?>
            <form method="POST" action="../controller/controlerMulta.php">
                <label>Cidade:</label>
                <input type="text" name="cidade" value="<?=$inst['cidade']?>">
                <br>
                <label>Data da Multa: </label>
                <input type="text" name="dataMulta" value="<?=$inst['dataMulta']?>">
                <br>
                <label>Hora Multa: </label>
                <input type="text" name="horaMulta" value="<?=$inst['horaMulta']?>">
                <br>
                <label>Veiculo:</label>
                <select name="carro">
                <?php
                    $dao = new CarroDao($mysql);
                    $resultado = $dao->buscarTodos();
                    foreach ($resultado as $obj){
                        if ($resultado['tb_carro_idtb_carro'] == $obj['idtb_carro']){
                            ?>
                                <option value="<?=$obj['idtb_carro']?>" selected><?=$obj['placa']?></option>
                            <?php
                                }
                                else {
                            ?>
                                <option value="<?=$obj['idtb_carro']?>"><?=$obj['placa']?></option>
                        <?php
                                }
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
                        if ($resultado['tb_infracao_idtb_infracao'] == $obj['idtb_infracao']){
                            ?>
                                <option value="<?=$obj['idtb_infracao']?>" selected><?=$obj['descricao']?></option>
                            <?php
                                }
                                else {
                            ?>
                                <option value="<?=$obj['idtb_infracao']?>"><?=$obj['descricao']?></option>
                
                            
                        <?php
                                }
                            }
                        ?>
                </select>
                <br>


                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" class="botao" name="btn" value="Cancelar">
                <input type="submit" class="botao" name="btn" value="Atualizar">
                
            </form>
    </div>
</body>
</html>