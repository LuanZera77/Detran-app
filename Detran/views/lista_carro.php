<?php
include ('verificaSessao.php');

require '../conf/config.php'; 
include '../dao/CarroDao.php';
include '../model/Carro.php';


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../css/listagem.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro</title>
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
              <h2 class="panel-title aw-titulo-panel" style="color:white;" >Listagem de Carros</h2>                 
              <a class="btn btn-success" href="carroview.php">Inserir</a>                  
          </div>
      </div>

  <table class="table table-hover" style="color:white;">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Modelo</th>
        <th scope="col">Marca</th>
        <th scope="col">Cor</th>
        <th scope="col">Placa</th>
      </tr>
    </thead>
    <tbody>
      <?php

          $carr = new CarroDao($mysql);
          $result = $carr->buscarTodos();
          foreach($result as $i){

      ?>
      <tr>
      <th scope="row"><?=$i['idtb_carro']?></th>
                      <td><?=$i['nome']?></td>
                      <td><?=$i['modelo']?></td>
                      <td><?=$i['marca']?></td>
                      <td><?=$i['cor']?></td>
                      <td><?=$i['placa']?></td>
                      <td><a href="atualizarCarro.php?id=<?=$i['idtb_carro']?>" class="btn btn-primary">Alterar</a> &nbsp;  <a href="removerCarro.php?id=<?=$i['idtb_carro']?>" class="btn btn-danger">Remover</a> &nbsp; <a href="MultaCarro.php?id=<?=$i['idtb_carro']?>" class="btn btn-success">Multa(s)</a></td>

      </tr>
      <?php }?>
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