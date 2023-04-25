<?php 

    class CarroDao{

        private $mysql;

        function __construct($mysql)
        {
            $this->mysql = $mysql;   
        }
        public function inserir($obj):void {
            $resultado = $this->mysql->prepare("INSERT INTO tb_carro (nome, modelo,marca,cor,placa) value (?,?,?,?,?)");
            $resultado->bind_param("sssss", $obj->getNome(), $obj->getModelo(), $obj->getMarca(), $obj->getCor(),$obj->getPlaca());
            $resultado->execute();
        }
        public function remover(string $id):void{

            $obj = new MultaDao($this->mysql);

            if($obj->temMulta($id)){
                header('location: ../views/ErrorExcluir.php');
            }else{
                $resultado = $this->mysql->prepare("delete from tb_carro where idtb_carro = ?");
                $resultado->bind_param('s',$id);
                $resultado->execute();
                header('location: ../views/lista_carro.php'); 
            }

        }
        public function atualizar($obj):void{
            $resultado = $this->mysql->prepare("update tb_carro set nome=?,modelo=?, marca=?,cor=?,placa=? where idtb_carro = ?");
            $resultado->bind_param("ssssss", $obj->getNome(), $obj->getModelo(), $obj->getMarca(), $obj->getCor(),$obj->getPlaca(),$obj->getId());
            $resultado->execute();
        }
        public function buscarPorId(string $id):array{
            $resultado = $this->mysql->prepare("select * from tb_carro where idtb_carro = ?");
            $resultado->bind_param('s',$id);
            $resultado->execute();
            return $resultado->get_result()->fetch_assoc();
        }
        public function buscarTodos():array{
            $resultado = $this->mysql->query("select * from tb_carro");
            return $resultado->fetch_all(MYSQLI_ASSOC);
            
        }
        
        
    }

?>