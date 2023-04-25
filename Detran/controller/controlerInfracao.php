<?php
require ('../conf/config.php');
include ('../dao/InfracaoDao.php');
include('../model/Infracao.php');
include('../dao/MultaDao.php');

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

    $descricao = $_POST['descricao'];
    $pontos = $_POST['ponto'];
    $valor = $_POST['valor'];

    $infra = new Infracao(null, $descricao,$pontos, $valor);
    $dao = new InfracaoDao($mysql);
    $dao->inserir($infra);
    header('location: ../views/lista_infracao.php');       
}
function remover($mysql) {
    $id = $_POST['id'];
    $dao = new InfracaoDao($mysql);
    $dao->remover($id);   
}
function atualizar($mysql){
    $id = $_POST['id'];
    $descricao = $_POST['descricao'];
    $pontos = $_POST['ponto'];
    $valor = $_POST['valor'];

    $infra = new Infracao($id, $descricao,$pontos, $valor);
    $dao = new InfracaoDao($mysql);
    $dao->atualizar($infra);
    header('location: ../views/lista_infracao.php');     
}
function cancelar(){
    header('location: ../views/lista_infracao.php');     
}


?>