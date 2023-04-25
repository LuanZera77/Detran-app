<?php

    class InfracaoDao{

        private $mysql;

        function __construct($mysql)
        {
            $this->mysql = $mysql;   
        }
        public function inserir($obj):void {
            $resultado = $this->mysql->prepare("INSERT INTO tb_infracao(descricao,pontos, valor) value (?,?,?)");
            $resultado->bind_param("sss", $obj->getDescricao(), $obj->getPontos(), $obj->getValor());
            $resultado->execute();
        }
        public function remover(string $id):void{

            $obj = new MultaDao($this->mysql);

            if($obj->temInfracao($id)){
                header('location: ../views/ErrorExcluir.php');
            }else{
                $resultado = $this->mysql->prepare("delete from tb_infracao where idtb_infracao = ?");
                $resultado->bind_param('s', $id);
                $resultado->execute();
                header('location: ../views/lista_infracao.php');  
            }
        }
        public function atualizar($obj):void{
        $resultado = $this->mysql->prepare("update tb_infracao set descricao=?,pontos=?,valor=? where idtb_infracao = ?");
        $resultado->bind_param('ssss',$obj->getDescricao(),$obj->getPontos(),$obj->getValor(),$obj->getId());
        $resultado->execute();
        }
        public function buscarPorId(string $id):array{
            $resultado = $this->mysql->prepare("select * from tb_infracao where idtb_infracao = ?");
            $resultado->bind_param('s',$id);
            $resultado->execute();
            return $resultado->get_result()->fetch_assoc();
        }
        public function buscarTodos():array{
            $resultado = $this->mysql->query("select * from tb_infracao");
            return $resultado->fetch_all(MYSQLI_ASSOC);
            
        }

    }

?>