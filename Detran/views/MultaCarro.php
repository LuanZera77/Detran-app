<?php

require '../conf/config.php'; 
include '../dao/MultaDao.php';
include '../model/Multa.php';
include '../dao/InfracaoDao.php';
include '../model/Infracao.php';
include '../dao/CarroDao.php';
include '../model/Carro.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="../css/listagem.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>

  <div id="cabecalho" style="border-bottom: 5px solid white;">
    <?php
      include '../views/cabecalho.php';
    ?>
  </div>

  <div class="panel panel-default" style="margin: 10px">
        
      <div class="panel-heading">
          <div class="clearfix">
              <h2 class="panel-title aw-titulo-panel" style="color:white;">Listagem de Multas</h2>                  
          </div>
      </div>

  <table class="table table-hover" style="color:white;">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Data</th>
        <th scope="col">Hora</th>
        <th scope="col">Placa do Carro</th>
        <th scope="col">Infração</th>
        <th scope="col">Valor</th>
        


      </tr>
    </thead>
    <tbody>
      <?php
        $total = 0;

          $id = $_GET['id'];
          $infra = new MultaDao($mysql);
          $result = $infra->buscarMultaCarro($id);
          foreach($result as $info){
      ?>
      <tr>
      <th scope="row"><?=$info['idtb_multa']?></th>
                      <td><?=$info['dataMulta']?></td>
                      <td><?=$info['horaMulta']?></td>

                      <?php
                          $daoC =  new CarroDao($mysql);
                          $c = $daoC->buscarPorId($info['tb_carro_idtb_carro']);
                      ?>
                      <td><?=$c['placa']?></td>

                      <?php
                          $daoI =  new InfracaoDao($mysql);
                          $infra = $daoI->buscarPorId($info['tb_infracao_idtb_infracao']);
                          $total += $infra['valor'];
                      ?>
                      <td><?=$infra['descricao']?></td>
                      <td><?=$infra['valor']?></td>
                      <?php
                      

                      ?>
      
      </tr>
      <?php }; 
      ?>
      <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">Total: R$ <?php echo $total;?></th>
      </tr>
    </tbody>
  </table>

  <div>
    <?php
    
    include '../views/rodape.php';
            
    ?>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> 
</body>
</html>