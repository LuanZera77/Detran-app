<?php   
    require '../conf/config.php'; 
    include '../dao/UsuarioDao.php';
    include '../model/Usuario.php';

    $btn = $_POST['btn'];

    switch ($btn){
        case 'Entrar': entrar($mysql);
            break;
        case 'Confirmar': inserir($mysql);
            break;
        case 'Cadastrar': header('location: ../views/Cadastro.php');
            break;
    }
    function entrar($mysql){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $usuario = new Usuario(null,null,null,null,$email,$senha);
        $dao = new UsuarioDao($mysql);
        if ($dao->verificaEmailSenha($usuario)){         
            session_start();
            $_SESSION['email'] = $email;
            header('Location: ../views/home.php');
        }
        else {            
            header('Location: ../views/login.php?msg=2');
        }

    }
    function inserir($mysql) {
        $nome = $_POST['nome'];
        $dataNascimento = $_POST['dataNascimento'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $usuario = new Usuario(null,$nome,$dataNascimento,$telefone,$email,$senha);
        $dao = new UsuarioDao($mysql);
        if ($dao->inserir($usuario)){            
            header('Location: ../views/login.php?msg=1');
        }
        else {
            header('Location: ../views/Cadastro.php?msg=1');
        }
    }

    

    