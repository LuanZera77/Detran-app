<?php

class UsuarioDao{
    private $mysql;

    function __construct($mysql)
    {
        $this->mysql = $mysql;
    }
    public function existe($obj):bool{
        $resultado = $this->mysql->prepare("select * from tb_usuario where email = ?");
        $resultado->bind_param('s',$obj->getEmail());
        $resultado->execute();
        if ($resultado->get_result()->num_rows > 0)
            return true;
        else return false;
    }
    public function verificaEmailSenha($obj):bool{
        $resultado = $this->mysql->prepare("select * from tb_usuario where email = ? and senha = ?");
        $resultado->bind_param('ss',$obj->getEmail(),$obj->getSenha());
        $resultado->execute();          
        if ($resultado->get_result()->num_rows > 0)
            return true;
        else return false;
    }
    public function inserir($obj):bool {
        if (!($this->existe($obj))) {
            $resultado = $this->mysql->prepare("insert into tb_usuario (nome,dataNascimento,telefone,email,senha) values (?,?,?,?,?)");
            $resultado->bind_param('sssss',$obj->getNome(),$obj->getDataNascimento(),$obj->getTelefone(),$obj->getEmail(),$obj->getSenha());
            $resultado->execute();
            return true;
        }
        else return false;
    }

    public function remover(string $id):void{
        $resultado = $this->mysql->prepare("delete from tb_usuario where idtb_usuario = ?");
        $resultado->bind_param('s',$id);
        $resultado->execute();
    }

    public function atualizar($obj):void{
        $resultado = $this->mysql->prepare("update tb_usuario set nome=?,dataNascimento=?,telefone=?,email=?,senha=? where idtb_usuario = ?");
        $resultado->bind_param('ssssss',$obj->getNome(),$obj->getDataNascimento(),$obj->getTelefone(),$obj->getEmail(),$obj->getSenha(),$obj->getId());
        $resultado->execute();
    }

    public function buscarPorEmail(string $email):array{
        $resultado = $this->mysql->prepare("select * from tb_usuario where email = ?");
        $resultado->bind_param('s',$email);
        $resultado->execute();
        return $resultado->get_result()->fetch_assoc();
    }

    public function buscarTodos():array{
        $resultado = $this->mysql->query("select * from tb_usuario");
        return $resultado->fetch_all(MYSQLI_ASSOC);
        
    }

}

?>