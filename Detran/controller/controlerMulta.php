<?php

require '../conf/config.php';
include '../dao/MultaDao.php';
include '../model/Multa.php';
include '../dao/InfracaoDao.php';
include '../model/Infracao.php';
include '../dao/CarroDao.php';
include '../model/Carro.php';

$btn = $_POST['btn'];

switch($btn){
    case 'Enviar': inserir($mysql);
        break;
    case 'Remover': remover($mysql);
        break;
    case 'Atualizar': atualizar($mysql);
        break;
    case 'Cancelar': cancelar();
        break;
}
function inserir($mysql){

    $cidade = $_POST['cidade'];
    $dataMulta = $_POST['dataMulta'];
    $horaMulta = $_POST['horaMulta'];
    $Idcarro = $_POST['carro'];
    $Idinfracao = $_POST['infracao'];

    $car = new Carro($Idcarro, null, null, null, null, null);
    $infra = new Infracao($Idinfracao, null, null, null);
    $mult = new Multa(null, $cidade, $dataMulta, $horaMulta,$car, $infra);
    $dao = new MultaDao($mysql);
    $dao->inserir($mult);
    header('location: ../views/lista_multa.php');      
}
function remover($mysql){
    $id = $_POST['id'];
    $dao = new MultaDao($mysql);
    $dao->remover($id);
    header('location: ../views/lista_multa.php');
}
function atualizar($mysql){
    $id = $_POST['id'];
    $cidade = $_POST['cidade'];
    $dataMulta = $_POST['dataMulta'];
    $horaMulta = $_POST['horaMulta'];
    $Idcarro = $_POST['carro'];
    $Idinfracao = $_POST['infracao'];

    $car = new Carro($Idcarro, null, null, null, null, null);
    $infra = new Infracao($Idinfracao, null, null, null);
    $mult = new Multa($id, $cidade, $dataMulta, $horaMulta,$car, $infra);
    $dao = new MultaDao($mysql);
    $dao->atualizar($mult);
    header('location: ../views/lista_multa.php');
}
function cancelar(){
    header('location: ../views/lista_Multa.php');     
}

?>