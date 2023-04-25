<?php

    require ('../conf/config.php');
    include ('../dao/CarroDao.php');
    include('../model/Carro.php');
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
        $nome = $_POST['nome'];
        $modelo = $_POST['modelo'];
        $marca = $_POST['marca'];
        $cor = $_POST['cor'];
        $placa = $_POST['placa'];

        $car = new Carro(null, $nome, $modelo, $marca, $cor, $placa);
        $dao = new CarroDao($mysql);
        $dao->inserir($car);
        header('location: ../views/lista_carro.php');       
    }
    function remover($mysql) {
        $id = $_POST['id'];
        $dao = new CarroDao($mysql);
        $dao->remover($id);   
    }
    function atualizar($mysql){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $modelo = $_POST['modelo'];
        $marca = $_POST['marca'];
        $cor = $_POST['cor'];
        $placa = $_POST['placa'];

        $up_car = new Carro($id, $nome, $modelo, $marca, $cor, $placa);
        $dao = new CarroDao($mysql);
        $dao->atualizar($up_car);
        header('location: ../views/lista_carro.php');    
    }
    function cancelar(){
        header('location: ../views/lista_carro.php');    
    }

?>